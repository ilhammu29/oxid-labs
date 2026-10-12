@extends('layouts.admin')

@section('title', 'System Dashboard // OXID ADMIN')
@section('header_title', 'SYSTEM OVERVIEW')

@section('content')
    <div class="space-y-8">
        <!-- Top Stats Row -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Stat 1: Total Projects -->
            <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 shadow-sm relative overflow-hidden transition-all duration-200 hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[11px] font-mono uppercase tracking-wider text-slate-500 dark:text-slate-400">Total Catalog</span>
                    <span class="w-2 h-2 rounded-full bg-slate-900 dark:bg-white"></span>
                </div>
                <div class="flex items-baseline justify-between">
                    <span class="text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight">{{ $totalProjects }}</span>
                    <span class="text-xs font-mono text-slate-500 dark:text-slate-400">Registered</span>
                </div>
                <div class="mt-3 pt-3 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between text-[11px] font-mono text-slate-500 dark:text-slate-400">
                    <span>Published: <strong class="text-emerald-600 dark:text-emerald-400">{{ $publishedProjects }}</strong></span>
                    <span>Drafts: <strong class="text-amber-600 dark:text-amber-400">{{ $draftProjects }}</strong></span>
                </div>
            </div>

            <!-- Stat 2: Published Systems -->
            <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 shadow-sm relative overflow-hidden transition-all duration-200 hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[11px] font-mono uppercase tracking-wider text-slate-500 dark:text-slate-400">Published Status</span>
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                </div>
                <div class="flex items-baseline justify-between">
                    <span class="text-3xl font-extrabold text-emerald-600 dark:text-emerald-400 tracking-tight">{{ $publishedProjects }}</span>
                    <span class="text-xs font-mono text-emerald-600 dark:text-emerald-400">Public Live</span>
                </div>
                <div class="mt-3 pt-3 border-t border-slate-100 dark:border-slate-800 text-[11px] font-mono text-slate-500 dark:text-slate-400">
                    Visible on showcase &amp; products
                </div>
            </div>

            <!-- Stat 3: Featured Showcases -->
            <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 shadow-sm relative overflow-hidden transition-all duration-200 hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[11px] font-mono uppercase tracking-wider text-slate-500 dark:text-slate-400">Featured Showcase</span>
                    <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                </div>
                <div class="flex items-baseline justify-between">
                    <span class="text-3xl font-extrabold text-amber-600 dark:text-amber-400 tracking-tight">{{ $featuredProjects }}</span>
                    <span class="text-xs font-mono text-amber-600 dark:text-amber-400">★ Highlighted</span>
                </div>
                <div class="mt-3 pt-3 border-t border-slate-100 dark:border-slate-800 text-[11px] font-mono text-slate-500 dark:text-slate-400">
                    Elevated in hero carousel
                </div>
            </div>

            <!-- Stat 4: Client Inquiries -->
            <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 shadow-sm relative overflow-hidden transition-all duration-200 hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[11px] font-mono uppercase tracking-wider text-slate-500 dark:text-slate-400">Inquiry Transmissions</span>
                    <span class="w-2 h-2 rounded-full {{ $unreadInquiries > 0 ? 'bg-rose-500 animate-pulse' : 'bg-slate-300 dark:bg-slate-600' }}"></span>
                </div>
                <div class="flex items-baseline justify-between">
                    <span class="text-3xl font-extrabold tracking-tight {{ $unreadInquiries > 0 ? 'text-rose-600 dark:text-rose-400' : 'text-slate-900 dark:text-white' }}">{{ $unreadInquiries }}</span>
                    <span class="text-xs font-mono {{ $unreadInquiries > 0 ? 'text-rose-600 dark:text-rose-400 font-semibold' : 'text-slate-500 dark:text-slate-400' }}">
                        {{ $unreadInquiries > 0 ? 'Unread Action' : 'All Clear' }}
                    </span>
                </div>
                <div class="mt-3 pt-3 border-t border-slate-100 dark:border-slate-800 text-[11px] font-mono text-slate-500 dark:text-slate-400">
                    {{ $totalInquiries }} total client transmissions
                </div>
            </div>
        </div>

        <!-- Quick Actions & Studio Management Banner -->
        <div class="p-6 sm:p-8 rounded-3xl bg-[#0B0F19] text-white dark:bg-slate-900 border border-slate-800 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="px-2.5 py-0.5 rounded-full bg-white/10 text-white/90 font-mono text-[10px] uppercase tracking-wider">
                        Quick Operations
                    </span>
                </div>
                <h2 class="text-lg font-bold text-white uppercase tracking-tight">Studio Content &amp; Architecture Control</h2>
                <p class="text-xs text-slate-300 mt-1 max-w-xl leading-relaxed">
                    Publish software engineering portfolio cases, stage draft products, review client collaboration inquiries, and maintain catalog visibility.
                </p>
            </div>
            <div class="flex flex-wrap items-center gap-3 shrink-0">
                <a href="{{ route('admin.projects.create') }}" class="px-5 py-2.5 rounded-full bg-white text-slate-950 font-semibold text-xs uppercase tracking-wider hover:bg-slate-100 transition-all flex items-center gap-2 shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>Add Project</span>
                </a>
                <a href="{{ route('admin.inquiries.index') }}" class="px-4 py-2.5 rounded-full border border-white/20 bg-white/10 hover:bg-white/15 text-white text-xs font-mono transition-colors flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>Inbox ({{ $unreadInquiries }})</span>
                </a>
            </div>
        </div>

        <!-- Two Column Recents Table -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Recent Projects -->
            <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 shadow-sm space-y-4">
                <div class="flex items-center justify-between border-b border-slate-100 dark:border-slate-800 pb-4">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-slate-700 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Latest Projects</h3>
                    </div>
                    <a href="{{ route('admin.projects.index') }}" class="text-xs font-mono text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">View All &rarr;</a>
                </div>

                <div class="space-y-3">
                    @forelse($recentProjects as $p)
                        <div class="flex items-center justify-between p-3.5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200/60 dark:border-slate-700/60 hover:border-slate-300 dark:hover:border-slate-600 transition-colors">
                            <div class="flex items-center gap-3.5 min-w-0">
                                @if($p->thumbnail)
                                    <img src="{{ $p->thumbnail_url }}" alt="{{ $p->title }}" class="w-11 h-11 rounded-xl object-cover bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 shrink-0 shadow-2xs">
                                @else
                                    <div class="w-11 h-11 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center text-[10px] font-mono text-slate-400 shrink-0">OX</div>
                                @endif
                                <div class="min-w-0">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('admin.projects.edit', $p) }}" class="text-xs font-semibold text-slate-900 dark:text-white hover:text-slate-600 dark:hover:text-slate-300 truncate block transition-colors">
                                             {{ $p->title }}
                                        </a>
                                        @if($p->status === 'published')
                                            <span class="px-2 py-0.5 rounded-full text-[9px] font-mono uppercase bg-emerald-50 dark:bg-emerald-950/40 text-emerald-600 dark:text-emerald-400 border border-emerald-200 dark:border-emerald-800">
                                                Live
                                            </span>
                                        @else
                                            <span class="px-2 py-0.5 rounded-full text-[9px] font-mono uppercase bg-amber-50 dark:bg-amber-950/40 text-amber-600 dark:text-amber-400 border border-amber-200 dark:border-amber-800">
                                                Draft
                                            </span>
                                        @endif
                                    </div>
                                    <span class="text-[10px] font-mono text-slate-500 dark:text-slate-400 block mt-0.5">{{ $p->category }} // {{ $p->year }}</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <a href="{{ route('admin.projects.edit', $p) }}" class="px-3 py-1.5 rounded-full bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-200 hover:text-slate-900 dark:hover:text-white text-xs font-mono transition-colors shadow-2xs">
                                    Edit
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-xs font-mono text-slate-400 py-6 text-center">No projects registered yet.</p>
                    @endforelse
                </div>
            </div>

            <!-- Recent Inquiries -->
            <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800/80 shadow-sm space-y-4">
                <div class="flex items-center justify-between border-b border-slate-100 dark:border-slate-800 pb-4">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-slate-700 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Latest Inquiries</h3>
                    </div>
                    <a href="{{ route('admin.inquiries.index') }}" class="text-xs font-mono text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">View All &rarr;</a>
                </div>

                <div class="space-y-3">
                    @forelse($recentInquiries as $inquiry)
                        <div class="p-3.5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200/60 dark:border-slate-700/60 space-y-1.5 hover:border-slate-300 dark:hover:border-slate-600 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    @if(!$inquiry->is_read)
                                        <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                                    @endif
                                    <span class="text-xs font-semibold text-slate-900 dark:text-white">{{ $inquiry->name }}</span>
                                </div>
                                <span class="text-[10px] font-mono text-slate-500 dark:text-slate-400">{{ $inquiry->created_at->diffForHumans() }}</span>
                            </div>
                            <span class="text-[11px] font-mono text-slate-600 dark:text-slate-400 block">{{ $inquiry->email }}</span>
                            <p class="text-xs text-slate-600 dark:text-slate-300 line-clamp-1 leading-relaxed">{{ $inquiry->message }}</p>
                        </div>
                    @empty
                        <p class="text-xs font-mono text-slate-400 py-6 text-center">No incoming client inquiries yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
