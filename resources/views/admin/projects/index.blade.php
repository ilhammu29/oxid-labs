@extends('layouts.admin')

@section('title', 'Manage Projects Catalog // OXID ADMIN')
@section('header_title', 'PROJECTS CATALOG')

@section('content')
    <div class="space-y-6">
        <!-- Status Filter Tabs -->
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.projects.index', array_merge(request()->except(['status', 'page']))) }}" 
                   class="px-4 py-2 rounded-full text-xs font-mono transition-all {{ !request('status') ? 'bg-slate-900 text-white dark:bg-white dark:text-slate-950 font-semibold shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80' }}">
                    All Projects ({{ $totalCount }})
                </a>
                <a href="{{ route('admin.projects.index', array_merge(request()->except(['status', 'page']), ['status' => 'published'])) }}" 
                   class="px-4 py-2 rounded-full text-xs font-mono transition-all {{ request('status') === 'published' ? 'bg-emerald-600 text-white font-semibold shadow-sm' : 'text-emerald-700 dark:text-emerald-400 hover:text-emerald-900 dark:hover:text-white bg-emerald-50 dark:bg-emerald-950/30 border border-emerald-200 dark:border-emerald-800' }}">
                    Published ({{ $publishedCount }})
                </a>
                <a href="{{ route('admin.projects.index', array_merge(request()->except(['status', 'page']), ['status' => 'draft'])) }}" 
                   class="px-4 py-2 rounded-full text-xs font-mono transition-all {{ request('status') === 'draft' ? 'bg-amber-600 text-white font-semibold shadow-sm' : 'text-amber-700 dark:text-amber-400 hover:text-amber-900 dark:hover:text-white bg-amber-50 dark:bg-amber-950/30 border border-amber-200 dark:border-amber-800' }}">
                    Drafts ({{ $draftCount }})
                </a>
            </div>

            <a href="{{ route('admin.projects.create') }}" class="btn-pill-primary px-5 py-2.5 text-xs uppercase tracking-wider shadow-sm flex items-center justify-center gap-2 shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Add Project</span>
            </a>
        </div>

        <!-- Search & Filter Bar -->
        <div class="p-4 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 shadow-sm flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
            <form action="{{ route('admin.projects.index') }}" method="GET" class="flex flex-wrap items-center gap-3 flex-1">
                @if(request('status'))
                    <input type="hidden" name="status" value="{{ request('status') }}">
                @endif
                <div class="relative flex-1 min-w-[200px] max-w-md">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by title, category, summary..." class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl pl-9 pr-4 py-2 text-xs text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white">
                    <svg class="w-3.5 h-3.5 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>

                <select name="category" onchange="this.form.submit()" class="bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-3 py-2 text-xs text-slate-700 dark:text-slate-300 focus:outline-none focus:border-slate-900 dark:focus:border-white">
                    <option value="">All Categories</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>

                <button type="submit" class="px-4 py-2 rounded-xl bg-slate-900 text-white dark:bg-white dark:text-slate-950 text-xs font-mono transition-colors shadow-2xs font-semibold">
                    Filter
                </button>

                @if(request('search') || request('category') || request('status'))
                    <a href="{{ route('admin.projects.index') }}" class="text-xs text-slate-500 hover:text-slate-900 dark:hover:text-white font-mono transition-colors">
                        Reset Filters
                    </a>
                @endif
            </form>
        </div>

        <!-- Table Card with Responsive Overflow Wrapper -->
        <div class="rounded-3xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="border-b border-slate-100 dark:border-slate-800 bg-slate-50/80 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 font-mono uppercase text-[11px]">
                            <th class="py-4 px-5">Preview</th>
                            <th class="py-4 px-5">Project Information</th>
                            <th class="py-4 px-5">Category &amp; Meta</th>
                            <th class="py-4 px-5">Visibility</th>
                            <th class="py-4 px-5">Showcase</th>
                            <th class="py-4 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        @forelse($projects as $p)
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-slate-800/40 transition-colors">
                                <!-- Preview -->
                                <td class="py-4 px-5 w-24">
                                    @if($p->thumbnail)
                                        <img src="{{ $p->thumbnail_url }}" alt="{{ $p->title }}" class="w-16 h-12 object-cover rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-100 dark:bg-slate-800">
                                    @else
                                        <div class="w-16 h-12 rounded-xl bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center font-mono text-[9px] text-slate-400">NO IMG</div>
                                    @endif
                                </td>

                                <!-- Title & Summary -->
                                <td class="py-4 px-5 max-w-xs">
                                    <span class="font-semibold text-slate-900 dark:text-white text-sm block mb-1">{{ $p->title }}</span>
                                    <span class="text-slate-500 dark:text-slate-400 text-xs line-clamp-1 mb-1.5">{{ $p->summary }}</span>
                                    <div class="flex items-center gap-3">
                                        @if($p->demo_url)
                                            <a href="{{ $p->demo_url }}" target="_blank" rel="noopener noreferrer" class="text-[10px] font-mono text-slate-700 dark:text-slate-300 hover:underline">Preview Link &nearr;</a>
                                        @endif
                                        @if($p->github_url)
                                            <a href="{{ $p->github_url }}" target="_blank" rel="noopener noreferrer" class="text-[10px] font-mono text-slate-500 hover:underline">GitHub &nearr;</a>
                                        @endif
                                        <span class="text-[10px] font-mono text-slate-400">Order: #{{ $p->display_order }}</span>
                                    </div>
                                </td>

                                <!-- Category & Meta -->
                                <td class="py-4 px-5 whitespace-nowrap">
                                    <span class="px-2.5 py-1 rounded-full bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 font-mono text-[10px] text-slate-700 dark:text-slate-300">{{ $p->category }}</span>
                                    <div class="text-[11px] font-mono text-slate-500 dark:text-slate-400 mt-1.5">
                                        {{ $p->year ?? '2026' }} // {{ $p->client_name ?? 'Internal Studio' }}
                                    </div>
                                </td>

                                <!-- Visibility Status (Published vs Draft with 1-click toggle) -->
                                <td class="py-4 px-5 whitespace-nowrap">
                                    <form action="{{ route('admin.projects.toggle-status', $p) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        @if($p->status === 'published')
                                            <button type="submit" title="Click to unpublish (switch to draft)" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 dark:bg-emerald-950/40 border border-emerald-200 dark:border-emerald-800 text-emerald-700 dark:text-emerald-300 font-mono text-[10px] hover:bg-emerald-100 dark:hover:bg-emerald-900/40 transition-colors cursor-pointer">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                                <span>Published</span>
                                            </button>
                                        @else
                                            <button type="submit" title="Click to publish to public site" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 dark:bg-amber-950/40 border border-amber-200 dark:border-amber-800 text-amber-700 dark:text-amber-300 font-mono text-[10px] hover:bg-amber-100 dark:hover:bg-amber-900/40 transition-colors cursor-pointer">
                                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                                <span>Draft (Hidden)</span>
                                            </button>
                                        @endif
                                    </form>
                                </td>

                                <!-- Featured Status (Toggle) -->
                                <td class="py-4 px-5 whitespace-nowrap">
                                    <form action="{{ route('admin.projects.toggle-featured', $p) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        @if($p->is_featured)
                                            <button type="submit" title="Click to remove from featured showcase" class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-sky-50 dark:bg-sky-950/40 border border-sky-200 dark:border-sky-800 text-sky-700 dark:text-sky-300 font-mono text-[10px] hover:bg-sky-100 dark:hover:bg-sky-900/40 transition-colors cursor-pointer">
                                                <span>★</span>
                                                <span>Featured</span>
                                            </button>
                                        @else
                                            <button type="submit" title="Click to highlight in featured showcase" class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-500 font-mono text-[10px] hover:text-slate-900 dark:hover:text-white hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors cursor-pointer">
                                                <span>☆</span>
                                                <span>Standard</span>
                                            </button>
                                        @endif
                                    </form>
                                </td>

                                <!-- Actions -->
                                <td class="py-4 px-5 text-right space-x-2 whitespace-nowrap">
                                    <a href="{{ route('admin.projects.edit', $p) }}" class="inline-block px-3 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 font-medium text-xs transition-colors font-mono shadow-2xs">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.projects.destroy', $p) }}" method="POST" class="inline" data-title="{{ $p->title }}" onsubmit="return confirm('Confirm permanent deletion of: ' + this.getAttribute('data-title') + '?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 rounded-full bg-rose-50 dark:bg-rose-950/40 hover:bg-rose-100 dark:hover:bg-rose-900/40 text-rose-600 dark:text-rose-400 font-medium text-xs transition-colors font-mono cursor-pointer shadow-2xs">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="py-12 text-center text-slate-400 font-mono text-xs">
                                    No projects matching current filter parameters.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($projects->hasPages())
                <div class="p-4 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                    {{ $projects->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
