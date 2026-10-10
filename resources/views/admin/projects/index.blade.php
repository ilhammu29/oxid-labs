@extends('layouts.admin')

@section('title', 'Manage Projects Catalog // OXID ADMIN')
@section('header_title', 'PROJECTS CATALOG')

@section('content')
    <div class="space-y-6">
        <!-- Status Filter Tabs -->
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.projects.index', array_merge(request()->except(['status', 'page']))) }}" 
                   class="px-3.5 py-1.5 rounded-xl text-xs font-mono transition-all {{ !request('status') ? 'bg-white text-black font-semibold shadow-sm' : 'text-slate-400 hover:text-white bg-white/5' }}">
                    All Projects ({{ $totalCount }})
                </a>
                <a href="{{ route('admin.projects.index', array_merge(request()->except(['status', 'page']), ['status' => 'published'])) }}" 
                   class="px-3.5 py-1.5 rounded-xl text-xs font-mono transition-all {{ request('status') === 'published' ? 'bg-emerald-500 text-black font-semibold shadow-sm' : 'text-emerald-400 hover:text-white bg-emerald-500/10 border border-emerald-500/20' }}">
                    Published ({{ $publishedCount }})
                </a>
                <a href="{{ route('admin.projects.index', array_merge(request()->except(['status', 'page']), ['status' => 'draft'])) }}" 
                   class="px-3.5 py-1.5 rounded-xl text-xs font-mono transition-all {{ request('status') === 'draft' ? 'bg-amber-500 text-black font-semibold shadow-sm' : 'text-amber-300 hover:text-white bg-amber-500/10 border border-amber-500/20' }}">
                    Drafts ({{ $draftCount }})
                </a>
            </div>

            <a href="{{ route('admin.projects.create') }}" class="px-5 py-2.5 rounded-xl bg-white text-black font-semibold text-xs uppercase tracking-wider hover:bg-cyan-100 hover:shadow-[0_0_20px_rgba(0,229,255,0.3)] transition-all flex items-center justify-center gap-2 shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Add Project</span>
            </a>
        </div>

        <!-- Search & Filter Bar -->
        <div class="admin-surface p-4 rounded-2xl flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
            <form action="{{ route('admin.projects.index') }}" method="GET" class="flex flex-wrap items-center gap-3 flex-1">
                @if(request('status'))
                    <input type="hidden" name="status" value="{{ request('status') }}">
                @endif
                <div class="relative flex-1 min-w-[200px] max-w-md">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by title, category, summary..." class="w-full bg-night-base/80 border border-slate-700/60 rounded-xl pl-9 pr-4 py-2 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                    <svg class="w-3.5 h-3.5 text-slate-500 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>

                <select name="category" onchange="this.form.submit()" class="bg-night-base/80 border border-slate-700/60 rounded-xl px-3 py-2 text-xs text-slate-300 focus:outline-none focus:border-cyan-400">
                    <option value="">All Categories</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>

                <button type="submit" class="px-4 py-2 rounded-xl bg-white/10 hover:bg-white/20 text-white text-xs font-mono transition-colors">
                    Filter
                </button>

                @if(request('search') || request('category') || request('status'))
                    <a href="{{ route('admin.projects.index') }}" class="text-xs text-slate-400 hover:text-cyan-300 font-mono transition-colors">
                        Reset Filters
                    </a>
                @endif
            </form>
        </div>

        <!-- Table Card with Responsive Overflow Wrapper -->
        <div class="admin-surface rounded-2xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-xs">
                    <thead>
                        <tr class="border-b border-night-border bg-[#0B1425]/70 text-slate-400 font-mono uppercase text-[11px]">
                            <th class="py-4 px-5">Preview</th>
                            <th class="py-4 px-5">Project Information</th>
                            <th class="py-4 px-5">Category &amp; Meta</th>
                            <th class="py-4 px-5">Visibility</th>
                            <th class="py-4 px-5">Showcase</th>
                            <th class="py-4 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-night-border/70">
                        @forelse($projects as $p)
                            <tr class="hover:bg-white/[0.02] transition-colors">
                                <!-- Preview -->
                                <td class="py-4 px-5 w-24">
                                    @if($p->thumbnail)
                                        <img src="{{ $p->thumbnail_url }}" alt="{{ $p->title }}" class="w-16 h-12 object-cover rounded-lg border border-night-border bg-night-base">
                                    @else
                                        <div class="w-16 h-12 rounded-lg bg-night-base border border-night-border flex items-center justify-center font-mono text-[9px] text-slate-500">NO IMG</div>
                                    @endif
                                </td>

                                <!-- Title & Summary -->
                                <td class="py-4 px-5 max-w-xs">
                                    <span class="font-semibold text-white text-sm block mb-1">{{ $p->title }}</span>
                                    <span class="text-slate-400 text-xs line-clamp-1 mb-1.5">{{ $p->summary }}</span>
                                    <div class="flex items-center gap-3">
                                        @if($p->demo_url)
                                            <a href="{{ $p->demo_url }}" target="_blank" rel="noopener noreferrer" class="text-[10px] font-mono text-cyan-400 hover:underline">Preview Link &nearr;</a>
                                        @endif
                                        @if($p->github_url)
                                            <a href="{{ $p->github_url }}" target="_blank" rel="noopener noreferrer" class="text-[10px] font-mono text-slate-400 hover:underline">GitHub &nearr;</a>
                                        @endif
                                        <span class="text-[10px] font-mono text-slate-500">Order: #{{ $p->display_order }}</span>
                                    </div>
                                </td>

                                <!-- Category & Meta -->
                                <td class="py-4 px-5 whitespace-nowrap">
                                    <span class="px-2.5 py-1 rounded-lg bg-white/5 border border-white/10 font-mono text-[10px] text-slate-300">{{ $p->category }}</span>
                                    <div class="text-[11px] font-mono text-slate-400 mt-1.5">
                                        {{ $p->year ?? '2026' }} // {{ $p->client_name ?? 'Internal Studio' }}
                                    </div>
                                </td>

                                <!-- Visibility Status (Published vs Draft with 1-click toggle) -->
                                <td class="py-4 px-5 whitespace-nowrap">
                                    <form action="{{ route('admin.projects.toggle-status', $p) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        @if($p->status === 'published')
                                            <button type="submit" title="Click to unpublish (switch to draft)" class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-300 font-mono text-[10px] hover:bg-emerald-500/20 transition-colors cursor-pointer">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                                <span>Published</span>
                                            </button>
                                        @else
                                            <button type="submit" title="Click to publish to public site" class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-amber-500/10 border border-amber-500/20 text-amber-300 font-mono text-[10px] hover:bg-amber-500/20 transition-colors cursor-pointer">
                                                <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
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
                                            <button type="submit" title="Click to remove from featured showcase" class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg bg-cyan-500/10 border border-cyan-500/20 text-cyan-300 font-mono text-[10px] hover:bg-cyan-500/20 transition-colors cursor-pointer">
                                                <span>★</span>
                                                <span>Featured</span>
                                            </button>
                                        @else
                                            <button type="submit" title="Click to highlight in featured showcase" class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg bg-white/5 border border-white/10 text-slate-400 font-mono text-[10px] hover:text-white hover:bg-white/10 transition-colors cursor-pointer">
                                                <span>☆</span>
                                                <span>Standard</span>
                                            </button>
                                        @endif
                                    </form>
                                </td>

                                <!-- Actions -->
                                <td class="py-4 px-5 text-right space-x-2 whitespace-nowrap">
                                    <a href="{{ route('admin.projects.edit', $p) }}" class="inline-block px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 text-white font-medium text-xs transition-colors font-mono">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.projects.destroy', $p) }}" method="POST" class="inline" onsubmit="return confirm('Confirm permanent deletion of {{ $p->title }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-3 py-1.5 rounded-lg bg-rose-500/10 hover:bg-rose-500/20 text-rose-300 font-medium text-xs transition-colors font-mono cursor-pointer">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="py-12 text-center text-slate-500 font-mono text-xs">
                                    No projects matching current filter parameters.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($projects->hasPages())
                <div class="p-4 border-t border-night-border bg-[#0B1425]/40">
                    {{ $projects->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
