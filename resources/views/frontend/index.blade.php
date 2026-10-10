@extends('layouts.app')

@section('title', 'OXID LABS — Independent Digital Product Studio')
@section('meta_description', 'OXID Labs is an independent digital product studio building software, SaaS products, and intelligent digital workflows.')

@section('content')
    <!-- ========================================================================= -->
    <!-- HERO SECTION: THREE.JS SPATIAL NETWORK + SEAMLESS DEEP-BLUE TRANSITION     -->
    <!-- ========================================================================= -->
    <section class="relative w-full min-h-[88vh] sm:min-h-[92vh] flex flex-col items-center justify-center overflow-hidden bg-night-base">

        <!-- Three.js Systems Visualizer Canvas (Transparent background, pass-through pointers) -->
        <div id="three-hero-container" class="absolute inset-0 z-0 pointer-events-none"></div>

        <!-- Seamless Hero-to-Content Transition Gradients (Phase 2) -->
        <div class="absolute inset-x-0 bottom-0 h-44 sm:h-64 pointer-events-none z-10 bg-gradient-to-b from-transparent via-night-midnight/70 to-night-midnight"></div>
        <div class="absolute inset-0 pointer-events-none z-0 bg-[radial-gradient(ellipse_at_50%_65%,rgba(35,76,135,0.14),transparent_60%)]"></div>

        <!-- Hero Content (Centered, Ample Negative Space, Editorial Proportions) -->
        <div class="relative z-20 max-w-4xl mx-auto text-center px-6 py-20 sm:py-28">
            <!-- Subtle atmospheric backdrop glow for crisp text legibility -->
            <div class="absolute inset-0 -z-10 pointer-events-none rounded-3xl bg-[radial-gradient(ellipse_at_center,var(--color-hero-glow)_0%,var(--color-hero-glow-outer)_55%,transparent_80%)]"></div>
            
            <!-- Brand Eyebrow -->
            <div class="inline-block mb-6">
                <span class="text-xs font-mono tracking-[0.24em] uppercase text-night-muted font-medium">
                    Independent Digital Product Studio
                </span>
            </div>

            <!-- Primary Headline -->
            <h1 class="fluid-hero-headline font-sans font-bold text-night-text max-w-3xl mx-auto mb-6">
                We build digital systems that move ideas forward.
            </h1>

            <!-- Supporting Copy -->
            <p class="max-w-2xl mx-auto text-sm sm:text-base md:text-lg text-night-muted leading-relaxed mb-10 font-normal">
                Software, SaaS products, and intelligent workflows engineered for real-world businesses.
            </p>

            <!-- Primary CTAs -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('products') }}" class="w-full sm:w-auto px-7 py-3 rounded-lg text-xs sm:text-sm font-semibold btn-night-primary">
                    Explore Products
                </a>
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-7 py-3 rounded-lg text-xs sm:text-sm font-medium btn-night-secondary">
                    Start a Project
                </a>
            </div>
        </div>

    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 2: WHAT WE BUILD (THREE CLEAR PRODUCT & ENGINEERING AREAS)        -->
    <!-- ========================================================================= -->
    <section class="relative py-20 sm:py-24 px-6 sm:px-8 bg-night-midnight">
        <div class="max-w-6xl mx-auto">
            
            <!-- Section Header -->
            <div class="reveal-init flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
                <div>
                    <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted mb-3">
                        WHAT WE BUILD
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-sans font-bold text-night-text tracking-tight">
                        Engineered for utility, longevity, and scale.
                    </h2>
                </div>
                <div class="max-w-md">
                    <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-3">
                        We design and develop complete software architectures that transform complex operational friction into reliable, automated digital systems.
                    </p>
                    <a href="{{ route('services') }}" class="inline-flex items-center gap-1.5 text-xs font-mono text-night-cyan-muted hover:text-white transition-colors">
                        <span>View all service offerings</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Three Capability Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Discipline 1: Digital Products & SaaS -->
                <article class="reveal-init delay-100 night-card p-6 sm:p-7 rounded-xl flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/[0.04] border border-night-border flex items-center justify-center text-night-text mb-6">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <h3 class="text-lg font-sans font-semibold text-night-text mb-3">
                            Digital Products & SaaS
                        </h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-6">
                            End-to-end engineering of multi-tenant SaaS products, specialized pricing engines, and subscription tools built for dependable uptime and clean operational workflows.
                        </p>
                    </div>
                    <ul class="space-y-2 pt-4 border-t border-night-border text-xs font-mono text-night-dim">
                        <li class="flex items-center gap-2">
                            <span class="text-night-muted">&mdash;</span> Multi-Tenant Data Isolation
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-night-muted">&mdash;</span> Subscription & Billing Lifecycles
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-night-muted">&mdash;</span> Responsive Ergonomic UI
                        </li>
                    </ul>
                </article>

                <!-- Discipline 2: Software Engineering -->
                <article class="reveal-init delay-200 night-card p-6 sm:p-7 rounded-xl flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/[0.04] border border-night-border flex items-center justify-center text-night-text mb-6">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                        <h3 class="text-lg font-sans font-semibold text-night-text mb-3">
                            Software Engineering
                        </h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-6">
                            High-throughput backend engines, low-latency API gateways, and distributed cache clusters built on robust stacks (Laravel, Go, PostgreSQL, Redis) with microsecond query discipline.
                        </p>
                    </div>
                    <ul class="space-y-2 pt-4 border-t border-night-border text-xs font-mono text-night-dim">
                        <li class="flex items-center gap-2">
                            <span class="text-night-muted">&mdash;</span> Resilient API Architecture
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-night-muted">&mdash;</span> Database Index Optimization
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-night-muted">&mdash;</span> Asynchronous Task Processing
                        </li>
                    </ul>
                </article>

                <!-- Discipline 3: Intelligent Workflows & Automation -->
                <article class="reveal-init delay-300 night-card p-6 sm:p-7 rounded-xl flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-white/[0.04] border border-night-border flex items-center justify-center text-night-text mb-6">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="text-lg font-sans font-semibold text-night-text mb-3">
                            Intelligent Workflows & Automation
                        </h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-6">
                            Connecting fragmented systems with resilient ETL pipelines, automated document extraction, and background worker queues that eliminate manual administrative load.
                        </p>
                    </div>
                    <ul class="space-y-2 pt-4 border-t border-night-border text-xs font-mono text-night-dim">
                        <li class="flex items-center gap-2">
                            <span class="text-night-muted">&mdash;</span> Reliable Webhook Pipelines
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-night-muted">&mdash;</span> Structured Data Extraction
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-night-muted">&mdash;</span> Auditable Error Handling
                        </li>
                    </ul>
                </article>

            </div>
        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 3: FEATURED VERIFIED PRODUCTS (PAWONHPP & STUDIO SOFTWARE)        -->
    <!-- ========================================================================= -->
    <section class="relative py-20 sm:py-24 px-6 sm:px-8 bg-night-base border-t border-night-border/40">
        <div class="max-w-6xl mx-auto">
            
            <!-- Section Header -->
            <div class="reveal-init flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div>
                    <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted mb-3">
                        FEATURED PRODUCTS & PROJECT CATALOG
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-sans font-bold text-night-text tracking-tight">
                        Verified Software & Project Catalog
                    </h2>
                </div>
                <div class="max-w-md">
                    <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-3">
                        Inspected systems, active venture software, and laboratory tools built and maintained by OXID Labs.
                    </p>
                    <a href="{{ route('products') }}" class="inline-flex items-center gap-1.5 text-xs font-mono text-night-cyan-muted hover:text-white transition-colors">
                        <span>Browse complete catalog ({{ $projects->count() }})</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Featured Product Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($featuredProjects as $index => $project)
                    <article class="reveal-init delay-{{ ($index % 3 + 1) * 100 }} night-card rounded-xl overflow-hidden flex flex-col justify-between group transition-all duration-300">
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

                                <h3 class="text-base sm:text-lg font-sans font-semibold text-night-text group-hover:text-white transition-colors tracking-tight mb-2">
                                    {{ $project->title }}
                                </h3>

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
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 4: CAPABILITIES TEASER & METHODOLOGY                              -->
    <!-- ========================================================================= -->
    <section class="relative py-20 sm:py-24 px-6 sm:px-8 bg-night-midnight border-t border-night-border/40">
        <div class="max-w-6xl mx-auto">
            
            <div class="reveal-init flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
                <div>
                    <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted mb-3">
                        HOW WE OPERATE
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-sans font-bold text-night-text tracking-tight">
                        Discipline at every layer of the stack.
                    </h2>
                </div>
                <div class="max-w-md">
                    <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-3">
                        From initial domain constraints to automated regression testing, we build with long-term maintainability as a non-negotiable standard.
                    </p>
                    <a href="{{ route('capabilities') }}" class="inline-flex items-center gap-1.5 text-xs font-mono text-night-cyan-muted hover:text-white transition-colors">
                        <span>Read full engineering capabilities</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="reveal-init delay-100 night-card p-6 rounded-xl">
                    <span class="block text-xs font-mono text-night-cyan mb-3">01 — Domain Modeling</span>
                    <h3 class="text-sm font-sans font-semibold text-night-text mb-2">Discovery & Modeling</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Pinning down precise business rules and data models before writing code, preventing costly refactoring down the line.
                    </p>
                </div>

                <div class="reveal-init delay-150 night-card p-6 rounded-xl">
                    <span class="block text-xs font-mono text-night-violet mb-3">02 — Engineering</span>
                    <h3 class="text-sm font-sans font-semibold text-night-text mb-2">Concurrency & Tuning</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Worker queues, Redis memory caching, index optimization, and asynchronous tasks tuned for microsecond response times.
                    </p>
                </div>

                <div class="reveal-init delay-200 night-card p-6 rounded-xl">
                    <span class="block text-xs font-mono text-night-cyan mb-3">03 — Interface Design</span>
                    <h3 class="text-sm font-sans font-semibold text-night-text mb-2">Accessible Interfaces</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Tested from 375px mobile screens to wide monitors, adhering strictly to high contrast standards and fast rendering.
                    </p>
                </div>

                <div class="reveal-init delay-250 night-card p-6 rounded-xl">
                    <span class="block text-xs font-mono text-night-violet mb-3">04 — Reliability</span>
                    <h3 class="text-sm font-sans font-semibold text-night-text mb-2">Automated Verification</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Automated test suites guaranteeing that critical business logic never regresses during regular releases.
                    </p>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 5: STUDIO PHILOSOPHY TEASER                                      -->
    <!-- ========================================================================= -->
    <section class="relative py-20 sm:py-24 px-6 sm:px-8 bg-night-base border-t border-night-border/40">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="reveal-init lg:col-span-6 space-y-4">
                    <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted">
                        STUDIO MANIFESTO
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-sans font-bold text-night-text tracking-tight leading-snug">
                        Substance over superficial complexity.
                    </h2>
                    <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                        Named after oxidation—the process that transforms raw materials into protective, resilient structures—OXID Labs builds digital systems engineered to withstand real-world operational volatility.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('studio') }}" class="inline-flex items-center gap-1.5 text-xs font-mono text-night-cyan-muted hover:text-white transition-colors">
                            <span>Learn more about our studio principles</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-6 space-y-4">
                    <div class="reveal-init delay-150 night-card p-6 rounded-xl">
                        <h3 class="text-sm font-sans font-semibold text-night-text mb-2 flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-night-cyan"></span>
                            <span>Build Useful Systems First</span>
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            We reject ornamental complexity that serves vanity rather than users. Every database column and interface element must solve a verified operational objective.
                        </p>
                    </div>

                    <div class="reveal-init delay-250 night-card p-6 rounded-xl">
                        <h3 class="text-sm font-sans font-semibold text-night-text mb-2 flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-night-violet"></span>
                            <span>Engineering Durability</span>
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Modern digital systems must be durable. We choose battle-tested foundational stacks with strong ecosystems over ephemeral tech hype cycles.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 6: CLOSING PROJECT INVITATION CTA                                  -->
    <!-- ========================================================================= -->
    <section class="relative py-18 sm:py-20 px-6 sm:px-8 bg-night-midnight border-t border-night-border/40">
        <div class="reveal-init max-w-4xl mx-auto text-center space-y-6">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted">
                START A PROJECT
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-sans font-bold text-night-text tracking-tight">
                Ready to engineer resilient digital systems?
            </h2>
            <p class="text-xs sm:text-sm text-night-muted max-w-xl mx-auto leading-relaxed">
                Whether launching a new SaaS product, upgrading an operational backend, or building automated workflows, discuss your scope directly with our team.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}" class="px-7 py-3 rounded-lg text-xs sm:text-sm font-semibold btn-night-primary inline-flex items-center gap-2">
                    <span>Start a Conversation</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script src="{{ asset('js/hero-3d.js') }}"></script>
@endpush
