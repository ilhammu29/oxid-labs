<!DOCTYPE html>
<html lang="id" class="scroll-smooth" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'OXID LABS — Solusi Website & Digital untuk Bisnis & Produk Anda')</title>
    <meta name="description" content="@yield('meta_description', 'OXID Labs menyediakan layanan pembuatan landing page, website company profile, e-commerce, web application, dan sistem digital modern yang berorientasi pada hasil.')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="color-scheme" content="light dark">

    <!-- Browser Tab Favicon & Touch Icons -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-white.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon-white.png') }}">

    <!-- Early Theme Detection Script -->
    <script>
        (function() {
            try {
                const stored = localStorage.getItem('oxid_theme');
                // Default to light to match user reference, unless user explicitly chose dark
                const theme = stored ? stored : 'light';
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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN with Centralized Semantic Variable Mapping -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: ['class', '[data-theme="dark"]'],
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
        /* CENTRALIZED SEMANTIC DESIGN TOKENS (LIGHT & DARK THEMES)                   */
        /* ========================================================================= */
        :root,
        html[data-theme="light"],
        html.theme-light {
            /* Background Surfaces: Putih Susu (Milk White) & Pure Surface */
            --color-bg-base: #F8F9FA;
            --color-bg-midnight: #F3F4F6;
            --color-bg-navy: #E5E7EB;
            --color-bg-surface: #FFFFFF;
            --color-bg-raised: #FFFFFF;

            /* Borders: Clean subtle monochrome */
            --color-border: rgba(0, 0, 0, 0.07);
            --color-border-subtle: rgba(0, 0, 0, 0.04);
            --color-border-active: #111113;

            /* Typography: Hitam Doff & Neutral Grays */
            --color-text-primary: #111113;
            --color-text-muted: #52525B;
            --color-text-dim: #71717A;

            /* Accents */
            --color-accent-cyan: #111113;
            --color-accent-cyan-muted: #27272A;
            --color-accent-violet: #18181B;

            /* Buttons & Controls */
            --color-btn-primary-bg: #111113;
            --color-btn-primary-text: #FFFFFF;
            --color-btn-primary-border: #111113;
            --color-btn-primary-hover: #000000;

            --color-btn-secondary-bg: #FFFFFF;
            --color-btn-secondary-hover: #F4F4F6;

            /* Shadows */
            --color-card-shadow: 0 2px 12px -2px rgba(0, 0, 0, 0.04), 0 1px 3px -1px rgba(0, 0, 0, 0.02);
            --color-card-shadow-hover: 0 16px 36px -6px rgba(0, 0, 0, 0.08), 0 4px 12px -2px rgba(0, 0, 0, 0.03);

            /* Scrollbars */
            --color-scrollbar-thumb: #D1D5DB;
            --color-scrollbar-hover: #9CA3AF;
        }

        html[data-theme="dark"],
        html.theme-dark {
            /* Background Surfaces: Hitam Doff Murni (Matte Black, Zero Blue) */
            --color-bg-base: #0E0E10;
            --color-bg-midnight: #141416;
            --color-bg-navy: #19191C;
            --color-bg-surface: #151518;
            --color-bg-raised: #1C1C20;

            /* Borders: Subtle white strokes */
            --color-border: rgba(255, 255, 255, 0.08);
            --color-border-subtle: rgba(255, 255, 255, 0.04);
            --color-border-active: rgba(255, 255, 255, 0.35);

            /* Typography: Putih Susu & Light Grays */
            --color-text-primary: #F8F9FA;
            --color-text-muted: #A1A1AA;
            --color-text-dim: #71717A;

            /* Accents */
            --color-accent-cyan: #F8F9FA;
            --color-accent-cyan-muted: #D4D4D8;
            --color-accent-violet: #E4E4E7;

            /* Buttons & Controls */
            --color-btn-primary-bg: #F8F9FA;
            --color-btn-primary-text: #111113;
            --color-btn-primary-border: #F8F9FA;
            --color-btn-primary-hover: #FFFFFF;

            --color-btn-secondary-bg: rgba(255, 255, 255, 0.05);
            --color-btn-secondary-hover: rgba(255, 255, 255, 0.1);

            /* Shadows */
            --color-card-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.5);
            --color-card-shadow-hover: 0 16px 36px -4px rgba(0, 0, 0, 0.7);

            /* Scrollbars */
            --color-scrollbar-thumb: #27272A;
            --color-scrollbar-hover: #3F3F46;
        }

        body, button, input, select, textarea, h1, h2, h3, h4, h5, h6, p, span, a {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif !important;
        }

        body {
            background-color: var(--color-bg-base);
            color: var(--color-text-muted);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transition: background-color 0.25s ease, color 0.25s ease;
        }

        /* Pill Buttons */
        .btn-pill-primary {
            background-color: var(--color-btn-primary-bg);
            color: var(--color-btn-primary-text);
            font-weight: 600;
            border-radius: 9999px;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-pill-primary:hover {
            background-color: var(--color-btn-primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .btn-pill-secondary {
            background-color: var(--color-btn-secondary-bg);
            color: var(--color-text-primary);
            font-weight: 600;
            border: 1px solid var(--color-border);
            border-radius: 9999px;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-pill-secondary:hover {
            background-color: var(--color-btn-secondary-hover);
            border-color: var(--color-border-active);
            transform: translateY(-2px);
        }

        .btn-pill-white {
            background-color: #FFFFFF;
            color: #111113;
            font-weight: 600;
            border-radius: 9999px;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-pill-white:hover {
            background-color: #F4F4F6;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
        }

        /* Sleek Studio Card (Minimalist, Non-Template Design) */
        .studio-card {
            background-color: var(--color-bg-surface);
            border: 1px solid var(--color-border);
            border-radius: 1.25rem;
            box-shadow: var(--color-card-shadow);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .studio-card:hover {
            border-color: var(--color-border-active);
            box-shadow: var(--color-card-shadow-hover);
            transform: translateY(-4px);
        }

        /* Floating Trust Badges */
        .floating-badge {
            background-color: var(--color-bg-surface);
            border: 1px solid var(--color-border);
            border-radius: 1rem;
            box-shadow: var(--color-card-shadow);
            transition: all 0.25s ease;
        }
        .floating-badge:hover {
            border-color: var(--color-border-active);
            transform: translateY(-2px);
        }

        /* Animations & Keyframes */
        @keyframes floatSlow {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }
        .animate-float {
            animation: floatSlow 5s ease-in-out infinite;
        }

        @keyframes pulseGlow {
            0%, 100% {
                opacity: 1;
                transform: scale(1);
            }
            50% {
                opacity: 0.7;
                transform: scale(0.96);
            }
        }
        .animate-pulse-glow {
            animation: pulseGlow 2.5s ease-in-out infinite;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        /* Page Enter Animation */
        @keyframes pageFadeIn {
            0% {
                opacity: 0;
                transform: translateY(8px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .page-enter-animation {
            animation: pageFadeIn 0.45s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        /* Scroll Reveal System */
        .reveal-init {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
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
        .delay-400 { transition-delay: 400ms; }
        .delay-500 { transition-delay: 500ms; }

        @media (prefers-reduced-motion: reduce) {
            .reveal-init {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
            .studio-card, .btn-pill-primary, .btn-pill-secondary, .floating-badge {
                transform: none !important;
                transition: none !important;
            }
        }

        /* Scrollbars */
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

        /* ========================================================================= */
        /* NAVBAR THEME & SCROLL DYNAMICS                                            */
        /* ========================================================================= */
        #global-header {
            transition: background-color 0.3s cubic-bezier(0.16, 1, 0.3, 1),
                        border-color 0.3s cubic-bezier(0.16, 1, 0.3, 1),
                        backdrop-filter 0.3s cubic-bezier(0.16, 1, 0.3, 1),
                        -webkit-backdrop-filter 0.3s cubic-bezier(0.16, 1, 0.3, 1),
                        box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* 1. Header Hero Dark State (Aktif saat di section hitam hero pada Home & Katalog Harga) */
        #global-header.header-hero-dark {
            background-color: rgba(14, 14, 16, 0.92) !important;
            border-bottom-color: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(14px) !important;
            -webkit-backdrop-filter: blur(14px) !important;
        }

        /* 1a. Header Top State di Section 1 (Tanpa garis batas, menyatu langsung dengan Section 1) */
        #global-header.header-hero-dark.header-hero-top {
            background-color: transparent !important;
            border-bottom-color: transparent !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
            box-shadow: none !important;
        }
        #global-header.header-hero-dark .header-wordmark {
            color: #ffffff !important;
        }
        #global-header.header-hero-dark .header-submark {
            color: #94a3b8 !important;
        }
        #global-header.header-hero-dark nav a {
            color: #94a3b8 !important;
        }
        #global-header.header-hero-dark nav a:hover {
            color: #ffffff !important;
        }
        #global-header.header-hero-dark nav a.nav-active {
            color: #ffffff !important;
            font-weight: 700 !important;
        }
        #global-header.header-hero-dark .header-cta {
            background-color: #ffffff !important;
            color: #0E0E10 !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
        }
        #global-header.header-hero-dark .header-cta:hover {
            background-color: #f4f4f6 !important;
        }
        #global-header.header-hero-dark #mobile-nav-toggle {
            background-color: rgba(255, 255, 255, 0.1) !important;
            border-color: rgba(255, 255, 255, 0.15) !important;
            color: #ffffff !important;
        }
        #global-header.header-hero-dark .theme-toggle-btn {
            background-color: rgba(255, 255, 255, 0.1) !important;
            border-color: rgba(255, 255, 255, 0.15) !important;
            color: #ffffff !important;
        }
        #global-header.header-hero-dark .theme-icon-moon {
            color: #cbd5e1 !important;
        }
        #global-header.header-hero-dark .theme-icon-sun {
            color: #fcd34d !important;
        }

        /* 2. Header Scrolled State (Ketika scroll melewati section hitam menuju section putih) */
        /* Light mode scrolled: Putih susu bersih & teks gelap dengan kontras tajam */
        html:not([data-theme="dark"]):not(.dark) #global-header.header-scrolled {
            background-color: rgba(248, 249, 250, 0.95) !important;
            border-bottom-color: rgba(0, 0, 0, 0.08) !important;
            backdrop-filter: blur(16px) !important;
            -webkit-backdrop-filter: blur(16px) !important;
            box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.05);
        }
        html:not([data-theme="dark"]):not(.dark) #global-header.header-scrolled .header-wordmark {
            color: #0E0E10 !important;
        }
        html:not([data-theme="dark"]):not(.dark) #global-header.header-scrolled .header-submark {
            color: #64748b !important;
        }
        html:not([data-theme="dark"]):not(.dark) #global-header.header-scrolled nav a {
            color: #64748b !important;
        }
        html:not([data-theme="dark"]):not(.dark) #global-header.header-scrolled nav a:hover {
            color: #0E0E10 !important;
        }
        html:not([data-theme="dark"]):not(.dark) #global-header.header-scrolled nav a.nav-active {
            color: #0E0E10 !important;
            font-weight: 700 !important;
        }
        html:not([data-theme="dark"]):not(.dark) #global-header.header-scrolled .header-cta {
            background-color: #0E0E10 !important;
            color: #ffffff !important;
            border: 1px solid #0E0E10 !important;
        }
        html:not([data-theme="dark"]):not(.dark) #global-header.header-scrolled .header-cta:hover {
            background-color: #27272a !important;
        }
        html:not([data-theme="dark"]):not(.dark) #global-header.header-scrolled #mobile-nav-toggle {
            background-color: #ffffff !important;
            border-color: #e2e8f0 !important;
            color: #0E0E10 !important;
        }
        html:not([data-theme="dark"]):not(.dark) #global-header.header-scrolled .theme-toggle-btn {
            background-color: #ffffff !important;
            border-color: #e2e8f0 !important;
            color: #64748b !important;
        }

        /* 3. Dark mode scrolled: Tetap hitam doff konsisten */
        html[data-theme="dark"] #global-header.header-scrolled,
        html.dark #global-header.header-scrolled,
        html.theme-dark #global-header.header-scrolled {
            background-color: rgba(14, 14, 16, 0.92) !important;
            border-bottom-color: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(16px) !important;
            -webkit-backdrop-filter: blur(16px) !important;
        }

        /* 4. Top state di halaman tanpa dark hero */
        #global-header.header-top {
            background-color: transparent !important;
            border-bottom-color: transparent !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
        }

        /* 5. Mobile Drawer Terbuka: Selalu hitam doff agar selaras dengan drawer */
        body.mobile-drawer-open #global-header {
            background-color: #0E0E10 !important;
            border-bottom-color: rgba(255, 255, 255, 0.1) !important;
        }
        body.mobile-drawer-open #global-header .header-wordmark {
            color: #ffffff !important;
        }
        body.mobile-drawer-open #global-header .header-submark {
            color: #94a3b8 !important;
        }
        body.mobile-drawer-open #global-header #mobile-nav-toggle {
            background-color: rgba(255, 255, 255, 0.1) !important;
            border-color: rgba(255, 255, 255, 0.15) !important;
            color: #ffffff !important;
        }
        body.mobile-drawer-open #global-header .theme-toggle-btn {
            background-color: rgba(255, 255, 255, 0.1) !important;
            border-color: rgba(255, 255, 255, 0.15) !important;
            color: #ffffff !important;
        }
    </style>
    @stack('styles')
</head>
<body class="relative min-h-screen bg-night-base text-night-muted antialiased selection:bg-black selection:text-white dark:selection:bg-white dark:selection:text-black overflow-x-hidden {{ request()->routeIs('home', 'pricing*', 'services*', 'capabilities*', 'studio*') ? 'has-dark-hero' : '' }}">

    <!-- Unified Global Header Navigation -->
    <header id="global-header" class="fixed top-0 left-0 right-0 z-50 border-b border-transparent transition-all duration-300 {{ request()->routeIs('home', 'pricing*', 'services*', 'capabilities*', 'studio*') ? 'header-hero-dark header-hero-top' : 'header-top' }}">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 h-20 flex items-center justify-between">
            <!-- Studio Logo & Wordmark (Logo lama) -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-xl bg-white p-1.5 flex items-center justify-center transition-transform group-hover:scale-95 shadow-sm overflow-hidden flex-shrink-0 border border-slate-200">
                    <img src="{{ asset('images/oxid-logo.png') }}" alt="OXID" class="w-full h-full object-contain">
                </div>
                <div class="flex items-baseline gap-1">
                    <span class="font-sans font-extrabold text-lg tracking-wider text-night-text header-wordmark transition-colors">
                        OXID
                    </span>
                    <span class="font-sans font-light tracking-[0.25em] text-xs uppercase text-night-dim header-submark transition-colors">
                        LABS
                    </span>
                </div>
            </a>

            <!-- Desktop Primary Navigation Items -->
            <nav class="hidden lg:flex items-center gap-7 text-xs font-semibold tracking-wider uppercase text-night-muted">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'nav-active text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Home
                </a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'nav-active text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Layanan
                </a>
                <a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing*') ? 'nav-active text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Katalog Harga
                </a>
                <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'nav-active text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Produk & Portofolio
                </a>
                <a href="{{ route('capabilities') }}" class="{{ request()->routeIs('capabilities') ? 'nav-active text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Kemampuan
                </a>
                <a href="{{ route('studio') }}" class="{{ request()->routeIs('studio') ? 'nav-active text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Studio
                </a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact*') ? 'nav-active text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Kontak
                </a>
            </nav>

            <!-- Navigation Actions: Theme Toggle, CTA & Mobile Trigger -->
            <div class="flex items-center gap-3">
                <!-- Theme Mode Toggle Control -->
                <x-theme-toggle variant="default" />

                <a href="{{ route('contact') }}" class="hidden sm:inline-flex px-5 py-2.5 text-xs font-semibold btn-pill-primary header-cta transition-colors">
                    <span>Konsultasi Gratis</span>
                    <svg class="w-3.5 h-3.5 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>

                <button id="mobile-nav-toggle" type="button" aria-label="Toggle navigation menu" class="lg:hidden p-2.5 rounded-xl border border-night-border bg-night-surface text-night-muted hover:text-night-text focus:outline-none transition-colors">
                    <svg id="hamburger-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                    <svg id="close-icon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Accessible Mobile Drawer Menu (Matte Black #0E0E10 matching Section 1) -->
    <div id="mobile-nav-drawer" class="hidden lg:hidden fixed inset-x-0 top-20 bottom-0 z-40 bg-[#0E0E10] text-white backdrop-blur-2xl px-6 py-8 flex flex-col justify-between overflow-y-auto border-t border-white/10">
        <div class="space-y-4">
            <div class="text-[11px] font-mono uppercase tracking-widest text-zinc-500 mb-2">Navigasi Utama</div>
            <a href="{{ route('home') }}" class="flex items-center justify-between py-3 border-b border-white/10 text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('home') ? 'text-white font-bold' : 'text-zinc-400 hover:text-white' }}">
                <span>Home</span>
                <span class="text-xs text-zinc-500 font-mono">01</span>
            </a>
            <a href="{{ route('services') }}" class="flex items-center justify-between py-3 border-b border-white/10 text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('services') ? 'text-white font-bold' : 'text-zinc-400 hover:text-white' }}">
                <span>Layanan</span>
                <span class="text-xs text-zinc-500 font-mono">02</span>
            </a>
            <a href="{{ route('pricing') }}" class="flex items-center justify-between py-3 border-b border-white/10 text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('pricing*') ? 'text-white font-bold' : 'text-zinc-400 hover:text-white' }}">
                <span>Katalog Harga</span>
                <span class="text-xs text-zinc-500 font-mono">03</span>
            </a>
            <a href="{{ route('products') }}" class="flex items-center justify-between py-3 border-b border-white/10 text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('products') ? 'text-white font-bold' : 'text-zinc-400 hover:text-white' }}">
                <span>Produk & Portofolio</span>
                <span class="text-xs text-zinc-500 font-mono">04</span>
            </a>
            <a href="{{ route('capabilities') }}" class="flex items-center justify-between py-3 border-b border-white/10 text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('capabilities') ? 'text-white font-bold' : 'text-zinc-400 hover:text-white' }}">
                <span>Kemampuan</span>
                <span class="text-xs text-zinc-500 font-mono">05</span>
            </a>
            <a href="{{ route('studio') }}" class="flex items-center justify-between py-3 border-b border-white/10 text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('studio') ? 'text-white font-bold' : 'text-zinc-400 hover:text-white' }}">
                <span>Studio</span>
                <span class="text-xs text-zinc-500 font-mono">06</span>
            </a>
            <a href="{{ route('contact') }}" class="flex items-center justify-between py-3 border-b border-white/10 text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('contact*') ? 'text-white font-bold' : 'text-zinc-400 hover:text-white' }}">
                <span>Kontak</span>
                <span class="text-xs text-zinc-500 font-mono">07</span>
            </a>
        </div>

        <div class="pt-8 space-y-4">
            <a href="{{ route('contact') }}" class="w-full py-3.5 text-center text-xs font-semibold btn-pill-white shadow-lg">
                Konsultasi Gratis Sekarang
            </a>
        </div>
    </div>

    <!-- Main Page Content Slot (Pad top for navbar except on dark hero pages to unify Section 1) -->
    <main class="relative z-10 page-enter-animation {{ request()->routeIs('home', 'pricing*', 'services*', 'capabilities*', 'studio*') ? '' : 'pt-20' }}">
        @yield('content')
    </main>

    <!-- Shared Global Footer (Matching Minimalist Studio Reference) -->
    <footer class="relative z-10 bg-[#0E0E10] text-white pt-14 pb-10 px-6 sm:px-8 mt-20 border-t border-white/10">
        <div class="max-w-7xl mx-auto space-y-10">
            <!-- Compact 3-Column Studio Conversion Section -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center justify-between pb-8 border-b border-white/10">
                <!-- Left: Wordmark & Tagline -->
                <div class="md:col-span-4 space-y-2.5">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-white p-1.5 flex items-center justify-center shadow-sm overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/oxid-logo.png') }}" alt="OXID" class="w-full h-full object-contain">
                        </div>
                        <span class="font-sans font-extrabold text-base tracking-wider text-white">
                            OXID <span class="font-light tracking-[0.25em] text-xs uppercase text-zinc-400">LABS</span>
                        </span>
                    </div>
                    <p class="text-xs text-zinc-400">
                        Build Your Digital Future
                    </p>
                </div>

                <!-- Middle: Direct Callout Prompt -->
                <div class="md:col-span-5 space-y-1">
                    <h3 class="text-base sm:text-lg font-bold text-white">
                        Siap Membuat Website Impian Anda?
                    </h3>
                    <p class="text-xs text-zinc-400 leading-relaxed">
                        Konsultasikan kebutuhan Anda sekarang. Tim kami siap membantu dari awal hingga online.
                    </p>
                </div>

                <!-- Right: Action & Contacts -->
                <div class="md:col-span-3 flex flex-col items-start md:items-end gap-3">
                    <a href="{{ route('contact') }}" class="px-6 py-2.5 text-xs font-semibold btn-pill-white">
                        <span>Hubungi Kami &rarr;</span>
                    </a>
                    <div class="flex flex-col sm:flex-row md:flex-col items-start md:items-end gap-2 text-xs font-mono text-zinc-400">
                        <a href="https://wa.me/6289516885651" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.288.043.088.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.173.45 0.743.966 1.202.664.592 1.224.776 1.397.863.173.086.274.072.376-.043.101-.116.433-.506.549-.679.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                            <span>+62 895-1688-5651</span>
                        </a>
                        <a href="mailto:oxidteam@oxidlabs.my.id" class="hover:text-white transition-colors flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span>oxidteam@oxidlabs.my.id</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom Strip -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-mono text-zinc-500">
                <div class="flex items-center gap-3">
                    <span>oxid-labs.id</span>
                    <span>&bull;</span>
                    <span>&copy; {{ date('Y') }} OXID LABS</span>
                </div>
                <div class="flex items-center gap-4 text-[11px] uppercase tracking-wider text-zinc-400">
                    <span>WEB</span>
                    <span>&bull;</span>
                    <span>APP</span>
                    <span>&bull;</span>
                    <span>DIGITAL PRODUCT</span>
                    <span class="text-zinc-600">|</span>
                    <a href="{{ route('login') }}" class="hover:text-white transition-colors">Admin</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Header Scroll Handler -->
    <script>
        const globalHeader = document.getElementById('global-header');
        const darkHeroSection = document.getElementById('dark-hero-section');

        function updateHeaderScrollState() {
            if (!globalHeader) return;

            if (darkHeroSection) {
                const rect = darkHeroSection.getBoundingClientRect();
                // Navbar has height 80px (h-20). When the bottom of the dark hero section is <= 80px,
                // the user has scrolled past the dark hero into the light/white content sections.
                const isPastDarkHero = rect.bottom <= 80;
                const isAtTop = window.scrollY <= 15;

                if (isPastDarkHero) {
                    globalHeader.classList.remove('header-hero-dark', 'header-hero-top', 'header-top');
                    globalHeader.classList.add('header-scrolled');
                } else {
                    globalHeader.classList.remove('header-scrolled', 'header-top');
                    globalHeader.classList.add('header-hero-dark');
                    if (isAtTop) {
                        globalHeader.classList.add('header-hero-top');
                    } else {
                        globalHeader.classList.remove('header-hero-top');
                    }
                }
            } else {
                if (window.scrollY > 20) {
                    globalHeader.classList.remove('header-top', 'header-hero-dark', 'header-hero-top');
                    globalHeader.classList.add('header-scrolled');
                } else {
                    globalHeader.classList.remove('header-scrolled', 'header-hero-dark', 'header-hero-top');
                    globalHeader.classList.add('header-top');
                }
            }
        }

        window.addEventListener('scroll', updateHeaderScrollState, { passive: true });
        window.addEventListener('resize', updateHeaderScrollState, { passive: true });
        window.addEventListener('oxid-theme-changed', updateHeaderScrollState);
        document.addEventListener('DOMContentLoaded', updateHeaderScrollState);
        updateHeaderScrollState();

        // Mobile drawer toggle
        const mobileToggle = document.getElementById('mobile-nav-toggle');
        const mobileDrawer = document.getElementById('mobile-nav-drawer');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileToggle && mobileDrawer) {
            mobileToggle.addEventListener('click', () => {
                const isOpen = !mobileDrawer.classList.contains('hidden');
                mobileDrawer.classList.toggle('hidden');
                document.body.classList.toggle('mobile-drawer-open', !isOpen);
                if (hamburgerIcon && closeIcon) {
                    hamburgerIcon.classList.toggle('hidden', !isOpen);
                    closeIcon.classList.toggle('hidden', isOpen);
                }
            });
        }
    </script>

    <!-- Global Project Inspection Modal -->
    @include('components.project-modal')

    <!-- Cohesive Interface Motion System -->
    <script src="{{ asset('js/motion-system.js') }}"></script>

    @stack('scripts')
</body>
</html>
