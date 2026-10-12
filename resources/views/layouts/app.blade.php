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
            /* Background Surfaces: Crisp, pristine, modern digital studio */
            --color-bg-base: #F8F9FA;
            --color-bg-midnight: #F1F5F9;
            --color-bg-navy: #E2E8F0;
            --color-bg-surface: #FFFFFF;
            --color-bg-raised: #FFFFFF;

            /* Borders */
            --color-border: #E2E8F0;
            --color-border-subtle: #F1F5F9;
            --color-border-active: #0B0F19;

            /* Typography */
            --color-text-primary: #0F172A;
            --color-text-muted: #475569;
            --color-text-dim: #94A3B8;

            /* Accents */
            --color-accent-cyan: #0284C7;
            --color-accent-cyan-muted: #0369A1;
            --color-accent-violet: #6366F1;

            /* Buttons & Controls */
            --color-btn-primary-bg: #0B0F19;
            --color-btn-primary-text: #FFFFFF;
            --color-btn-primary-border: #0B0F19;
            --color-btn-primary-hover: #000000;

            --color-btn-secondary-bg: #FFFFFF;
            --color-btn-secondary-hover: #F8FAFC;

            /* Shadows */
            --color-card-shadow: 0 2px 10px -2px rgba(15, 23, 42, 0.04), 0 1px 3px -1px rgba(15, 23, 42, 0.02);
            --color-card-shadow-hover: 0 12px 28px -6px rgba(15, 23, 42, 0.08), 0 4px 10px -2px rgba(15, 23, 42, 0.03);

            /* Scrollbars */
            --color-scrollbar-thumb: #CBD5E1;
            --color-scrollbar-hover: #94A3B8;
        }

        html[data-theme="dark"],
        html.theme-dark {
            /* Background Surfaces: Deep obsidian midnight */
            --color-bg-base: #0B0F17;
            --color-bg-midnight: #0F172A;
            --color-bg-navy: #1E293B;
            --color-bg-surface: #111827;
            --color-bg-raised: #1A2234;

            /* Borders */
            --color-border: rgba(255, 255, 255, 0.08);
            --color-border-subtle: rgba(255, 255, 255, 0.04);
            --color-border-active: rgba(255, 255, 255, 0.25);

            /* Typography */
            --color-text-primary: #F8FAFC;
            --color-text-muted: #94A3B8;
            --color-text-dim: #64748B;

            /* Accents */
            --color-accent-cyan: #38BDF8;
            --color-accent-cyan-muted: #0284C7;
            --color-accent-violet: #818CF8;

            /* Buttons & Controls */
            --color-btn-primary-bg: #FFFFFF;
            --color-btn-primary-text: #0B0F19;
            --color-btn-primary-border: #FFFFFF;
            --color-btn-primary-hover: #E2E8F0;

            --color-btn-secondary-bg: rgba(255, 255, 255, 0.05);
            --color-btn-secondary-hover: rgba(255, 255, 255, 0.1);

            /* Shadows */
            --color-card-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.4);
            --color-card-shadow-hover: 0 14px 32px -4px rgba(0, 0, 0, 0.6);

            /* Scrollbars */
            --color-scrollbar-thumb: #1E293B;
            --color-scrollbar-hover: #334155;
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

        /* Pill Buttons */
        .btn-pill-primary {
            background-color: var(--color-btn-primary-bg);
            color: var(--color-btn-primary-text);
            font-weight: 600;
            border-radius: 9999px;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-pill-primary:hover {
            background-color: var(--color-btn-primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
        }

        .btn-pill-secondary {
            background-color: var(--color-btn-secondary-bg);
            color: var(--color-text-primary);
            font-weight: 600;
            border: 1px solid var(--color-border);
            border-radius: 9999px;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-pill-secondary:hover {
            background-color: var(--color-btn-secondary-hover);
            border-color: var(--color-border-active);
            transform: translateY(-1px);
        }

        .btn-pill-white {
            background-color: #FFFFFF;
            color: #0B0F19;
            font-weight: 600;
            border-radius: 9999px;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-pill-white:hover {
            background-color: #F1F5F9;
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        /* Standard Studio Card */
        .studio-card {
            background-color: var(--color-bg-surface);
            border: 1px solid var(--color-border);
            border-radius: 1.25rem;
            box-shadow: var(--color-card-shadow);
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .studio-card:hover {
            border-color: var(--color-border-active);
            box-shadow: var(--color-card-shadow-hover);
            transform: translateY(-2px);
        }

        /* Floating Trust Badges */
        .floating-badge {
            background-color: var(--color-bg-surface);
            border: 1px solid var(--color-border);
            border-radius: 1rem;
            box-shadow: var(--color-card-shadow);
            transition: all 0.2s ease;
        }
        .floating-badge:hover {
            border-color: var(--color-border-active);
            transform: translateY(-1px);
        }

        /* Scroll Reveal System */
        .reveal-init {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
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

        /* Navbar Blur & Scroll States */
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
            background-color: rgba(248, 249, 250, 0.88) !important;
            border-bottom-color: var(--color-border) !important;
            backdrop-filter: blur(14px) !important;
            -webkit-backdrop-filter: blur(14px) !important;
        }
        html[data-theme="dark"] #global-header.header-scrolled,
        html.theme-dark #global-header.header-scrolled {
            background-color: rgba(11, 15, 23, 0.90) !important;
            border-bottom-color: var(--color-border) !important;
        }
    </style>
    @stack('styles')
</head>
<body class="relative min-h-screen bg-night-base text-night-muted antialiased selection:bg-black selection:text-white dark:selection:bg-white dark:selection:text-black overflow-x-hidden">

    <!-- Unified Global Header Navigation -->
    <header id="global-header" class="fixed top-0 left-0 right-0 z-50 header-top border-b transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 h-20 flex items-center justify-between">
            <!-- Studio Logo & Wordmark (Logo lama) -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-xl bg-white p-1.5 flex items-center justify-center transition-transform group-hover:scale-95 shadow-sm overflow-hidden flex-shrink-0 border border-slate-200">
                    <img src="{{ asset('images/oxid-logo.png') }}" alt="OXID" class="w-full h-full object-contain">
                </div>
                <div class="flex items-baseline gap-1">
                    <span class="font-sans font-extrabold text-lg tracking-wider text-night-text">
                        OXID
                    </span>
                    <span class="font-sans font-light tracking-[0.25em] text-xs uppercase text-night-dim">
                        LABS
                    </span>
                </div>
            </a>

            <!-- Desktop Primary Navigation Items -->
            <nav class="hidden lg:flex items-center gap-7 text-xs font-semibold tracking-wider uppercase text-night-muted">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Home
                </a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Layanan
                </a>
                <a href="{{ route('home') }}#pricing" class="hover:text-night-text transition-colors">
                    Katalog Harga
                </a>
                <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Produk & Portofolio
                </a>
                <a href="{{ route('capabilities') }}" class="{{ request()->routeIs('capabilities') ? 'text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Kemampuan
                </a>
                <a href="{{ route('studio') }}" class="{{ request()->routeIs('studio') ? 'text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Studio
                </a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact*') ? 'text-night-text font-bold' : 'hover:text-night-text' }} transition-colors">
                    Kontak
                </a>
            </nav>

            <!-- Navigation Actions: Theme Toggle, CTA & Mobile Trigger -->
            <div class="flex items-center gap-3">
                <!-- Theme Mode Toggle Control -->
                <x-theme-toggle variant="default" />

                <a href="{{ route('contact') }}" class="hidden sm:inline-flex px-5 py-2.5 text-xs font-semibold btn-pill-primary">
                    <span>Konsultasi Gratis</span>
                    <svg class="w-3.5 h-3.5 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>

                <button id="mobile-nav-toggle" type="button" aria-label="Toggle navigation menu" class="lg:hidden p-2.5 rounded-xl border border-night-border bg-night-surface text-night-muted hover:text-night-text focus:outline-none">
                    <svg id="hamburger-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                    <svg id="close-icon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Accessible Mobile Drawer Menu -->
    <div id="mobile-nav-drawer" class="hidden lg:hidden fixed inset-x-0 top-20 bottom-0 z-40 bg-night-base/98 backdrop-blur-xl px-6 py-8 flex flex-col justify-between overflow-y-auto border-t border-night-border">
        <div class="space-y-4">
            <div class="text-[11px] font-mono uppercase tracking-widest text-night-dim mb-2">Navigasi Utama</div>
            <a href="{{ route('home') }}" class="flex items-center justify-between py-3 border-b border-night-border text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('home') ? 'text-night-text font-bold' : 'text-night-muted' }}">
                <span>Home</span>
                <span class="text-xs text-night-dim font-mono">01</span>
            </a>
            <a href="{{ route('services') }}" class="flex items-center justify-between py-3 border-b border-night-border text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('services') ? 'text-night-text font-bold' : 'text-night-muted' }}">
                <span>Layanan</span>
                <span class="text-xs text-night-dim font-mono">02</span>
            </a>
            <a href="{{ route('home') }}#pricing" class="flex items-center justify-between py-3 border-b border-night-border text-sm font-semibold uppercase tracking-wider text-night-muted">
                <span>Katalog Harga</span>
                <span class="text-xs text-night-dim font-mono">03</span>
            </a>
            <a href="{{ route('products') }}" class="flex items-center justify-between py-3 border-b border-night-border text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('products') ? 'text-night-text font-bold' : 'text-night-muted' }}">
                <span>Produk & Portofolio</span>
                <span class="text-xs text-night-dim font-mono">04</span>
            </a>
            <a href="{{ route('capabilities') }}" class="flex items-center justify-between py-3 border-b border-night-border text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('capabilities') ? 'text-night-text font-bold' : 'text-night-muted' }}">
                <span>Kemampuan</span>
                <span class="text-xs text-night-dim font-mono">05</span>
            </a>
            <a href="{{ route('studio') }}" class="flex items-center justify-between py-3 border-b border-night-border text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('studio') ? 'text-night-text font-bold' : 'text-night-muted' }}">
                <span>Studio</span>
                <span class="text-xs text-night-dim font-mono">06</span>
            </a>
            <a href="{{ route('contact') }}" class="flex items-center justify-between py-3 border-b border-night-border text-sm font-semibold uppercase tracking-wider {{ request()->routeIs('contact*') ? 'text-night-text font-bold' : 'text-night-muted' }}">
                <span>Kontak</span>
                <span class="text-xs text-night-dim font-mono">07</span>
            </a>
        </div>

        <div class="pt-8 space-y-4">
            <a href="{{ route('contact') }}" class="w-full py-3.5 text-center text-xs font-semibold btn-pill-primary shadow-lg">
                Konsultasi Gratis Sekarang
            </a>
        </div>
    </div>

    <!-- Main Page Content Slot (Pad top for navbar) -->
    <main class="relative z-10 pt-20">
        @yield('content')
    </main>

    <!-- Shared Global Footer (Matching Reference Layout) -->
    <footer class="relative z-10 bg-[#0B0F19] text-white pt-20 pb-12 px-6 sm:px-8 mt-20 border-t border-white/10">
        <div class="max-w-7xl mx-auto">
            <!-- Pre-Footer Conversion Callout Banner -->
            <div class="pb-16 border-b border-white/10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                <div class="flex items-start gap-4 max-w-xl">
                    <div class="w-10 h-10 rounded-xl bg-white/10 border border-white/15 p-2 flex items-center justify-center flex-shrink-0">
                        <img src="{{ asset('images/oxid-logo.png') }}" alt="OXID" class="w-full h-full object-contain filter invert">
                    </div>
                    <div>
                        <h3 class="text-xl sm:text-2xl font-sans font-bold text-white mb-2">
                            Siap Membuat Website Impian Anda?
                        </h3>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Konsultasikan kebutuhan bisnis dan produk Anda sekarang. Tim teknis OXID Labs siap membantu dari tahap ide hingga siap online.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full lg:w-auto">
                    <a href="{{ route('contact') }}" class="px-7 py-3.5 text-xs sm:text-sm font-semibold btn-pill-white">
                        <span>Hubungi Kami</span>
                        <svg class="w-3.5 h-3.5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="px-6 py-3.5 text-xs sm:text-sm font-semibold rounded-full border border-white/20 bg-white/5 hover:bg-white/10 text-white transition-colors inline-flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.288.043.088.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.173.45 0.743.966 1.202.664.592 1.224.776 1.397.863.173.086.274.072.376-.043.101-.116.433-.506.549-.679.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                        <span>WhatsApp Studio</span>
                    </a>
                </div>
            </div>

            <!-- Footer Middle Columns -->
            <div class="py-14 grid grid-cols-1 md:grid-cols-12 gap-10">
                <div class="md:col-span-5 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-white p-1.5 flex items-center justify-center shadow-sm overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/oxid-logo.png') }}" alt="OXID" class="w-full h-full object-contain">
                        </div>
                        <span class="font-sans font-extrabold text-base tracking-wider text-white">
                            OXID <span class="font-light tracking-[0.25em] text-xs uppercase text-slate-400">LABS</span>
                        </span>
                    </div>
                    <p class="text-xs text-slate-400 max-w-sm leading-relaxed">
                        Independent digital product studio. Membantu bisnis dan founder membangun landing page konversi tinggi, platform web, dan sistem aplikasi yang modern, cepat, dan scalable.
                    </p>
                    <div class="text-xs font-mono text-slate-500 pt-2">
                        Build Your Digital Future &bull; oxid-labs.id
                    </div>
                </div>

                <div class="md:col-span-3 space-y-3">
                    <div class="text-xs font-mono uppercase tracking-wider text-slate-300 font-semibold mb-4">Navigasi Halaman</div>
                    <div class="flex flex-col space-y-2 text-xs text-slate-400">
                        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                        <a href="{{ route('services') }}" class="hover:text-white transition-colors">Layanan Digital</a>
                        <a href="{{ route('home') }}#pricing" class="hover:text-white transition-colors">Katalog Harga & Paket</a>
                        <a href="{{ route('products') }}" class="hover:text-white transition-colors">Katalog Produk & Portofolio</a>
                        <a href="{{ route('capabilities') }}" class="hover:text-white transition-colors">Kemampuan Rekayasa</a>
                        <a href="{{ route('studio') }}" class="hover:text-white transition-colors">Studio Manifesto</a>
                        <a href="{{ route('contact') }}" class="hover:text-white transition-colors">Konsultasi & Kontak</a>
                    </div>
                </div>

                <div class="md:col-span-4 space-y-3">
                    <div class="text-xs font-mono uppercase tracking-wider text-slate-300 font-semibold mb-4">Kontak & Konsultasi</div>
                    <div class="space-y-3 text-xs text-slate-400">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <a href="mailto:hello@oxid-labs.id" class="hover:text-white transition-colors font-mono">hello@oxid-labs.id</a>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                            <span class="font-mono">+62 812-3456-7890</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            <span>Jakarta &bull; Global Remote Operation</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom Bar -->
            <div class="pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-mono text-slate-500">
                <div>
                    &copy; {{ date('Y') }} OXID LABS. All rights reserved.
                </div>
                <div class="flex items-center gap-4 text-[11px] uppercase tracking-wider text-slate-400">
                    <span>WEB</span>
                    <span>&bull;</span>
                    <span>APP</span>
                    <span>&bull;</span>
                    <span>DIGITAL PRODUCT</span>
                    <span class="text-slate-600">|</span>
                    <a href="{{ route('login') }}" class="hover:text-white transition-colors">Admin Console</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Header Scroll Handler -->
    <script>
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

        // Mobile drawer toggle
        const mobileToggle = document.getElementById('mobile-nav-toggle');
        const mobileDrawer = document.getElementById('mobile-nav-drawer');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileToggle && mobileDrawer) {
            mobileToggle.addEventListener('click', () => {
                const isOpen = !mobileDrawer.classList.contains('hidden');
                mobileDrawer.classList.toggle('hidden');
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
