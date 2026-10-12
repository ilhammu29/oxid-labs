@extends('layouts.app')

@section('title', 'Katalog Produk & Portofolio — OXID LABS')
@section('meta_description', 'Jelajahi portofolio website, platform SaaS, dan sistem digital yang telah dirancang dan dikembangkan oleh OXID Labs.')

@section('content')
    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-20">
        
        <!-- Page Header -->
        <div class="max-w-3xl mb-12">
            <span class="inline-block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-3">
                Software Products &bull; KATALOG PORTOFOLIO &amp; PRODUK
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-night-text tracking-tight mb-4">
                Sistem Web &amp; Produk Digital yang Terverifikasi
            </h1>
            <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                Koleksi website live, platform SaaS, dan arsitektur aplikasi yang dibangun dengan standar performa tinggi, desain modern, dan kemudahan pengembangan.
            </p>
        </div>

        <!-- Filter Tabs & Real-Time Search -->
        <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-4 mb-10 pb-6 border-b border-night-border">
            <div class="flex flex-wrap items-center gap-2" id="catalog-filter-tabs">
                <button type="button" data-filter="all" class="filter-tab-btn active px-4 py-2 rounded-full text-xs font-semibold transition-all duration-200 bg-[#111113] text-white dark:bg-white dark:text-black shadow-sm">
                    Semua Produk ({{ $projects->count() }})
                </button>
                @foreach($categories as $category)
                    <button type="button" data-filter="{{ Str::slug($category) }}" class="filter-tab-btn px-4 py-2 rounded-full text-xs font-semibold text-night-muted hover:text-night-text bg-night-surface border border-night-border hover:border-night-text transition-all duration-200">
                        {{ $category }}
                    </button>
                @endforeach
            </div>

            <div class="relative w-full lg:w-80">
                <input type="text" id="catalog-search" placeholder="Cari nama atau teknologi..." class="w-full bg-night-surface border border-night-border rounded-full px-4 py-2.5 pl-10 text-xs text-night-text placeholder-night-dim focus:outline-none focus:border-slate-800 dark:focus:border-white transition-all">
                <svg class="w-4 h-4 text-night-dim absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
            @forelse($projects as $project)
                <article class="project-card studio-card overflow-hidden flex flex-col justify-between group"
                         data-category="{{ Str::slug($project->category) }}"
                         data-title="{{ strtolower($project->title) }}"
                         data-summary="{{ strtolower($project->summary) }}"
                         data-tags="{{ strtolower(implode(' ', $project->tech_stack ?? [])) }}">

                    <div>
                        <!-- Visual Image Area -->
                        <div class="relative aspect-[16/10] overflow-hidden bg-slate-100 dark:bg-slate-800 border-b border-night-border">
                            @if($project->thumbnail)
                                <img src="{{ $project->thumbnail_url }}" alt="{{ $project->title }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-night-dim font-mono text-xs">
                                    [OXID LABS PREVIEW]
                                </div>
                            @endif
                            <div class="absolute top-3 left-3 px-2.5 py-1 rounded-md bg-white/90 dark:bg-black/80 backdrop-blur-md text-[10px] font-mono uppercase tracking-wider text-night-text font-bold border border-slate-200 dark:border-white/10">
                                {{ $project->category }}
                            </div>
                        </div>

                        <!-- Editorial Content -->
                        <div class="p-6">
                            <div class="text-[11px] font-mono text-night-dim mb-2">
                                {{ $project->year ?? '2026' }} &bull; {{ $project->client_name ?? 'Studio Venture' }}
                            </div>

                            <h2 class="text-lg font-bold text-night-text group-hover:text-slate-950 dark:group-hover:text-white transition-colors mb-2.5">
                                {{ $project->title }}
                            </h2>

                            <p class="text-xs text-night-muted line-clamp-3 leading-relaxed">
                                {{ $project->summary }}
                            </p>
                        </div>
                    </div>

                    <!-- Card Actions & Tech Stack -->
                    <div class="p-6 pt-0 space-y-4">
                        @if(!empty($project->tech_stack))
                            <div class="flex flex-wrap gap-1.5">
                                @foreach(array_slice($project->tech_stack, 0, 3) as $tag)
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-mono bg-slate-100 dark:bg-white/5 text-night-muted border border-slate-200 dark:border-white/10">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        @endif

                        <div class="pt-4 border-t border-night-border flex items-center justify-between">
                            <button type="button" onclick="openProjectModal('{{ $project->slug }}')" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-900 dark:text-white hover:underline">
                                <span>Lihat Detail Proyek</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </button>

                            <div class="flex items-center gap-2">
                                @if($project->demo_url)
                                    <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-slate-100 dark:bg-white/10 text-slate-700 dark:text-slate-300 hover:text-black dark:hover:text-white transition-colors" title="Buka Demo Live">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full py-20 text-center text-night-dim font-mono text-sm bg-night-surface rounded-2xl border border-night-border">
                    Belum ada proyek yang dipublikasikan dalam katalog.
                </div>
            @endforelse
        </div>

        <!-- No Results Fallback -->
        <div id="no-search-results" class="hidden py-20 text-center text-night-dim font-mono text-sm bg-night-surface rounded-2xl border border-night-border mt-6">
            Tidak ada produk yang cocok dengan pencarian Anda.
        </div>

    </div>

    <!-- Client-Side Filter & Search Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.filter-tab-btn');
            const searchInput = document.getElementById('catalog-search');
            const cards = document.querySelectorAll('.project-card');
            const noResults = document.getElementById('no-search-results');

            let activeFilter = 'all';
            let searchQuery = '';

            function updateVisibility() {
                let visibleCount = 0;

                cards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    const title = card.getAttribute('data-title');
                    const summary = card.getAttribute('data-summary');
                    const tags = card.getAttribute('data-tags');

                    const matchesFilter = (activeFilter === 'all') || (category === activeFilter);
                    const matchesSearch = !searchQuery || 
                                          title.includes(searchQuery) || 
                                          summary.includes(searchQuery) || 
                                          tags.includes(searchQuery);

                    if (matchesFilter && matchesSearch) {
                        card.style.display = 'flex';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (noResults) {
                    noResults.classList.toggle('hidden', visibleCount > 0);
                }
            }

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => {
                        t.classList.remove('active', 'bg-[#111113]', 'text-white', 'dark:bg-white', 'dark:text-black', 'font-semibold', 'shadow-sm');
                        t.classList.add('bg-night-surface', 'border', 'border-night-border', 'text-night-muted');
                    });
                    tab.classList.add('active', 'bg-[#111113]', 'text-white', 'dark:bg-white', 'dark:text-black', 'font-semibold', 'shadow-sm');
                    tab.classList.remove('bg-night-surface', 'text-night-muted');

                    activeFilter = tab.getAttribute('data-filter');
                    updateVisibility();
                });
            });

            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    searchQuery = e.target.value.toLowerCase().trim();
                    updateVisibility();
                });
            }
        });
    </script>
@endsection
