<!DOCTYPE html>
<html lang="en" class="scroll-smooth" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'OXID LABS — Independent Digital Product Studio')</title>
    <meta name="description" content="@yield('meta_description', 'OXID Labs is an independent technology and digital product studio building software, SaaS products, and intelligent digital workflows.')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="color-scheme" content="dark light">

    <!-- Browser Tab Favicon & Touch Icons -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-white.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon-white.png') }}">

    <!-- Early Theme Detection Script (Guarantees zero FOUT / theme flash) -->
    <script>
        (function() {
            try {
                const stored = localStorage.getItem('oxid_theme');
                const prefersLight = window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches;
                const theme = stored ? stored : (prefersLight ? 'light' : 'dark');
                document.documentElement.setAttribute('data-theme', theme);
                if (theme === 'light') {
                    document.documentElement.classList.add('theme-light');
                    document.documentElement.classList.remove('theme-dark');
                } else {
                    document.documentElement.classList.add('theme-dark');
                    document.documentElement.classList.remove('theme-light');
                }
            } catch (e) {}
        })();
    </script>

    <!-- Google Fonts: Plus Jakarta Sans & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN with Centralized Semantic Variable Mapping -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        night: {
                            base: 'var(--color-bg-base)',
                            midnight: 'var(--color-bg-midnight)',
                            navy: 'var(--color-bg-navy)',
                            surface: 'var(--color-bg-surface)',
                            raised: 'var(--color-bg-raised)',
                            border: 'var(--color-border)',
                            'border-subtle': 'var(--color-border-subtle)',
                            'border-active': 'var(--color-border-active)',
                            text: 'var(--color-text-primary)',
                            muted: 'var(--color-text-muted)',
                            dim: 'var(--color-text-dim)',
                            cyan: 'var(--color-accent-cyan)',
                            'cyan-muted': 'var(--color-accent-cyan-muted)',
                            violet: 'var(--color-accent-violet)',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', '-apple-system', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'ui-monospace', 'monospace'],
                    }
                }
            }
        }
    </script>

    <!-- Three.js (Local with CDN Fallback) -->
    <script src="{{ asset('js/three.min.js') }}"></script>
    <script>
        if (typeof THREE === 'undefined') {
            document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"><\/script>');
        }
    </script>

    <!-- Centralized Theme Engine Script -->
    <script src="{{ asset('js/theme-manager.js') }}"></script>

    <style>
        /* ========================================================================= */
        /* CENTRALIZED SEMANTIC DESIGN TOKENS (DARK & LIGHT THEMES)                   */
        /* ========================================================================= */
        :root,
        html[data-theme="dark"],
        html.theme-dark {
            /* Background Surfaces */
            --color-bg-base: #080D18;
            --color-bg-midnight: #0B1425;
            --color-bg-navy: #101C32;
            --color-bg-surface: #0D1629;
            --color-bg-raised: #111E36;

            /* Borders */
            --color-border: rgba(167, 178, 197, 0.12);
            --color-border-subtle: rgba(255, 255, 255, 0.06);
            --color-border-active: rgba(56, 189, 248, 0.32);

            /* Typography */
            --color-text-primary: #F2F5FA;
            --color-text-muted: #A7B2C5;
            --color-text-dim: #5E6D84;

            /* Accents */
            --color-accent-cyan: #00E5FF;
            --color-accent-cyan-muted: #38BDF8;
            --color-accent-violet: #8B5CF6;

            /* Buttons & Controls */
            --color-btn-primary-bg: #F2F5FA;
            --color-btn-primary-text: #080D18;
            --color-btn-primary-border: #F2F5FA;
            --color-btn-primary-hover: #E2E8F0;

            --color-btn-secondary-bg: rgba(255, 255, 255, 0.04);
            --color-btn-secondary-hover: rgba(255, 255, 255, 0.08);

            /* Scrollbars */
            --color-scrollbar-thumb: #17243C;
            --color-scrollbar-hover: #25395E;

            /* Card Highlights */
            --color-spotlight: rgba(56, 189, 248, 0.08);
            --color-card-shadow: 0 10px 30px -10px rgba(4, 7, 14, 0.6);
            --color-card-shadow-hover: 0 16px 36px -12px rgba(4, 7, 14, 0.8), 0 0 24px -6px rgba(56, 189, 248, 0.12);

            /* Hero Atmosphere Glow */
            --color-hero-glow: rgba(8, 13, 24, 0.70);
            --color-hero-glow-outer: rgba(8, 13, 24, 0.35);
        }

        html[data-theme="light"],
        html.theme-light {
            /* Background Surfaces: Crisp, airy tech studio environment */
            --color-bg-base: #F4F7FC;
            --color-bg-midnight: #EAF0F8;
            --color-bg-navy: #E1E8F2;
            --color-bg-surface: #FFFFFF;
            --color-bg-raised: #F8FAFD;

            /* Borders: High-definition structural lines */
            --color-border: rgba(36, 56, 90, 0.14);
            --color-border-subtle: rgba(36, 56, 90, 0.08);
            --color-border-active: rgba(2, 132, 199, 0.45);

            /* Typography: High contrast, readable slate */
            --color-text-primary: #172033;
            --color-text-muted: #4A5870;
            --color-text-dim: #71829D;

            /* Accents: Vibrant ocean blue and royal violet */
            --color-accent-cyan: #0284C7;
            --color-accent-cyan-muted: #087FA8;
            --color-accent-violet: #6855C5;

            /* Buttons & Controls */
            --color-btn-primary-bg: #172033;
            --color-btn-primary-text: #FFFFFF;
            --color-btn-primary-border: #172033;
            --color-btn-primary-hover: #23304A;

            --color-btn-secondary-bg: rgba(23, 32, 51, 0.04);
            --color-btn-secondary-hover: rgba(23, 32, 51, 0.08);

            /* Scrollbars */
            --color-scrollbar-thumb: #CBD5E1;
            --color-scrollbar-hover: #94A3B8;

            /* Card Highlights */
            --color-spotlight: rgba(2, 132, 199, 0.06);
            --color-card-shadow: 0 8px 24px -6px rgba(23, 32, 51, 0.07);
            --color-card-shadow-hover: 0 16px 36px -10px rgba(23, 32, 51, 0.12), 0 0 20px -5px rgba(2, 132, 199, 0.14);

            /* Hero Atmosphere Glow */
            --color-hero-glow: rgba(244, 247, 252, 0.75);
            --color-hero-glow-outer: rgba(244, 247, 252, 0.40);
        }

        body {
            background-color: var(--color-bg-base);
            color: var(--color-text-muted);
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transition: background-color 0.25s ease, color 0.25s ease;
        }

        ::selection {
            background: var(--color-accent-cyan);
            color: #FFFFFF;
        }

        /* Atmospheric Ambiance (Adapts dynamically between dark cosmos & light sky) */
        .ambient-night-sky {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            background: 
                radial-gradient(ellipse 950px 500px at 50% -5%, rgba(35, 76, 135, 0.18), transparent 70%),
                radial-gradient(circle 850px at 85% 35%, rgba(16, 37, 70, 0.22), transparent 70%),
                radial-gradient(circle 900px at 15% 85%, rgba(22, 45, 85, 0.18), transparent 75%);
            transition: background 0.3s ease;
        }

        html.theme-light .ambient-night-sky {
            background: 
                radial-gradient(ellipse 950px 500px at 50% -5%, rgba(186, 230, 253, 0.35), transparent 70%),
                radial-gradient(circle 850px at 85% 35%, rgba(199, 210, 254, 0.25), transparent 70%),
                radial-gradient(circle 900px at 15% 85%, rgba(224, 231, 255, 0.30), transparent 75%);
        }

        html.theme-light #night-sky-stars {
            display: none;
        }

        /* Architectural Card Surface with Tactile Spotlight */
        .night-card {
            position: relative;
            background-color: var(--color-bg-surface);
            border: 1px solid var(--color-border);
            box-shadow: var(--color-card-shadow);
            transition: border-color 0.25s ease, background-color 0.25s ease, box-shadow 0.25s ease;
            transform-style: preserve-3d;
        }
        .night-card::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            background: radial-gradient(420px circle at var(--mouse-x, -999px) var(--mouse-y, -999px), var(--color-spotlight), transparent 70%);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }
        .night-card:hover::before {
            opacity: 1;
        }
        .night-card:hover {
            border-color: var(--color-border-active);
            box-shadow: var(--color-card-shadow-hover);
        }

        /* Interface Scroll Reveal System */
        .reveal-init {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity 0.65s cubic-bezier(0.16, 1, 0.3, 1), transform 0.65s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }
        .reveal-active {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
        .delay-100 { transition-delay: 100ms; }
        .delay-150 { transition-delay: 150ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-250 { transition-delay: 250ms; }
        .delay-300 { transition-delay: 300ms; }

        /* Modal Fluid Entrance & Exit Transitions */
        #project-modal {
            opacity: 0;
            transition: opacity 0.22s ease-out;
        }
        #project-modal.modal-visible {
            opacity: 1;
        }
        #modal-card {
            opacity: 0;
            transform: scale(0.97) translateY(12px);
            transition: opacity 0.24s cubic-bezier(0.16, 1, 0.3, 1), transform 0.24s cubic-bezier(0.16, 1, 0.3, 1);
        }
        #modal-card.card-visible {
            opacity: 1;
            transform: scale(1) translateY(0);
        }

        html.theme-light #project-modal {
            background-color: rgba(15, 23, 42, 0.45) !important;
        }

        /* Prefers-Reduced-Motion Full Compliance */
        @media (prefers-reduced-motion: reduce) {
            .reveal-init {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
            .night-card {
                transform: none !important;
                transition: none !important;
            }
            .night-card::before {
                display: none !important;
            }
            #project-modal, #modal-card {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }

        /* Architectural Button System */
        .btn-night-primary {
            background-color: var(--color-btn-primary-bg);
            color: var(--color-btn-primary-text);
            font-weight: 600;
            border: 1px solid var(--color-btn-primary-border);
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-night-primary:hover {
            background-color: var(--color-btn-primary-hover);
            border-color: var(--color-btn-primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
        }

        .btn-night-secondary {
            background-color: var(--color-btn-secondary-bg);
            color: var(--color-text-primary);
            font-weight: 500;
            border: 1px solid var(--color-border);
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-night-secondary:hover {
            background-color: var(--color-btn-secondary-hover);
            border-color: var(--color-border-active);
            transform: translateY(-1px);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: var(--color-bg-base);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--color-scrollbar-thumb);
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--color-scrollbar-hover);
        }

        /* Clamp Hero Title for Fluid Scale */
        .fluid-hero-headline {
            font-size: clamp(2rem, 4.2vw, 3.65rem);
            line-height: 1.12;
            letter-spacing: -0.03em;
        }

        /* Scroll-aware Navigation States */
        #global-header {
            transition: background-color 0.25s ease, border-color 0.25s ease, backdrop-filter 0.25s ease, -webkit-backdrop-filter 0.25s ease;
        }
        #global-header.header-top {
            background-color: transparent !important;
            border-bottom-color: transparent !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
        }
        #global-header.header-scrolled {
            background-color: rgba(8, 13, 24, 0.88) !important;
            border-bottom-color: var(--color-border) !important;
            backdrop-filter: blur(12px) !important;
            -webkit-backdrop-filter: blur(12px) !important;
        }
        html.theme-light #global-header.header-scrolled {
            background-color: rgba(244, 247, 252, 0.90) !important;
            border-bottom-color: var(--color-border) !important;
        }
    </style>
    @stack('styles')
</head>
<body class="relative min-h-screen bg-night-base text-night-muted antialiased selection:bg-night-cyan selection:text-white overflow-x-hidden">

    <!-- Atmospheric Ambiance -->
    <div class="ambient-night-sky"></div>

    <!-- Sparse Natural Starfield Canvas (Dark Mode Only) -->
    <canvas id="night-sky-stars" class="fixed inset-0 pointer-events-none z-0"></canvas>

    <!-- Unified Global Header Navigation -->
    <header id="global-header" class="fixed top-0 left-0 right-0 z-50 header-top border-b transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 h-16 flex items-center justify-between">
            <!-- Studio Logo & Wordmark (Links to Homepage) -->
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                <div class="w-8 h-8 rounded-lg bg-white p-1 flex items-center justify-center transition-transform group-hover:scale-95 shadow-sm overflow-hidden flex-shrink-0 border border-slate-200/50">
                    <img src="{{ asset('images/oxid-logo.png') }}" alt="OXID Labs" class="w-full h-full object-contain">
                </div>
                <span class="font-sans font-bold text-base tracking-wider text-night-text">
                    OXID<span class="text-night-dim font-normal ml-0.5">LABS</span>
                </span>
            </a>

            <!-- Desktop Primary Navigation Items -->
            <nav class="hidden md:flex items-center gap-7 text-xs font-mono uppercase tracking-wider">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-night-text font-semibold' : 'text-night-muted hover:text-night-text' }} transition-colors">
                    Home
                </a>
                <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'text-night-text font-semibold' : 'text-night-muted hover:text-night-text' }} transition-colors">
                    Products
                </a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-night-text font-semibold' : 'text-night-muted hover:text-night-text' }} transition-colors">
                    Services
                </a>
                <a href="{{ route('capabilities') }}" class="{{ request()->routeIs('capabilities') ? 'text-night-text font-semibold' : 'text-night-muted hover:text-night-text' }} transition-colors">
                    Capabilities
                </a>
                <a href="{{ route('studio') }}" class="{{ request()->routeIs('studio') ? 'text-night-text font-semibold' : 'text-night-muted hover:text-night-text' }} transition-colors">
                    Studio
                </a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact*') ? 'text-night-text font-semibold' : 'text-night-muted hover:text-night-text' }} transition-colors">
                    Contact
                </a>
            </nav>

            <!-- Navigation Actions: Theme Toggle, CTA & Mobile Menu Trigger -->
            <div class="flex items-center gap-2.5 sm:gap-3">
                <!-- Theme Mode Toggle Control -->
                <x-theme-toggle variant="default" />

                <a href="{{ route('contact') }}" class="hidden sm:inline-flex px-4 py-2 rounded-lg text-xs font-semibold btn-night-primary">
                    Start a Project
                </a>

                <button id="mobile-nav-toggle" type="button" aria-label="Toggle navigation menu" class="md:hidden p-2 rounded-lg border border-night-border bg-night-surface text-night-muted hover:text-night-text focus:outline-none">
                    <svg id="hamburger-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                    <svg id="close-icon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Accessible Mobile Drawer Menu -->
    <div id="mobile-nav-drawer" class="hidden md:hidden fixed inset-x-0 top-16 bottom-0 z-40 bg-night-base px-6 py-8 flex flex-col justify-between overflow-y-auto">
        <div class="space-y-4">
            <div class="text-[10px] font-mono uppercase tracking-widest text-night-dim mb-2">Navigation Index</div>
            <a href="{{ route('home') }}" class="flex items-center justify-between py-2.5 border-b border-night-border text-sm font-mono uppercase tracking-wider {{ request()->routeIs('home') ? 'text-night-text font-bold text-night-cyan' : 'text-night-muted hover:text-night-text' }}">
                <span>Home</span>
                <span class="text-xs text-night-dim font-mono">01</span>
            </a>
            <a href="{{ route('products') }}" class="flex items-center justify-between py-2.5 border-b border-night-border text-sm font-mono uppercase tracking-wider {{ request()->routeIs('products') ? 'text-night-text font-bold text-night-cyan' : 'text-night-muted hover:text-night-text' }}">
                <span>Products</span>
                <span class="text-xs text-night-dim font-mono">02</span>
            </a>
            <a href="{{ route('services') }}" class="flex items-center justify-between py-2.5 border-b border-night-border text-sm font-mono uppercase tracking-wider {{ request()->routeIs('services') ? 'text-night-text font-bold text-night-cyan' : 'text-night-muted hover:text-night-text' }}">
                <span>Services</span>
                <span class="text-xs text-night-dim font-mono">03</span>
            </a>
            <a href="{{ route('capabilities') }}" class="flex items-center justify-between py-2.5 border-b border-night-border text-sm font-mono uppercase tracking-wider {{ request()->routeIs('capabilities') ? 'text-night-text font-bold text-night-cyan' : 'text-night-muted hover:text-night-text' }}">
                <span>Capabilities</span>
                <span class="text-xs text-night-dim font-mono">04</span>
            </a>
            <a href="{{ route('studio') }}" class="flex items-center justify-between py-2.5 border-b border-night-border text-sm font-mono uppercase tracking-wider {{ request()->routeIs('studio') ? 'text-night-text font-bold text-night-cyan' : 'text-night-muted hover:text-night-text' }}">
                <span>Studio</span>
                <span class="text-xs text-night-dim font-mono">05</span>
            </a>
            <a href="{{ route('contact') }}" class="flex items-center justify-between py-2.5 border-b border-night-border text-sm font-mono uppercase tracking-wider {{ request()->routeIs('contact*') ? 'text-night-text font-bold text-night-cyan' : 'text-night-muted hover:text-night-text' }}">
                <span>Contact</span>
                <span class="text-xs text-night-dim font-mono">06</span>
            </a>
        </div>

        <div class="pt-8 space-y-4">
            <div class="flex items-center justify-between p-3.5 rounded-xl bg-night-surface border border-night-border">
                <span class="text-xs font-mono text-night-text">Theme Appearance</span>
                <x-theme-toggle variant="compact" />
            </div>

            <div class="p-4 rounded-xl bg-night-surface border border-night-border text-xs text-night-muted font-mono space-y-1">
                <div class="text-night-text font-semibold flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    OXID Studio &bull; Operational
                </div>
                <div class="text-[11px] text-night-dim">Jakarta &bull; Global Remote &bull; Q4 2026 Ready</div>
            </div>
            <a href="{{ route('contact') }}" class="block text-center px-4 py-3 rounded-lg text-xs font-semibold btn-night-primary shadow-lg">
                Start a Project
            </a>
        </div>
    </div>

    <!-- Main Page Content Slot (Pad top 16 for fixed navbar) -->
    <main class="relative z-10 pt-16">
        @yield('content')
    </main>

    <!-- Shared Global Footer -->
    <footer class="relative z-10 bg-night-base border-t border-night-border py-14 px-6 sm:px-8 mt-12 transition-colors">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <div class="w-7 h-7 rounded-lg bg-white p-1 flex items-center justify-center shadow-sm overflow-hidden flex-shrink-0 border border-slate-200/50">
                    <img src="{{ asset('images/oxid-logo.png') }}" alt="OXID Labs" class="w-full h-full object-contain">
                </div>
                <span class="font-sans font-bold text-sm text-night-text tracking-wider">OXID LABS</span>
                <span class="text-xs text-night-dim font-mono">&bull; Independent Digital Product Studio</span>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-6 text-xs font-mono text-night-muted">
                <a href="{{ route('home') }}" class="hover:text-night-text transition-colors">Home</a>
                <a href="{{ route('products') }}" class="hover:text-night-text transition-colors">Products</a>
                <a href="{{ route('services') }}" class="hover:text-night-text transition-colors">Services</a>
                <a href="{{ route('capabilities') }}" class="hover:text-night-text transition-colors">Capabilities</a>
                <a href="{{ route('studio') }}" class="hover:text-night-text transition-colors">Studio</a>
                <a href="{{ route('contact') }}" class="hover:text-night-text transition-colors">Contact</a>
                <span class="text-night-dim/40">|</span>
                <a href="{{ route('login') }}" class="text-night-dim hover:text-night-text transition-colors">Admin Console</a>
            </div>

            <div class="text-[11px] font-mono text-night-dim text-center md:text-right">
                Jakarta &bull; Global Remote &bull; &copy; {{ date('Y') }} OXID Labs. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Starfield Script & Navigation Handlers -->
    <script>
        // 1. Natural Sparse Starfield Rendering
        (function() {
            const canvas = document.getElementById('night-sky-stars');
            if (!canvas) return;
            const ctx = canvas.getContext('2d');
            let stars = [];
            const starCount = 85;

            function initStars() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                stars = [];

                for (let i = 0; i < starCount; i++) {
                    stars.push({
                        x: Math.random() * canvas.width,
                        y: Math.random() * canvas.height,
                        radius: Math.random() * 0.9 + 0.6,
                        alpha: Math.random() * 0.45 + 0.2,
                        color: i % 5 === 0 ? '#93C5FD' : (i % 7 === 0 ? '#C7D2FE' : '#F8FAFC')
                    });
                }
                drawStars();
            }

            function drawStars() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                for (let i = 0; i < stars.length; i++) {
                    const s = stars[i];
                    ctx.beginPath();
                    ctx.arc(s.x, s.y, s.radius, 0, Math.PI * 2);
                    ctx.fillStyle = s.color;
                    ctx.globalAlpha = s.alpha;
                    ctx.fill();
                }
                ctx.globalAlpha = 1.0;
            }

            window.addEventListener('resize', initStars, { passive: true });
            initStars();
        })();

        // 2. Mobile Menu Drawer Toggle
        const mobileNavToggle = document.getElementById('mobile-nav-toggle');
        const mobileNavDrawer = document.getElementById('mobile-nav-drawer');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileNavToggle && mobileNavDrawer) {
            mobileNavToggle.addEventListener('click', () => {
                const isOpen = !mobileNavDrawer.classList.contains('hidden');
                mobileNavDrawer.classList.toggle('hidden');
                if (hamburgerIcon && closeIcon) {
                    hamburgerIcon.classList.toggle('hidden', !isOpen);
                    closeIcon.classList.toggle('hidden', isOpen);
                }
            });
        }

        // 3. Scroll-aware Navigation Border & Background Transition
        const globalHeader = document.getElementById('global-header');
        function updateHeaderScrollState() {
            if (!globalHeader) return;
            if (window.scrollY > 20) {
                globalHeader.classList.remove('header-top');
                globalHeader.classList.add('header-scrolled');
            } else {
                globalHeader.classList.remove('header-scrolled');
                globalHeader.classList.add('header-top');
            }
        }
        window.addEventListener('scroll', updateHeaderScrollState, { passive: true });
        updateHeaderScrollState();
    </script>

    <!-- Global Project Inspection Modal -->
    @include('components.project-modal')

    <!-- Cohesive Interface Motion System -->
    <script src="{{ asset('js/motion-system.js') }}"></script>

    @stack('scripts')
</body>
</html>
