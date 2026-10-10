@extends('layouts.app')

@section('title', 'Contact — OXID LABS')
@section('meta_description', 'Get in touch with OXID Labs to discuss a SaaS product build, custom software development, workflow automation, or architectural consulting.')

@section('content')
    <div class="max-w-6xl mx-auto px-6 sm:px-8 py-16 sm:py-20">
        
        <!-- Page Header -->
        <div class="max-w-3xl mb-16">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-night-cyan-muted mb-3">
                INITIATE TRANSMISSION
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-sans font-bold text-night-text tracking-tight mb-4">
                Start a Project Conversation
            </h1>
            <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                Whether you're exploring a new SaaS product, planning an operational backend, or seeking an architectural audit, share your requirements below.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Info Panel -->
            <div class="lg:col-span-5 space-y-8">
                <div class="space-y-3">
                    <h2 class="text-xl font-sans font-bold text-night-text">Direct Studio Channel</h2>
                    <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                        Every message is reviewed directly by our software architects. We do not use automated bot filters or hand off briefs to third-party sales agencies.
                    </p>
                </div>

                <div class="space-y-4 pt-6 border-t border-night-border/40 font-mono text-xs">
                    <div class="night-card p-4 rounded-lg space-y-1">
                        <span class="text-night-dim block text-[10px] uppercase">STUDIO DOMAIN</span>
                        <span class="text-night-text font-semibold">oxidlabs.my.id</span>
                    </div>

                    <div class="night-card p-4 rounded-lg space-y-1">
                        <span class="text-night-dim block text-[10px] uppercase">STUDIO LOCATION</span>
                        <span class="text-night-text font-semibold">Jakarta &bull; Global Remote</span>
                    </div>

                    <div class="night-card p-4 rounded-lg space-y-1">
                        <span class="text-night-dim block text-[10px] uppercase">RESPONSE WINDOW</span>
                        <span class="text-night-cyan font-semibold">Within 24–48 business hours</span>
                    </div>

                    <div class="night-card p-4 rounded-lg space-y-1">
                        <span class="text-night-dim block text-[10px] uppercase">SECURITY PROTOCOL</span>
                        <span class="text-night-muted font-normal">Encrypted Transport &bull; TLS 1.3 Active</span>
                    </div>
                </div>

                <div class="p-5 rounded-lg bg-white/[0.02] border border-night-border/30 text-xs text-night-muted space-y-2">
                    <span class="font-mono text-night-dim uppercase block text-[10px]">WHAT HAPPENS NEXT</span>
                    <p class="leading-relaxed">
                        1. We review your specifications, technical stack preferences, and scope.<br>
                        2. We respond with initial architectural insights and schedule a direct technical kickoff.<br>
                        3. You receive a transparent milestone breakdown and roadmap proposal.
                    </p>
                </div>
            </div>

            <!-- Right Functional Contact Form -->
            <div class="lg:col-span-7">
                <div class="night-card p-7 sm:p-10 rounded-xl">
                    <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                        @csrf
                        
                        <!-- Name & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5">
                                <label for="name" class="block text-xs font-mono uppercase tracking-wider text-night-muted">Name *</label>
                                <input type="text" id="name" name="name" required placeholder="Your Name" class="w-full bg-night-base border border-night-border rounded-lg px-3.5 py-2.5 text-xs text-night-text placeholder-night-dim focus:outline-none focus:border-night-cyan-muted/50 transition-all font-sans">
                            </div>
                            <div class="space-y-1.5">
                                <label for="email" class="block text-xs font-mono uppercase tracking-wider text-night-muted">Email Address *</label>
                                <input type="email" id="email" name="email" required placeholder="email@example.com" class="w-full bg-night-base border border-night-border rounded-lg px-3.5 py-2.5 text-xs text-night-text placeholder-night-dim focus:outline-none focus:border-night-cyan-muted/50 transition-all font-sans">
                            </div>
                        </div>

                        <!-- Project Type / Scope -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5">
                                <label for="project_type" class="block text-xs font-mono uppercase tracking-wider text-night-muted">Project Type</label>
                                <select id="project_type" name="project_type" class="w-full bg-night-base border border-night-border rounded-lg px-3.5 py-2.5 text-xs text-night-text focus:outline-none focus:border-night-cyan-muted/50 transition-all font-sans">
                                    <option value="SaaS Product Development" {{ request('scope') == 'SaaS Product Development' ? 'selected' : '' }}>SaaS Product Development</option>
                                    <option value="Web Application Development" {{ request('scope') == 'Web Application Development' ? 'selected' : '' }}>Web Application Development</option>
                                    <option value="Internal Business Systems" {{ request('scope') == 'Internal Business Systems' ? 'selected' : '' }}>Internal Business Systems / Software</option>
                                    <option value="Workflow Automation" {{ request('scope') == 'Workflow Automation' ? 'selected' : '' }}>Workflow Automation & Integration</option>
                                    <option value="System Architecture Consulting" {{ request('scope') == 'System Architecture Consulting' ? 'selected' : '' }}>System Architecture Consulting</option>
                                    <option value="Other Scope">Other Technical Scope</option>
                                </select>
                            </div>
                            <div class="space-y-1.5">
                                <label for="timeline" class="block text-xs font-mono uppercase tracking-wider text-night-muted">Timeline / Target Launch</label>
                                <input type="text" id="timeline" name="timeline" placeholder="e.g. 4-8 weeks / Q4 launch" class="w-full bg-night-base border border-night-border rounded-lg px-3.5 py-2.5 text-xs text-night-text placeholder-night-dim focus:outline-none focus:border-night-cyan-muted/50 transition-all font-sans">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="space-y-1.5">
                            <label for="subject" class="block text-xs font-mono uppercase tracking-wider text-night-muted">Subject / Summary</label>
                            <input type="text" id="subject" name="subject" value="{{ request('scope') ? 'Inquiry: ' . request('scope') : '' }}" placeholder="Brief summary of your project or system need" class="w-full bg-night-base border border-night-border rounded-lg px-3.5 py-2.5 text-xs text-night-text placeholder-night-dim focus:outline-none focus:border-night-cyan-muted/50 transition-all font-sans">
                        </div>

                        <!-- Message -->
                        <div class="space-y-1.5">
                            <label for="message" class="block text-xs font-mono uppercase tracking-wider text-night-muted">Project Objectives & Requirements *</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Detail your product goals, technical stack considerations, current roadblocks, or key deliverables..." class="w-full bg-night-base border border-night-border rounded-lg px-3.5 py-2.5 text-xs text-night-text placeholder-night-dim focus:outline-none focus:border-night-cyan-muted/50 transition-all font-sans"></textarea>
                        </div>

                        <!-- Form Feedback Alert -->
                        <div id="form-alert" class="hidden p-4 rounded-lg font-mono text-xs"></div>

                        <!-- Submit Button -->
                        <button type="submit" id="submit-btn" class="w-full py-3.5 rounded-lg btn-night-primary font-semibold text-xs tracking-wider flex items-center justify-center gap-2">
                            <span id="submit-text">Send Message</span>
                            <svg id="submit-icon" class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            <svg id="submit-spinner" class="w-3.5 h-3.5 animate-spin hidden" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path></svg>
                        </button>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('scripts')
<script>
    // Asynchronous Contact Submission Handling
    const contactForm = document.getElementById('contact-form');
    const formAlert = document.getElementById('form-alert');
    const submitBtn = document.getElementById('submit-btn');
    const submitText = document.getElementById('submit-text');
    const submitIcon = document.getElementById('submit-icon');
    const submitSpinner = document.getElementById('submit-spinner');

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            submitBtn.disabled = true;
            submitText.textContent = 'Transmitting...';
            submitIcon.classList.add('hidden');
            submitSpinner.classList.remove('hidden');
            formAlert.classList.add('hidden');

            const formData = new FormData(contactForm);

            fetch(contactForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                submitBtn.disabled = false;
                submitText.textContent = 'Send Message';
                submitIcon.classList.remove('hidden');
                submitSpinner.classList.add('hidden');

                if (data.success) {
                    formAlert.className = 'p-4 rounded-lg font-mono text-xs bg-emerald-500/10 border border-emerald-500/25 text-emerald-400';
                    formAlert.textContent = data.message || 'Inquiry dispatched successfully. We will be in touch shortly.';
                    formAlert.classList.remove('hidden');
                    contactForm.reset();
                } else {
                    throw new Error(data.message || 'Transmission could not be processed.');
                }
            })
            .catch(err => {
                submitBtn.disabled = false;
                submitText.textContent = 'Send Message';
                submitIcon.classList.remove('hidden');
                submitSpinner.classList.add('hidden');

                formAlert.className = 'p-4 rounded-lg font-mono text-xs bg-rose-500/10 border border-rose-500/25 text-rose-400';
                formAlert.textContent = err.message || 'An error occurred while transmitting your inquiry. Please check your connection.';
                formAlert.classList.remove('hidden');
            });
        });
    }
</script>
@endpush
