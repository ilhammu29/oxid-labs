<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of projects in CMS.
     */
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('summary', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $projects = $query->orderBy('display_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $categories = Project::select('category')->distinct()->pluck('category')->filter()->values();

        $totalCount = Project::count();
        $publishedCount = Project::where('status', 'published')->count();
        $draftCount = Project::where('status', 'draft')->count();

        return view('admin.projects.index', compact('projects', 'categories', 'totalCount', 'publishedCount', 'draftCount'));
    }

    /**
     * Show form for creating a new project.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created project in database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'slug' => 'nullable|string|max:200|unique:projects,slug',
            'category' => 'required|string|max:100',
            'status' => 'nullable|in:published,draft',
            'client_name' => 'nullable|string|max:150',
            'year' => 'nullable|string|max:10',
            'summary' => 'required|string|max:500',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'thumbnail_url' => 'nullable|url|max:500',
            'gallery_urls' => 'nullable|string',
            'video_url' => 'nullable|string|max:500',
            'tech_stack_input' => 'nullable|string',
            'demo_url' => 'nullable|url|max:500',
            'github_url' => 'nullable|url|max:500',
            'is_featured' => 'boolean',
            'display_order' => 'integer|min:0',
        ]);

        $slug = !empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['title']);
        
        // Ensure slug uniqueness
        $originalSlug = $slug;
        $counter = 1;
        while (Project::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }
        $validated['slug'] = $slug;

        // Parse tech stack tags
        $techStack = [];
        if (!empty($validated['tech_stack_input'])) {
            $techStack = array_filter(array_map('trim', explode(',', $validated['tech_stack_input'])));
        }
        $validated['tech_stack'] = array_values($techStack);

        // Parse gallery URLs
        if (!empty($request->input('gallery_urls'))) {
            $rawUrls = preg_split('/[\r\n,]+/', $request->input('gallery_urls'));
            $validated['gallery'] = array_values(array_filter(array_map('trim', $rawUrls)));
        } else {
            $validated['gallery'] = null;
        }

        // Handle thumbnail: upload file or custom URL
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('projects', 'public');
            $this->mirrorToPublic($path);
            $validated['thumbnail'] = $path;
        } elseif (!empty($validated['thumbnail_url'])) {
            $validated['thumbnail'] = $validated['thumbnail_url'];
        }

        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['display_order'] = $request->input('display_order', 0);
        $validated['video_url'] = $request->filled('video_url') ? trim($request->input('video_url')) : null;
        $validated['status'] = $request->input('status', 'published') ?: 'published';

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Show form for editing an existing project.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update an existing project in database.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'slug' => 'nullable|string|max:200|unique:projects,slug,' . $project->id,
            'category' => 'required|string|max:100',
            'status' => 'nullable|in:published,draft',
            'client_name' => 'nullable|string|max:150',
            'year' => 'nullable|string|max:10',
            'summary' => 'required|string|max:500',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'thumbnail_url' => 'nullable|url|max:500',
            'gallery_urls' => 'nullable|string',
            'video_url' => 'nullable|string|max:500',
            'tech_stack_input' => 'nullable|string',
            'demo_url' => 'nullable|url|max:500',
            'github_url' => 'nullable|url|max:500',
            'is_featured' => 'boolean',
            'display_order' => 'integer|min:0',
        ]);

        if (!empty($validated['slug'])) {
            $slug = Str::slug($validated['slug']);
        } else {
            $slug = Str::slug($validated['title']);
        }

        // Ensure slug uniqueness (excluding current project)
        $originalSlug = $slug;
        $counter = 1;
        while (Project::where('slug', $slug)->where('id', '!=', $project->id)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }
        $validated['slug'] = $slug;

        // Parse tech stack tags
        $techStack = [];
        if (!empty($validated['tech_stack_input'])) {
            $techStack = array_filter(array_map('trim', explode(',', $validated['tech_stack_input'])));
        }
        $validated['tech_stack'] = array_values($techStack);

        // Parse gallery URLs
        if ($request->has('gallery_urls')) {
            if (!empty($request->input('gallery_urls'))) {
                $rawUrls = preg_split('/[\r\n,]+/', $request->input('gallery_urls'));
                $validated['gallery'] = array_values(array_filter(array_map('trim', $rawUrls)));
            } else {
                $validated['gallery'] = null;
            }
        }

        // Handle thumbnail
        if ($request->hasFile('thumbnail')) {
            // Remove previous local file if applicable
            $this->deletePublicThumbnail($project->thumbnail);
            $path = $request->file('thumbnail')->store('projects', 'public');
            $this->mirrorToPublic($path);
            $validated['thumbnail'] = $path;
        } elseif (!empty($validated['thumbnail_url'])) {
            $validated['thumbnail'] = $validated['thumbnail_url'];
        }

        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['display_order'] = $request->input('display_order', 0);
        $validated['video_url'] = $request->filled('video_url') ? trim($request->input('video_url')) : null;

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the project from database.
     */
    public function destroy(Project $project)
    {
        $this->deletePublicThumbnail($project->thumbnail);

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project removed successfully.');
    }

    /**
     * Toggle status between published and draft.
     */
    public function toggleStatus(Project $project)
    {
        $newStatus = $project->status === 'published' ? 'draft' : 'published';
        $project->update(['status' => $newStatus]);

        return back()->with('success', 'Project status updated to ' . ucfirst($newStatus) . '.');
    }

    /**
     * Toggle featured status.
     */
    public function toggleFeatured(Project $project)
    {
        $project->update(['is_featured' => !$project->is_featured]);
        $state = $project->is_featured ? 'featured' : 'standard';

        return back()->with('success', "Project marked as {$state}.");
    }

    /**
     * Mirror a storage/app/public file to public_path('storage/...') for environments
     * where storage symlinks are disabled or separated.
     */
    private function mirrorToPublic(string $path): void
    {
        try {
            $source = storage_path('app/public/' . $path);
            $destination = public_path('storage/' . $path);

            if (file_exists($source) && is_file($source)) {
                $destDir = dirname($destination);
                if (!is_dir($destDir)) {
                    @mkdir($destDir, 0755, true);
                }
                @copy($source, $destination);
            }
        } catch (\Throwable $e) {
            // Fail gracefully
        }
    }

    /**
     * Remove a file from both storage/app/public and public_path('storage/...').
     */
    private function deletePublicThumbnail(?string $path): void
    {
        if (!$path || Str::startsWith($path, ['http://', 'https://'])) {
            return;
        }

        try {
            Storage::disk('public')->delete($path);
        } catch (\Throwable $e) {}

        try {
            $publicFile = public_path('storage/' . $path);
            if (file_exists($publicFile) && is_file($publicFile)) {
                @unlink($publicFile);
            }
        } catch (\Throwable $e) {}
    }
}
