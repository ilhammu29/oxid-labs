@extends('layouts.app')

@section('title', 'Products — OXID LABS')
@section('meta_description', 'Explore verified software products, specialized SaaS engines, and developer infrastructure engineered by OXID Labs.')

@section('content')
    <div class="max-w-6xl mx-auto px-6 sm:px-8 py-16 sm:py-20">
        
        <!-- Page Header -->
        <div class="reveal-init max-w-3xl mb-14">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted mb-3">
                PRODUCT CATALOG
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-sans font-bold text-night-text tracking-tight mb-4">
                Software Products & Engineered Systems
            </h1>
            <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                A structured catalog of verified SaaS platforms, backend architectures, and internal laboratory tools engineered for real-world operations.
            </p>
        </div>

        <!-- Filter Tabs & Real-Time Search -->
        <div class="reveal-init delay-100 flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-4 mb-10 pb-6 border-b border-night-border/40">
            <div class="flex flex-wrap items-center gap-2" id="catalog-filter-tabs">
                <button type="button" data-filter="all" class="filter-tab-btn active px-3.5 py-1.5 rounded-lg text-xs font-mono transition-all duration-200 bg-night-text text-night-base font-semibold">
                    All Products ({{ $projects->count() }})
                </button>
                @foreach($categories as $category)
                    <button type="button" data-filter="{{ Str::slug($category) }}" class="filter-tab-btn px-3.5 py-1.5 rounded-lg text-xs font-mono text-night-muted hover:text-night-text bg-white/[0.03] hover:bg-white/[0.07] border border-night-border transition-all duration-200">
                        {{ $category }}
                    </button>
                @endforeach
            </div>

            <div class="relative w-full lg:w-72">
                <input type="text" id="catalog-search" placeholder="Search systems or stack..." class="w-full bg-night-surface border border-night-border rounded-lg px-3.5 py-2 pl-9 text-xs text-night-text placeholder-night-dim focus:outline-none focus:border-night-cyan-muted/50 transition-all font-mono">
                <svg class="w-4 h-4 text-night-dim absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="projects-grid">
            @forelse($projects as $idx => $project)
                <article class="reveal-init delay-{{ ($idx % 3 + 1) * 100 }} project-card night-card rounded-xl overflow-hidden flex flex-col justify-between group transition-all duration-300"
                         data-category="{{ Str::slug($project->category) }}"
                         data-title="{{ strtolower($project->title) }}"
                         data-summary="{{ strtolower($project->summary) }}"
                         data-tags="{{ strtolower(implode(' ', $project->tech_stack ?? [])) }}">

                    <div>
                        <!-- Clean Art-Directed Visual Area -->
                        <div class="relative aspect-[16/10] overflow-hidden bg-night-surface border-b border-night-border/40">
                            @if($project->thumbnail)
                                <img src="{{ $project->thumbnail_url }}" alt="{{ $project->title }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-night-surface text-night-dim font-mono text-xs">
                                    [PREVIEW_ACTIVE]
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-night-surface/80 via-transparent to-transparent pointer-events-none"></div>
                        </div>

                        <!-- Editorial Typographic Hierarchy -->
                        <div class="p-6">
                            <div class="flex items-center justify-between gap-2 mb-2.5">
                                <span class="text-[11px] font-mono uppercase tracking-wider text-night-cyan-muted">
                                    {{ $project->category }}
                                </span>
                                <span class="text-[11px] font-mono text-night-dim">
                                    {{ $project->year ?? '2026' }} &bull; {{ $project->client_name ?? 'Studio Lab' }}
                                </span>
                            </div>

                            <h2 class="text-base sm:text-lg font-sans font-semibold text-night-text group-hover:text-white transition-colors tracking-tight mb-2">
                                {{ $project->title }}
                            </h2>

                            <p class="text-xs text-night-muted line-clamp-2 leading-relaxed font-normal">
                                {{ $project->summary }}
                            </p>
                        </div>
                    </div>

                    <!-- Card Action & Minimal Tech Stack Footer -->
                    <div class="p-6 pt-0 space-y-4">
                        @if(!empty($project->tech_stack))
                            <div class="flex flex-wrap gap-1.5">
                                @foreach(array_slice($project->tech_stack, 0, 3) as $tag)
                                    <span class="px-2 py-0.5 rounded text-[10px] font-mono bg-white/[0.03] border border-white/[0.05] text-night-dim">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                                @if(count($project->tech_stack) > 3)
                                    <span class="px-1.5 py-0.5 rounded text-[10px] font-mono bg-white/[0.02] text-night-dim">
                                        +{{ count($project->tech_stack) - 3 }}
                                    </span>
                                @endif
                            </div>
                        @endif

                        <div class="pt-4 border-t border-night-border/40 flex items-center justify-between">
                            <button type="button" onclick="openProjectModal('{{ $project->slug }}')" class="inline-flex items-center gap-1.5 text-xs font-mono font-medium text-night-text hover:text-night-cyan transition-colors group/btn">
                                <span>Inspect Architecture</span>
                                <svg class="w-3.5 h-3.5 transition-transform group-hover/btn:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </button>

                            <div class="flex items-center gap-3">
                                @if($project->demo_url)
                                    <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer" class="text-night-dim hover:text-night-text transition-colors" title="Live Preview">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    </a>
                                @endif
                                @if($project->github_url)
                                    <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="text-night-dim hover:text-night-text transition-colors" title="Source Code">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-3 text-center py-16 night-card rounded-xl">
                    <p class="text-xs font-mono text-night-dim">NO PRODUCTS CURRENTLY LISTED IN CATALOG.</p>
                </div>
            @endforelse
        </div>

        <!-- No Results Fallback -->
        <div id="no-search-results" class="hidden text-center py-16 night-card rounded-xl mt-6">
            <p class="text-xs font-mono text-night-dim">NO SYSTEMS MATCHED THE CURRENT FILTER CRITERIA.</p>
        </div>

        <!-- Inquiry CTA Banner -->
        <div class="mt-20 p-8 sm:p-12 night-card rounded-xl text-center space-y-4 border-night-border/50">
            <span class="text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted">
                CUSTOM SYSTEM ARCHITECTURE
            </span>
            <h2 class="text-2xl sm:text-3xl font-sans font-bold text-night-text">
                Need a dedicated product or internal platform?
            </h2>
            <p class="text-xs sm:text-sm text-night-muted max-w-lg mx-auto leading-relaxed">
                We engineer tailor-made SaaS architectures, specialized pricing engines, and enterprise portals from zero to deployment.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}" class="px-6 py-2.5 rounded-lg text-xs font-semibold btn-night-primary inline-flex items-center gap-2">
                    <span>Initiate Product Brief</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
<script>
    // Catalog Filtering and Search Logic
    const filterTabs = document.querySelectorAll('.filter-tab-btn');
    const projectCards = document.querySelectorAll('.project-card');
    const searchInput = document.getElementById('catalog-search');
    const noResults = document.getElementById('no-search-results');

    let currentFilter = 'all';
    let currentSearch = '';

    function applyFilters() {
        let visibleCount = 0;
        projectCards.forEach(card => {
            const category = card.getAttribute('data-category');
            const title = card.getAttribute('data-title');
            const summary = card.getAttribute('data-summary');
            const tags = card.getAttribute('data-tags');

            const matchesCategory = (currentFilter === 'all') || (category === currentFilter);
            const matchesSearch = !currentSearch || 
                title.includes(currentSearch) || 
                summary.includes(currentSearch) || 
                tags.includes(currentSearch);

            if (matchesCategory && matchesSearch) {
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

    filterTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            filterTabs.forEach(t => {
                t.classList.remove('active', 'bg-night-text', 'text-night-base', 'font-semibold');
                t.classList.add('text-night-muted', 'bg-white/[0.03]');
            });
            tab.classList.add('active', 'bg-night-text', 'text-night-base', 'font-semibold');
            tab.classList.remove('text-night-muted', 'bg-white/[0.03]');

            currentFilter = tab.getAttribute('data-filter');
            applyFilters();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            currentSearch = e.target.value.toLowerCase().trim();
            applyFilters();
        });
    }
</script>
@endpush
