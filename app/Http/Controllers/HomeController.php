<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class HomeController extends Controller
{
    /**
     * Display the Oxid Labs home page.
     */
    public function index()
    {
        $featuredProjects = Project::published()
            ->where('is_featured', true)
            ->orderBy('display_order', 'asc')
            ->take(3)
            ->get();

        $projects = Project::published()
            ->orderBy('display_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        $categories = Project::published()
            ->select('category')
            ->distinct()
            ->pluck('category')
            ->filter()
            ->values();

        return view('frontend.index', compact('featuredProjects', 'projects', 'categories'));
    }

    /**
     * Display the dedicated Products Catalog page.
     */
    public function products()
    {
        $projects = Project::published()
            ->orderBy('display_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        $categories = Project::published()
            ->select('category')
            ->distinct()
            ->pluck('category')
            ->filter()
            ->values();

        return view('frontend.products', compact('projects', 'categories'));
    }

    /**
     * Display the dedicated Services page.
     */
    public function services()
    {
        return view('frontend.services');
    }

    /**
     * Display the dedicated Capabilities page.
     */
    public function capabilities()
    {
        return view('frontend.capabilities');
    }

    /**
     * Display the dedicated Studio / Philosophy page.
     */
    public function studio()
    {
        return view('frontend.studio');
    }

    /**
     * Display the dedicated Contact page.
     */
    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Get project details for AJAX modal.
     */
    public function getProjectDetail($slug)
    {
        $project = Project::published()->where('slug', $slug)->firstOrFail();

        return response()->json([
            'success' => true,
            'project' => [
                'id' => $project->id,
                'title' => $project->title,
                'slug' => $project->slug,
                'category' => $project->category,
                'client_name' => $project->client_name ?? 'Internal Venture',
                'year' => $project->year ?? date('Y'),
                'summary' => $project->summary,
                'description' => $project->description,
                'thumbnail_url' => $project->thumbnail_url,
                'media' => $project->media_list,
                'tech_stack' => $project->tech_stack ?? [],
                'demo_url' => $project->demo_url,
                'github_url' => $project->github_url,
                'is_featured' => (bool)$project->is_featured,
            ]
        ]);
    }

    /**
     * Handle contact form inquiry submission with rate limiting and anti-spam defenses.
     */
    public function submitInquiry(Request $request)
    {
        $ip = $request->ip() ?: '127.0.0.1';
        $throttleKey = 'contact-submission|' . $ip;

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            $throttleMessage = "Transmission limit reached. Please wait {$seconds} seconds before sending another inquiry.";

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $throttleMessage,
                ], 429);
            }

            return back()->withErrors([
                'contact' => $throttleMessage,
            ])->withInput();
        }

        // Honeypot check: if hidden field is filled, silently drop to avoid training spam bots
        if ($request->filled('website')) {
            RateLimiter::hit($throttleKey, 600);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Transmission received. The OXID Labs engineering team will evaluate your inquiry shortly.'
                ]);
            }

            return back()->with('success', 'Transmission received. The OXID Labs engineering team will evaluate your inquiry shortly.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'nullable|string|max:200',
            'project_type' => 'nullable|string|max:100',
            'timeline' => 'nullable|string|max:100',
            'message' => 'required|string|max:3000',
            'website' => 'nullable|string|max:100',
        ]);

        $subject = $validated['subject'] ?? ($validated['project_type'] ?? 'Project Inquiry');

        $messageContent = $validated['message'];
        if (!empty($validated['project_type'])) {
            $messageContent = "[Scope: " . $validated['project_type'] . "]\n" . $messageContent;
        }
        if (!empty($validated['timeline'])) {
            $messageContent .= "\n\n[Timeline / Budget: " . $validated['timeline'] . "]";
        }

        ContactInquiry::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $subject,
            'message' => $messageContent,
        ]);

        RateLimiter::hit($throttleKey, 300);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Transmission received. The OXID Labs engineering team will evaluate your inquiry shortly.'
            ]);
        }

        return back()->with('success', 'Transmission received. The OXID Labs engineering team will evaluate your inquiry shortly.');
    }
}
