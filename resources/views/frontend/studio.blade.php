@extends('layouts.app')

@section('title', 'Studio — OXID LABS')
@section('meta_description', 'Learn about OXID Labs: an independent technology studio dedicated to building durable software, SaaS products, and intelligent digital workflows.')

@section('content')
    <div class="max-w-5xl mx-auto px-6 sm:px-8 py-16 sm:py-20">
        
        <!-- Page Header -->
        <div class="max-w-3xl mb-16">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted mb-3">
                STUDIO IDENTITY & PRINCIPLES
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-sans font-bold text-night-text tracking-tight mb-4">
                Substance Over Superficial Complexity
            </h1>
            <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                OXID Labs is an independent digital product studio focused on building software, SaaS products, business tools, and intelligent digital workflows.
            </p>
        </div>

        <!-- Editorial Story Section -->
        <div class="space-y-16">
            
            <!-- Origin of the Name -->
            <section class="night-card p-8 sm:p-10 rounded-xl space-y-4">
                <span class="text-xs font-mono text-night-cyan uppercase tracking-wider">WHY OXID</span>
                <h2 class="text-xl sm:text-2xl font-sans font-bold text-night-text">The Principle of Resilient Passivation</h2>
                <div class="space-y-4 text-xs sm:text-sm text-night-muted leading-relaxed">
                    <p>
                        In materials science, controlled oxidation forms a tenacious, microscopic passive layer on metal surfaces that halts corrosion and shields the core material from environmental decay.
                    </p>
                    <p>
                        We founded OXID Labs on that exact principle: modern digital ventures need protective, resilient software architectures. Instead of fragile prototypes held together by trend-chasing dependencies, we engineer digital systems that withstand volatility, scale predictably, and continue working reliably year after year.
                    </p>
                </div>
            </section>

            <!-- Three Working Principles -->
            <section class="space-y-6">
                <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-dim">
                    OUR OPERATING PRINCIPLES
                </span>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="night-card p-7 rounded-xl space-y-3">
                        <span class="text-xs font-mono text-night-cyan">PRINCIPLE 01</span>
                        <h3 class="text-base font-sans font-semibold text-night-text">Substance Over Spectacle</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            We repudiate unnecessary bloat and ornamental visual tricks that serve ego rather than the end user. Every line of code, database column, and interface transition must serve an uncompromising functional objective.
                        </p>
                    </div>

                    <div class="night-card p-7 rounded-xl space-y-3">
                        <span class="text-xs font-mono text-night-violet">PRINCIPLE 02</span>
                        <h3 class="text-base font-sans font-semibold text-night-text">Structural Durability</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            We build with battle-tested foundations—clean relational schemas, asynchronous job queues, and modular services. We design code that remains legible and maintainable long after deployment.
                        </p>
                    </div>

                    <div class="night-card p-7 rounded-xl space-y-3">
                        <span class="text-xs font-mono text-night-text">PRINCIPLE 03</span>
                        <h3 class="text-base font-sans font-semibold text-night-text">Complete Client Sovereignty</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            We believe creators must own their tools. We deliver clean, self-hostable infrastructure setups, transparent API documentation, and zero vendor lock-in traps. Your systems belong to you.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Current Stage & Honest Ambitions -->
            <section class="night-card p-8 sm:p-10 rounded-xl space-y-4">
                <span class="text-xs font-mono text-night-violet uppercase tracking-wider">STAGE & AMBITION</span>
                <h2 class="text-xl sm:text-2xl font-sans font-bold text-night-text">Independent, Lean, and Product-Driven</h2>
                <div class="space-y-4 text-xs sm:text-sm text-night-muted leading-relaxed">
                    <p>
                        OXID Labs is deliberately structured as a compact, senior-led product studio based in Jakarta and operating globally. We do not maintain bloated layers of middle management or fabricate vanity client counts.
                    </p>
                    <p>
                        We divide our bandwidth between two focused endeavors:
                    </p>
                    <ul class="space-y-2 pl-4 list-disc marker:text-night-cyan text-xs">
                        <li>
                            <strong class="text-night-text">Proprietary Software Ventures:</strong> Incubating specialized SaaS tools—such as <span class="text-night-text font-medium">PawonHPP</span>, an active calculation and costing engine designed to help culinary enterprises accurately compute product margins.
                        </li>
                        <li>
                            <strong class="text-night-text">Client Engineering Collaborations:</strong> Partnering with founders and operational businesses to design, build, and deploy bespoke web applications, API backends, and workflow automations.
                        </li>
                    </ul>
                    <p>
                        Our ambition is simple: build software that solves real problems, performs with microsecond precision, and generates tangible value for businesses.
                    </p>
                </div>
            </section>

            <!-- How We Work with Partners -->
            <section class="night-card p-8 sm:p-10 rounded-xl space-y-6">
                <span class="text-xs font-mono text-night-cyan uppercase tracking-wider">ENGAGEMENT MODEL</span>
                <h2 class="text-xl sm:text-2xl font-sans font-bold text-night-text">Direct Engineering Collaboration</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-xs text-night-muted leading-relaxed">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">01 — Direct Engineering Partnership</span>
                        <p>
                            You communicate directly with the software architects writing your code and designing your database models. No lost-in-translation account management.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">02 — Weekly Tangible Milestones</span>
                        <p>
                            We ship functional, test-verified software updates in tight weekly iterations rather than vanishing for months behind vague status reports.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider">03 — Complete Sovereignty</span>
                        <p>
                            Every Git commit, database migration, and architecture diagram is shared in real time. When a project is delivered, you hold complete keys to the repository.
                        </p>
                    </div>
                </div>
            </section>

        </div>

        <!-- Closing CTA -->
        <div class="mt-20 p-8 sm:p-12 night-card rounded-xl text-center space-y-4">
            <span class="text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted">
                INITIATE COLLABORATION
            </span>
            <h2 class="text-2xl sm:text-3xl font-sans font-bold text-night-text">
                Let's build something built to last.
            </h2>
            <p class="text-xs sm:text-sm text-night-muted max-w-lg mx-auto leading-relaxed">
                Whether you have an early-stage SaaS roadmap, an internal automation challenge, or need technical leadership, we invite you to start a conversation.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}" class="px-6 py-2.5 rounded-lg text-xs font-semibold btn-night-primary inline-flex items-center gap-2">
                    <span>Contact the Studio</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

    </div>
@endsection
