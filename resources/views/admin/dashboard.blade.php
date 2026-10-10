@extends('layouts.admin')

@section('title', 'System Dashboard // OXID ADMIN')
@section('header_title', 'SYSTEM OVERVIEW')

@section('content')
    <div class="space-y-8">
        <!-- Top Stats Row -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Stat 1: Total Projects -->
            <div class="admin-surface p-6 rounded-2xl relative overflow-hidden group hover:border-night-cyan/40 transition-colors">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[11px] font-mono uppercase tracking-wider text-slate-400">Total Catalog</span>
                    <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                </div>
                <div class="flex items-baseline justify-between">
                    <span class="text-3xl font-display font-extrabold text-white">{{ $totalProjects }}</span>
                    <span class="text-xs font-mono text-cyan-300">Registered</span>
                </div>
                <div class="mt-3 pt-3 border-t border-night-border/50 flex items-center justify-between text-[11px] font-mono text-slate-400">
                    <span>Published: <strong class="text-emerald-400">{{ $publishedProjects }}</strong></span>
                    <span>Drafts: <strong class="text-amber-400">{{ $draftProjects }}</strong></span>
                </div>
            </div>

            <!-- Stat 2: Published Systems -->
            <div class="admin-surface p-6 rounded-2xl relative overflow-hidden group hover:border-emerald-500/40 transition-colors">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[11px] font-mono uppercase tracking-wider text-slate-400">Published Status</span>
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                </div>
                <div class="flex items-baseline justify-between">
                    <span class="text-3xl font-display font-extrabold text-emerald-300">{{ $publishedProjects }}</span>
                    <span class="text-xs font-mono text-emerald-400">Public Live</span>
                </div>
                <div class="mt-3 pt-3 border-t border-night-border/50 text-[11px] font-mono text-slate-400">
                    Visible on showcase &amp; products
                </div>
            </div>

            <!-- Stat 3: Featured Showcases -->
            <div class="admin-surface p-6 rounded-2xl relative overflow-hidden group hover:border-amber-500/40 transition-colors">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[11px] font-mono uppercase tracking-wider text-slate-400">Featured Showcase</span>
                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                </div>
                <div class="flex items-baseline justify-between">
                    <span class="text-3xl font-display font-extrabold text-amber-300">{{ $featuredProjects }}</span>
                    <span class="text-xs font-mono text-amber-400">★ Highlighted</span>
                </div>
                <div class="mt-3 pt-3 border-t border-night-border/50 text-[11px] font-mono text-slate-400">
                    Elevated in hero carousel
                </div>
            </div>

            <!-- Stat 4: Client Inquiries -->
            <div class="admin-surface p-6 rounded-2xl relative overflow-hidden group hover:border-rose-500/40 transition-colors">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-[11px] font-mono uppercase tracking-wider text-slate-400">Inquiry Transmissions</span>
                    <span class="w-2 h-2 rounded-full {{ $unreadInquiries > 0 ? 'bg-rose-400 animate-pulse' : 'bg-slate-500' }}"></span>
                </div>
                <div class="flex items-baseline justify-between">
                    <span class="text-3xl font-display font-extrabold {{ $unreadInquiries > 0 ? 'text-rose-400' : 'text-white' }}">{{ $unreadInquiries }}</span>
                    <span class="text-xs font-mono {{ $unreadInquiries > 0 ? 'text-rose-400 font-semibold' : 'text-slate-400' }}">
                        {{ $unreadInquiries > 0 ? 'Unread Action' : 'All Clear' }}
                    </span>
                </div>
                <div class="mt-3 pt-3 border-t border-night-border/50 text-[11px] font-mono text-slate-400">
                    {{ $totalInquiries }} total client transmissions
                </div>
            </div>
        </div>

        <!-- Quick Actions & Studio Management Banner -->
        <div class="admin-surface p-6 sm:p-8 rounded-2xl flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 bg-gradient-to-r from-night-surface via-[#0B1425] to-night-surface border border-night-border">
            <div>
                <div class="flex items-center gap-2 mb-1">
                    <span class="px-2 py-0.5 rounded bg-cyan-500/10 border border-cyan-500/20 text-cyan-300 font-mono text-[10px] uppercase tracking-wider">
                        Quick Operations
                    </span>
                </div>
                <h2 class="text-lg font-display font-bold text-white uppercase tracking-tight">Studio Content &amp; Architecture Control</h2>
                <p class="text-xs text-slate-400 mt-1 max-w-xl leading-relaxed">
                    Publish software engineering portfolio cases, stage draft products, review client collaboration inquiries, and maintain catalog visibility.
                </p>
            </div>
            <div class="flex flex-wrap items-center gap-3 shrink-0">
                <a href="{{ route('admin.projects.create') }}" class="px-5 py-2.5 rounded-xl bg-white text-black font-semibold text-xs uppercase tracking-wider hover:bg-cyan-100 hover:shadow-[0_0_20px_rgba(0,229,255,0.3)] transition-all flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>Add Project</span>
                </a>
                <a href="{{ route('admin.inquiries.index') }}" class="px-4 py-2.5 rounded-xl border border-night-border bg-white/5 hover:bg-white/10 text-white text-xs font-mono transition-colors flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>Inbox ({{ $unreadInquiries }})</span>
                </a>
            </div>
        </div>

        <!-- Two Column Recents Table -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Recent Projects -->
            <div class="admin-surface rounded-2xl p-6 space-y-4">
                <div class="flex items-center justify-between border-b border-night-border pb-4">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        <h3 class="text-sm font-display font-bold text-white uppercase tracking-wider">Latest Projects</h3>
                    </div>
                    <a href="{{ route('admin.projects.index') }}" class="text-xs font-mono text-cyan-400 hover:text-white transition-colors">View All &rarr;</a>
                </div>

                <div class="space-y-3">
                    @forelse($recentProjects as $p)
                        <div class="flex items-center justify-between p-3 rounded-xl bg-night-base/60 border border-night-border/80 hover:border-night-cyan/30 transition-colors">
                            <div class="flex items-center gap-3.5 min-w-0">
                                @if($p->thumbnail)
                                    <img src="{{ $p->thumbnail_url }}" alt="{{ $p->title }}" class="w-11 h-11 rounded-lg object-cover bg-night-surface border border-night-border shrink-0">
                                @else
                                    <div class="w-11 h-11 rounded-lg bg-night-surface border border-night-border flex items-center justify-center text-[10px] font-mono text-slate-500 shrink-0">OX</div>
                                @endif
                                <div class="min-w-0">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('admin.projects.edit', $p) }}" class="text-xs font-semibold text-white hover:text-cyan-300 truncate block transition-colors">
                                            {{ $p->title }}
                                        </a>
                                        @if($p->status === 'published')
                                            <span class="px-1.5 py-0.5 rounded text-[9px] font-mono uppercase bg-emerald-500/10 border border-emerald-500/20 text-emerald-400">
                                                Live
                                            </span>
                                        @else
                                            <span class="px-1.5 py-0.5 rounded text-[9px] font-mono uppercase bg-amber-500/10 border border-amber-500/20 text-amber-300">
                                                Draft
                                            </span>
                                        @endif
                                    </div>
                                    <span class="text-[10px] font-mono text-slate-400 block mt-0.5">{{ $p->category }} // {{ $p->year }}</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 shrink-0">
                                <a href="{{ route('admin.projects.edit', $p) }}" class="px-2.5 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 text-slate-300 text-xs font-mono transition-colors">
                                    Edit
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-xs font-mono text-slate-500 py-6 text-center">No projects registered yet.</p>
                    @endforelse
                </div>
            </div>

            <!-- Recent Inquiries -->
            <div class="admin-surface rounded-2xl p-6 space-y-4">
                <div class="flex items-center justify-between border-b border-night-border pb-4">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <h3 class="text-sm font-display font-bold text-white uppercase tracking-wider">Latest Inquiries</h3>
                    </div>
                    <a href="{{ route('admin.inquiries.index') }}" class="text-xs font-mono text-cyan-400 hover:text-white transition-colors">View All &rarr;</a>
                </div>

                <div class="space-y-3">
                    @forelse($recentInquiries as $inquiry)
                        <div class="p-3.5 rounded-xl bg-night-base/60 border border-night-border/80 space-y-1.5 hover:border-night-cyan/30 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    @if(!$inquiry->is_read)
                                        <span class="w-2 h-2 rounded-full bg-rose-400 animate-pulse"></span>
                                    @endif
                                    <span class="text-xs font-semibold text-white">{{ $inquiry->name }}</span>
                                </div>
                                <span class="text-[10px] font-mono text-slate-400">{{ $inquiry->created_at->diffForHumans() }}</span>
                            </div>
                            <span class="text-[11px] font-mono text-cyan-400/90 block">{{ $inquiry->email }}</span>
                            <p class="text-xs text-slate-300 line-clamp-1 leading-relaxed">{{ $inquiry->message }}</p>
                        </div>
                    @empty
                        <p class="text-xs font-mono text-slate-500 py-6 text-center">No incoming client inquiries yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
