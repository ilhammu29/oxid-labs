@extends('layouts.admin')

@section('title', 'Register New Project // OXID ADMIN')
@section('header_title', 'NEW PROJECT SPECIFICATION')

@section('content')
    <div class="max-w-4xl mx-auto space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-bold text-slate-900 dark:text-white uppercase tracking-tight">Add Project to Catalog</h2>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Register a new engineering project, upload assets, and define publishing status.</p>
            </div>
            <a href="{{ route('admin.projects.index') }}" class="text-xs font-mono text-slate-500 hover:text-slate-900 dark:hover:text-white transition-colors">
                &larr; Back to Catalog
            </a>
        </div>

        @if ($errors->any())
            <div class="p-4 rounded-2xl bg-rose-500/10 border border-rose-500/20 text-rose-600 dark:text-rose-300 font-mono text-xs">
                <span class="font-bold uppercase tracking-wider block mb-1">Please correct the following:</span>
                <ul class="list-disc list-inside space-y-0.5 text-xs text-rose-600 dark:text-rose-300">
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="p-6 sm:p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 shadow-sm space-y-8">
            @csrf

            <!-- Section 1: Basic Information & Publishing Status -->
            <div>
                <h3 class="text-xs font-mono uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-4 pb-2 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-slate-900 dark:bg-white"></span>
                    <span>1. Identity &amp; Publishing Status</span>
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="space-y-1.5 sm:col-span-2">
                        <label for="title" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Project Title *</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" required placeholder="e.g. Sentinel IoT Cloud Platform" class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10">
                    </div>

                    <div class="space-y-1.5">
                        <label for="category" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Primary Category *</label>
                        <input type="text" id="category" name="category" value="{{ old('category', 'Web Application') }}" required placeholder="Web Application / Mobile / AI / Cloud" class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10">
                    </div>

                    <div class="space-y-1.5">
                        <label for="status" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Publishing Status *</label>
                        <select id="status" name="status" required class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10">
                            <option value="published" {{ old('status', 'published') === 'published' ? 'selected' : '' }}>Published (Live on Public Website)</option>
                            <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft (Hidden from Public Showcase)</option>
                        </select>
                    </div>

                    <div class="space-y-1.5">
                        <label for="client_name" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Client / Lab Initiative</label>
                        <input type="text" id="client_name" name="client_name" value="{{ old('client_name') }}" placeholder="e.g. Apex Corporation or Internal R&D" class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10">
                    </div>

                    <div class="space-y-1.5">
                        <label for="year" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Deployment Year</label>
                        <input type="text" id="year" name="year" value="{{ old('year', date('Y')) }}" placeholder="2026" class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10">
                    </div>

                    <div class="space-y-1.5 sm:col-span-2">
                        <label for="slug" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">URL Slug (Optional)</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Auto-generated from title if left blank" class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10 font-mono text-xs">
                    </div>
                </div>
            </div>

            <!-- Section 2: Narrative Content -->
            <div>
                <h3 class="text-xs font-mono uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-4 pb-2 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-slate-900 dark:bg-white"></span>
                    <span>2. Narrative Content</span>
                </h3>

                <div class="space-y-5">
                    <div class="space-y-1.5">
                        <label for="summary" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Catalog Card Summary * (Max 500 chars)</label>
                        <textarea id="summary" name="summary" rows="3" required placeholder="A concise executive summary shown on catalog cards..." class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10">{{ old('summary') }}</textarea>
                    </div>

                    <div class="space-y-1.5">
                        <label for="description" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Full Architectural Description (Markdown/Text)</label>
                        <textarea id="description" name="description" rows="6" placeholder="In-depth breakdown of the technical problem, architecture, engineering decisions, and metrics..." class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10 font-mono text-xs">{{ old('description') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Section 3: Media & Gallery Assets -->
            <div>
                <h3 class="text-xs font-mono uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-4 pb-2 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-slate-900 dark:bg-white"></span>
                    <span>3. Media Gallery &amp; Video Demonstration</span>
                </h3>

                <div class="space-y-5">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label for="thumbnail" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Upload Project Thumbnail</label>
                            <input type="file" id="thumbnail" name="thumbnail" accept="image/*" class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-3 py-2.5 text-xs text-slate-600 dark:text-slate-300 file:mr-3 file:py-1.5 file:px-3 file:rounded-full file:border-0 file:text-xs file:bg-slate-900 file:text-white dark:file:bg-white dark:file:text-slate-950 font-medium">
                        </div>

                        <div class="space-y-1.5">
                            <label for="thumbnail_url" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">OR External Image URL</label>
                            <input type="url" id="thumbnail_url" name="thumbnail_url" value="{{ old('thumbnail_url') }}" placeholder="https://images.unsplash.com/..." class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label for="gallery_urls" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Gallery Image URLs (one per line)</label>
                            <textarea id="gallery_urls" name="gallery_urls" rows="3" placeholder="https://...&#10;https://..." class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10 font-mono text-xs">{{ old('gallery_urls') }}</textarea>
                        </div>

                        <div class="space-y-1.5">
                            <label for="video_url" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Video Demo URL (MP4 / WebM / relative)</label>
                            <input type="text" id="video_url" name="video_url" value="{{ old('video_url') }}" placeholder="/videos/demo.mp4 or https://..." class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10 font-mono text-xs">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Architecture & Links -->
            <div>
                <h3 class="text-xs font-mono uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-4 pb-2 border-b border-slate-100 dark:border-slate-800 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-slate-900 dark:bg-white"></span>
                    <span>4. Technical Stack &amp; External Links</span>
                </h3>

                <div class="space-y-5">
                    <div class="space-y-1.5">
                        <label for="tech_stack_input" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Tech Stack Tags (Comma-separated)</label>
                        <input type="text" id="tech_stack_input" name="tech_stack_input" value="{{ old('tech_stack_input') }}" placeholder="Laravel 11, Go, Redis, TailwindCSS, Docker" class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10 font-mono text-xs">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label for="demo_url" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Live Demo / Production URL</label>
                            <input type="url" id="demo_url" name="demo_url" value="{{ old('demo_url') }}" placeholder="https://..." class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10">
                        </div>

                        <div class="space-y-1.5">
                            <label for="github_url" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">Repository / Codebase Link</label>
                            <input type="url" id="github_url" name="github_url" value="{{ old('github_url') }}" placeholder="https://github.com/..." class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 5: Showcase Controls & Submission -->
            <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex flex-wrap items-center justify-between gap-5">
                <div class="flex items-center gap-6">
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }} class="w-4 h-4 rounded bg-slate-100 dark:bg-slate-800 border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:ring-0 cursor-pointer">
                        <span class="text-xs font-mono uppercase tracking-wider text-slate-700 dark:text-slate-300 group-hover:text-slate-900 dark:group-hover:text-white transition-colors">Feature in Showcase Carousel</span>
                    </label>

                    <div class="flex items-center gap-2">
                        <label for="display_order" class="text-xs font-mono text-slate-500 dark:text-slate-400">Sort Priority:</label>
                        <input type="number" id="display_order" name="display_order" value="{{ old('display_order', 0) }}" min="0" class="w-16 bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-2.5 py-1.5 text-xs text-slate-900 dark:text-white text-center focus:outline-none focus:border-slate-900 dark:focus:border-white">
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.projects.index') }}" class="btn-pill-secondary px-5 py-2.5 text-xs">
                        Cancel
                    </a>
                    <button type="submit" class="btn-pill-primary px-7 py-2.5 text-xs uppercase tracking-wider shadow-sm cursor-pointer">
                        Register Project
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
