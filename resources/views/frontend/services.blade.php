@extends('layouts.app')

@section('title', 'Services — OXID LABS')
@section('meta_description', 'Professional engineering services by OXID Labs: Web applications, custom business software, SaaS products, workflow automation, and architecture consulting.')

@section('content')
    <div class="max-w-6xl mx-auto px-6 sm:px-8 py-16 sm:py-20">
        
        <!-- Page Header -->
        <div class="max-w-3xl mb-16">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted mb-3">
                PROFESSIONAL SERVICES
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-sans font-bold text-night-text tracking-tight mb-4">
                Engineering & Technical Services
            </h1>
            <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                Disciplined software engineering, product architecture, and operational automation tailored for real-world business challenges.
            </p>
        </div>

        <!-- Services Deep Breakdown -->
        <div class="space-y-12">
            
            <!-- Service 1 -->
            <article class="reveal-init night-card p-8 sm:p-10 rounded-xl">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-8 border-b border-night-border/40">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-night-cyan uppercase tracking-wider">01 — Web Platforms</span>
                        <h2 class="text-xl sm:text-2xl font-sans font-bold text-night-text">Website & Web Application Development</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'Web Application Development']) }}" class="px-5 py-2 rounded-lg text-xs font-semibold btn-night-primary self-start">
                        Inquire About Web Apps &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-8 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">The Problem</span>
                        <p class="text-night-muted leading-relaxed">
                            Templated sites that suffer from slow load times, fragile mobile layouts, poor contrast accessibility, and high ongoing maintenance costs.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Who It Is For</span>
                        <p class="text-night-muted leading-relaxed">
                            Founders, technical ventures, and businesses requiring a distinctive, fast digital presence with intentional art direction.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Scope of Work</span>
                        <p class="text-night-muted leading-relaxed">
                            Tailored UI design tokens, responsive Tailwind architecture, accessible interactive moments (Three.js/WebGL), and self-hosted CMS orchestration.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Expected Deliverables</span>
                        <p class="text-night-muted leading-relaxed">
                            Production-ready source repository, 95+ performance metrics, responsive cross-device verification, and documented maintenance guide.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Service 2 -->
            <article class="reveal-init night-card p-8 sm:p-10 rounded-xl">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-8 border-b border-night-border/40">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-night-violet uppercase tracking-wider">02 — Operational Software</span>
                        <h2 class="text-xl sm:text-2xl font-sans font-bold text-night-text">Custom Software & Internal Business Systems</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'Internal Business Systems']) }}" class="px-5 py-2 rounded-lg text-xs font-semibold btn-night-primary self-start">
                        Inquire About Custom Software &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-8 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">The Problem</span>
                        <p class="text-night-muted leading-relaxed">
                            Daily operations constrained by fragmented spreadsheets, manual calculations with high error rates, and inflexible off-the-shelf software.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Who It Is For</span>
                        <p class="text-night-muted leading-relaxed">
                            SMEs, culinary & F&B enterprises (like recipe costing in PawonHPP), logistics teams, and businesses with custom operational logic.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Scope of Work</span>
                        <p class="text-night-muted leading-relaxed">
                            Relational database schema modeling, specialized calculation algorithms, role-based access permissions, and automated report exports.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Expected Deliverables</span>
                        <p class="text-night-muted leading-relaxed">
                            Secure web portal, automated `.xlsx` / PDF export engines, auditable transaction logs, and full database backup workflows.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Service 3 -->
            <article class="reveal-init night-card p-8 sm:p-10 rounded-xl">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-8 border-b border-night-border/40">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-night-cyan uppercase tracking-wider">03 — Product Engineering</span>
                        <h2 class="text-xl sm:text-2xl font-sans font-bold text-night-text">SaaS Product Development</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'SaaS Product Development']) }}" class="px-5 py-2 rounded-lg text-xs font-semibold btn-night-primary self-start">
                        Inquire About SaaS Engineering &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-8 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">The Problem</span>
                        <p class="text-night-muted leading-relaxed">
                            Promising digital product concepts that fail to launch due to architectural paralysis, lack of multi-tenancy, or billing integration complexity.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Who It Is For</span>
                        <p class="text-night-muted leading-relaxed">
                            Independent founders and startups building recurring subscription platforms, B2B software, or specialized niche tools.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Scope of Work</span>
                        <p class="text-night-muted leading-relaxed">
                            Domain modeling, multi-tenant data isolation (Row Level Security), payment gateway webhooks, subscription lifecycle management, and onboarding flows.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Expected Deliverables</span>
                        <p class="text-night-muted leading-relaxed">
                            Functional production MVP, integrated billing & checkout conduits, administrative metrics console, and comprehensive regression tests.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Service 4 -->
            <article class="reveal-init night-card p-8 sm:p-10 rounded-xl">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-8 border-b border-night-border/40">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-night-violet uppercase tracking-wider">04 — Systems Integration</span>
                        <h2 class="text-xl sm:text-2xl font-sans font-bold text-night-text">Workflow Automation & Systems Integration</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'Workflow Automation']) }}" class="px-5 py-2 rounded-lg text-xs font-semibold btn-night-primary self-start">
                        Inquire About Automation &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-8 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">The Problem</span>
                        <p class="text-night-muted leading-relaxed">
                            High overhead and human error caused by manually moving data between CRMs, billing systems, spreadsheets, and messaging platforms.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Who It Is For</span>
                        <p class="text-night-muted leading-relaxed">
                            Growing operational teams needing to scale throughput without linearly hiring more manual administrative staff.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Scope of Work</span>
                        <p class="text-night-muted leading-relaxed">
                            Asynchronous queue workers, webhook delivery pipelines with idempotency keys, document data extraction, and structured event streaming.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Expected Deliverables</span>
                        <p class="text-night-muted leading-relaxed">
                            Zero-touch automated data sync pipelines, automated retry error handling, alert notification conduits, and operational telemetry.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Service 5 -->
            <article class="reveal-init night-card p-8 sm:p-10 rounded-xl">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-8 border-b border-night-border/40">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-night-cyan uppercase tracking-wider">05 — Architectural Consulting</span>
                        <h2 class="text-xl sm:text-2xl font-sans font-bold text-night-text">Technical Consulting & System Architecture</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'System Architecture Consulting']) }}" class="px-5 py-2 rounded-lg text-xs font-semibold btn-night-primary self-start">
                        Inquire About Architecture &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-8 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">The Problem</span>
                        <p class="text-night-muted leading-relaxed">
                            Sluggish backend response times, unresolved technical debt, ambiguous database schemas, or uncertainty about which technology stack to adopt.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Who It Is For</span>
                        <p class="text-night-muted leading-relaxed">
                            Founders seeking an objective technical audit, architectural second opinion, or a concrete roadmap for modernization.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Scope of Work</span>
                        <p class="text-night-muted leading-relaxed">
                            Database query indexing analysis, concurrency audit, framework boundary reviews, security hardening check, and infrastructure cost optimization.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">Expected Deliverables</span>
                        <p class="text-night-muted leading-relaxed">
                            Written Architectural RFC document, prioritized remediation backlog, benchmark profiling metrics, and direct Q&A walkthrough.
                        </p>
                    </div>
                </div>
            </article>

        </div>

        <!-- Closing CTA -->
        <div class="mt-20 p-8 sm:p-12 night-card rounded-xl text-center space-y-4">
            <span class="text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted">
                GET IN TOUCH
            </span>
            <h2 class="text-2xl sm:text-3xl font-sans font-bold text-night-text">
                Discuss your system requirements with our team.
            </h2>
            <p class="text-xs sm:text-sm text-night-muted max-w-lg mx-auto leading-relaxed">
                We review briefs promptly and outline an honest, pragmatic path toward execution.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}" class="px-6 py-2.5 rounded-lg text-xs font-semibold btn-night-primary inline-flex items-center gap-2">
                    <span>Start a Project Conversation</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

    </div>
@endsection
