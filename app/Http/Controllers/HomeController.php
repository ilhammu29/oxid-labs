<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use App\Models\Project;
use Illuminate\Http\Request;

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
     * Handle contact form inquiry submission.
     */
    public function submitInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'nullable|string|max:200',
            'project_type' => 'nullable|string|max:100',
            'timeline' => 'nullable|string|max:100',
            'message' => 'required|string|max:3000',
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

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Transmission received. The OXID Labs engineering team will evaluate your inquiry shortly.'
            ]);
        }

        return back()->with('success', 'Transmission received. The OXID Labs engineering team will evaluate your inquiry shortly.');
    }
}
