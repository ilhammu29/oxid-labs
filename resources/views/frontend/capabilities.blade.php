@extends('layouts.app')

@section('title', 'Capabilities — OXID LABS')
@section('meta_description', 'Explore the engineering approach and technical methodology of OXID Labs: Product discovery, interface architecture, backend concurrency, and automated testing.')

@section('content')
    <div class="max-w-6xl mx-auto px-6 sm:px-8 py-16 sm:py-20">
        
        <!-- Page Header -->
        <div class="reveal-init max-w-3xl mb-16">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted mb-3">
                ENGINEERING METHODOLOGY
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-sans font-bold text-night-text tracking-tight mb-4">
                How We Architect & Build Software
            </h1>
            <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                A disciplined engineering approach focused on structural durability, domain precision, accessible ergonomics, and automated verification.
            </p>
        </div>

        <!-- Architectural Pipeline Flow Visualization -->
        <div class="reveal-init delay-100 mb-20">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-dim mb-6">
                SYSTEM DELIVERY PIPELINE
            </span>
            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="reveal-init delay-100 night-card p-5 rounded-xl border-l-2 border-l-night-cyan">
                    <span class="text-[10px] font-mono text-night-cyan uppercase">PHASE 01</span>
                    <h3 class="text-sm font-sans font-semibold text-night-text mt-1 mb-1.5">Discovery & Schema</h3>
                    <p class="text-[11px] text-night-muted leading-relaxed">
                        Data models, relational entities, business invariants, and state machines defined prior to writing code.
                    </p>
                </div>

                <div class="reveal-init delay-150 night-card p-5 rounded-xl border-l-2 border-l-night-violet">
                    <span class="text-[10px] font-mono text-night-violet uppercase">PHASE 02</span>
                    <h3 class="text-sm font-sans font-semibold text-night-text mt-1 mb-1.5">Interface Design</h3>
                    <p class="text-[11px] text-night-muted leading-relaxed">
                        Ergonomic design tokens, accessible contrast, tactile feedback, and fluid responsive layouts.
                    </p>
                </div>

                <div class="reveal-init delay-200 night-card p-5 rounded-xl border-l-2 border-l-night-cyan">
                    <span class="text-[10px] font-mono text-night-cyan uppercase">PHASE 03</span>
                    <h3 class="text-sm font-sans font-semibold text-night-text mt-1 mb-1.5">Backend Core</h3>
                    <p class="text-[11px] text-night-muted leading-relaxed">
                        Clean controllers, queued jobs, Redis memory caching, and microsecond query optimization.
                    </p>
                </div>

                <div class="night-card p-5 rounded-xl border-l-2 border-l-night-violet">
                    <span class="text-[10px] font-mono text-night-violet uppercase">PHASE 04</span>
                    <h3 class="text-sm font-sans font-semibold text-night-text mt-1 mb-1.5">Integrations</h3>
                    <p class="text-[11px] text-night-muted leading-relaxed">
                        Idempotent webhook delivery, third-party APIs, and automated background data synchronization.
                    </p>
                </div>

                <div class="night-card p-5 rounded-xl border-l-2 border-l-night-text">
                    <span class="text-[10px] font-mono text-night-text uppercase">PHASE 05</span>
                    <h3 class="text-sm font-sans font-semibold text-night-text mt-1 mb-1.5">Verification</h3>
                    <p class="text-[11px] text-night-muted leading-relaxed">
                        Unit, feature, and end-to-end regression test suites guaranteeing zero broken flows in production.
                    </p>
                </div>
            </div>
        </div>

        <!-- Six Foundational Engineering Pillars -->
        <div class="space-y-6">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-dim mb-4">
                FOUNDATIONAL DISCIPLINES
            </span>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Pillar 1 -->
                <article class="night-card p-7 rounded-xl space-y-3">
                    <span class="text-xs font-mono text-night-cyan">01 — Domain Modeling</span>
                    <h2 class="text-base font-sans font-semibold text-night-text">Product Discovery & Requirements</h2>
                    <p class="text-xs text-night-muted leading-relaxed">
                        We avoid premature coding by first mapping out the ubiquitous domain language, business rules, edge cases, and transactional boundaries. This eliminates expensive mid-project rewrites.
                    </p>
                    <div class="pt-3 border-t border-night-border/40 text-[11px] font-mono text-night-dim">
                        Deliverables: Entity-relationship diagrams, state transition charts, and validated PRDs.
                    </div>
                </article>

                <!-- Pillar 2 -->
                <article class="night-card p-7 rounded-xl space-y-3">
                    <span class="text-xs font-mono text-night-violet">02 — Human Ergonomics</span>
                    <h2 class="text-base font-sans font-semibold text-night-text">UX/UI & Interface Engineering</h2>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Every interface is engineered for real human use: sub-100ms response feel, accessible WCAG contrast standards, visible keyboard navigation focus, and responsive fluidity down to small mobile viewports.
                    </p>
                    <div class="pt-3 border-t border-night-border/40 text-[11px] font-mono text-night-dim">
                        Deliverables: Centralized design tokens, accessible components, and cross-browser testing.
                    </div>
                </article>

                <!-- Pillar 3 -->
                <article class="night-card p-7 rounded-xl space-y-3">
                    <span class="text-xs font-mono text-night-cyan">03 — Full-Stack Runtime</span>
                    <h2 class="text-base font-sans font-semibold text-night-text">Full-Stack Application Development</h2>
                    <p class="text-xs text-night-muted leading-relaxed">
                        We develop with modern, battle-tested tools—Laravel 11, clean JavaScript, Tailwind CSS, Vue/React when appropriate—prioritizing developer ergonomics, fast execution, and zero unnecessary runtime dependencies.
                    </p>
                    <div class="pt-3 border-t border-night-border/40 text-[11px] font-mono text-night-dim">
                        Deliverables: Modular architecture, maintainable controllers, and clean service layers.
                    </div>
                </article>

                <!-- Pillar 4 -->
                <article class="night-card p-7 rounded-xl space-y-3">
                    <span class="text-xs font-mono text-night-violet">04 — Data Resilience</span>
                    <h2 class="text-base font-sans font-semibold text-night-text">Database & Backend Architecture</h2>
                    <p class="text-xs text-night-muted leading-relaxed">
                        We treat relational data with strict discipline: explicit foreign keys, query indexing strategies, connection pooling, and multi-tenant isolation patterns (Row Level Security and schema segregation).
                    </p>
                    <div class="pt-3 border-t border-night-border/40 text-[11px] font-mono text-night-dim">
                        Deliverables: Optimized PostgreSQL / SQLite schemas, migrations, and automated backups.
                    </div>
                </article>

                <!-- Pillar 5 -->
                <article class="night-card p-7 rounded-xl space-y-3">
                    <span class="text-xs font-mono text-night-cyan">05 — Async Processing</span>
                    <h2 class="text-base font-sans font-semibold text-night-text">Integrations & Workflow Automation</h2>
                    <p class="text-xs text-night-muted leading-relaxed">
                        We build background task orchestration with Redis queues, handling webhook ingestion with idempotency keys and exponential backoff retry mechanisms to survive upstream network drops.
                    </p>
                    <div class="pt-3 border-t border-night-border/40 text-[11px] font-mono text-night-dim">
                        Deliverables: Asynchronous job queues, webhook listeners, and telemetry monitoring.
                    </div>
                </article>

                <!-- Pillar 6 -->
                <article class="night-card p-7 rounded-xl space-y-3">
                    <span class="text-xs font-mono text-night-violet">06 — Continuous Assurance</span>
                    <h2 class="text-base font-sans font-semibold text-night-text">Testing, Deployment & Maintenance</h2>
                    <p class="text-xs text-night-muted leading-relaxed">
                        No feature ships without automated test coverage. We write unit and feature tests validating critical authentication, payment, calculation, and access control boundaries.
                    </p>
                    <div class="pt-3 border-t border-night-border/40 text-[11px] font-mono text-night-dim">
                        Deliverables: Automated test suite, containerized staging setups, and deployment runbooks.
                    </div>
                </article>

            </div>
        </div>

        <!-- Reliability Commitments Section -->
        <div class="mt-20 p-8 sm:p-10 night-card rounded-xl">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted mb-4">
                SYSTEM VALUES
            </span>
            <h2 class="text-xl sm:text-2xl font-sans font-bold text-night-text mb-6">
                Our Standards for Durability & Ownership
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs text-night-muted leading-relaxed">
                <div class="space-y-2">
                    <h3 class="font-sans font-semibold text-night-text text-sm flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-night-cyan"></span>
                        <span>Zero Vendor Lock-In</span>
                    </h3>
                    <p>
                        Clients maintain complete ownership of their source code, database schemas, and infrastructure configs. Every system we build can be run and hosted independently.
                    </p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-sans font-semibold text-night-text text-sm flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-night-violet"></span>
                        <span>Graceful Degradation</span>
                    </h3>
                    <p>
                        When external APIs or third-party webhooks experience downtime, our systems are built with fail-safes and queued retries to prevent customer-facing application crashes.
                    </p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-sans font-semibold text-night-text text-sm flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-night-text"></span>
                        <span>Strict Security Baselines</span>
                    </h3>
                    <p>
                        From CSRF validation and parameterized SQL queries to sanitized inputs and strict permission checks, security is baked into the foundation rather than patched on later.
                    </p>
                </div>
            </div>
        </div>

        <!-- Closing CTA -->
        <div class="mt-20 text-center space-y-4">
            <h2 class="text-2xl sm:text-3xl font-sans font-bold text-night-text">
                Ready to architect your next system with confidence?
            </h2>
            <p class="text-xs sm:text-sm text-night-muted max-w-md mx-auto leading-relaxed">
                Discuss technical requirements, system architecture, or migration roadmaps with our engineers.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}" class="px-6 py-2.5 rounded-lg text-xs font-semibold btn-night-primary inline-flex items-center gap-2">
                    <span>Discuss Your Architecture</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

    </div>
@endsection
