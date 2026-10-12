<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Console — OXID LABS')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="color-scheme" content="dark light">

    <!-- Browser Tab Favicon & Touch Icons -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-white.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon-white.png') }}">

    <!-- Early Theme Detection Script (Eliminates FOUT / theme flash) -->
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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
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
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                        display: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'ui-monospace', 'monospace'],
                    }
                }
            }
        }
    </script>

    <!-- Centralized Theme Engine Script -->
    <script src="{{ asset('js/theme-manager.js') }}"></script>

    <style>
        :root,
        html[data-theme="light"],
        html.theme-light {
            --color-bg-base: #F8F9FA;
            --color-bg-midnight: #F3F4F6;
            --color-bg-navy: #E5E7EB;
            --color-bg-surface: #FFFFFF;
            --color-bg-raised: #FFFFFF;
            --color-border: rgba(0, 0, 0, 0.07);
            --color-border-subtle: rgba(0, 0, 0, 0.04);
            --color-border-active: #111113;
            --color-text-primary: #111113;
            --color-text-muted: #52525B;
            --color-text-dim: #71717A;
            --color-accent-cyan: #111113;
            --color-accent-cyan-muted: #27272A;
            --color-accent-violet: #18181B;
            --color-btn-primary-bg: #111113;
            --color-btn-primary-text: #FFFFFF;
            --color-btn-secondary-bg: #FFFFFF;
            --color-btn-secondary-text: #111113;
            --color-btn-secondary-border: rgba(0, 0, 0, 0.08);
            --color-scrollbar-thumb: #D1D5DB;
            --color-scrollbar-hover: #9CA3AF;
        }

        html[data-theme="dark"],
        html.theme-dark {
            --color-bg-base: #0E0E10;
            --color-bg-midnight: #141416;
            --color-bg-navy: #19191C;
            --color-bg-surface: #151518;
            --color-bg-raised: #1C1C20;
            --color-border: rgba(255, 255, 255, 0.08);
            --color-border-subtle: rgba(255, 255, 255, 0.04);
            --color-border-active: rgba(255, 255, 255, 0.35);
            --color-text-primary: #F8F9FA;
            --color-text-muted: #A1A1AA;
            --color-text-dim: #71717A;
            --color-accent-cyan: #F8F9FA;
            --color-accent-cyan-muted: #D4D4D8;
            --color-accent-violet: #E4E4E7;
            --color-btn-primary-bg: #F8F9FA;
            --color-btn-primary-text: #111113;
            --color-btn-secondary-bg: #151518;
            --color-btn-secondary-text: #F8F9FA;
            --color-btn-secondary-border: rgba(255, 255, 255, 0.12);
            --color-scrollbar-thumb: #27272A;
            --color-scrollbar-hover: #3F3F46;
        }

        body {
            background-color: var(--color-bg-base);
            color: var(--color-text-primary);
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            transition: background-color 0.25s ease, color 0.25s ease;
        }
        .admin-surface {
            background-color: var(--color-bg-surface);
            border: 1px solid var(--color-border);
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.03), 0 1px 2px -1px rgba(0, 0, 0, 0.03);
            transition: background-color 0.25s ease, border-color 0.25s ease;
        }
        .admin-surface-subtle {
            background-color: var(--color-bg-midnight);
            border: 1px solid var(--color-border-subtle);
        }
        .btn-pill-primary {
            background-color: var(--color-btn-primary-bg);
            color: var(--color-btn-primary-text);
            border-radius: 9999px;
            font-weight: 600;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-pill-primary:hover {
            opacity: 0.92;
            transform: translateY(-1px);
        }
        .btn-pill-secondary {
            background-color: var(--color-btn-secondary-bg);
            color: var(--color-btn-secondary-text);
            border: 1px solid var(--color-btn-secondary-border);
            border-radius: 9999px;
            font-weight: 500;
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn-pill-secondary:hover {
            opacity: 0.92;
            transform: translateY(-1px);
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
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
    </style>
</head>
<body class="min-h-screen flex bg-night-base text-night-text antialiased selection:bg-slate-900 selection:text-white dark:selection:bg-white dark:selection:text-slate-900 overflow-x-hidden">

    <!-- Desktop Left Sidebar -->
    <aside class="w-72 border-r border-night-border bg-night-surface flex flex-col justify-between hidden lg:flex shrink-0 z-30 transition-colors">
        <div class="flex-1 overflow-y-auto">
            <!-- Brand Header -->
            <div class="h-20 flex items-center gap-3.5 px-6 border-b border-night-border bg-night-midnight">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 group">
                    <div class="w-9 h-9 rounded-xl bg-white p-1.5 flex items-center justify-center shadow-sm border border-slate-200/50 group-hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset('images/oxid-logo.png') }}" alt="OXID Labs" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <span class="font-display font-extrabold text-base tracking-wider text-night-text block leading-none">
                            OXID<span class="text-night-dim font-light">ADMIN</span>
                        </span>
                        <span class="text-[9px] font-mono text-night-cyan uppercase tracking-widest block mt-1 font-semibold">
                            Studio Console
                        </span>
                    </div>
                </a>
            </div>

            <!-- Grouped Navigation -->
            <nav class="p-4 space-y-6 text-xs">
                <!-- Group 1: Overview -->
                <div class="space-y-1">
                    <span class="px-3 text-[10px] font-mono font-semibold uppercase tracking-wider text-night-dim">
                        Overview
                    </span>
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-slate-900 text-white dark:bg-white dark:text-slate-950 font-semibold shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-800/60' }}">
                        <svg class="w-4 h-4 {{ request()->routeIs('admin.dashboard') ? 'text-white dark:text-slate-950' : 'text-slate-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </div>

                <!-- Group 2: Content Management -->
                <div class="space-y-1">
                    <span class="px-3 text-[10px] font-mono font-semibold uppercase tracking-wider text-night-dim">
                        Content Management
                    </span>
                    <a href="{{ route('admin.projects.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.projects.index') || request()->routeIs('admin.projects.edit') ? 'bg-slate-900 text-white dark:bg-white dark:text-slate-950 font-semibold shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-800/60' }}">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 {{ request()->routeIs('admin.projects.index') || request()->routeIs('admin.projects.edit') ? 'text-white dark:text-slate-950' : 'text-slate-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                            <span>Projects Catalog</span>
                        </div>
                    </a>

                    <a href="{{ route('admin.projects.create') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.projects.create') ? 'bg-slate-900 text-white dark:bg-white dark:text-slate-950 font-semibold shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-800/60' }}">
                        <svg class="w-4 h-4 {{ request()->routeIs('admin.projects.create') ? 'text-white dark:text-slate-950' : 'text-slate-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        <span>Add New Project</span>
                    </a>
                </div>

                <!-- Group 3: Operations -->
                <div class="space-y-1">
                    <span class="px-3 text-[10px] font-mono font-semibold uppercase tracking-wider text-night-dim">
                        Operations
                    </span>
                    <a href="{{ route('admin.inquiries.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.inquiries.*') ? 'bg-slate-900 text-white dark:bg-white dark:text-slate-950 font-semibold shadow-sm' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-800/60' }}">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 {{ request()->routeIs('admin.inquiries.*') ? 'text-white dark:text-slate-950' : 'text-slate-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>Inquiries Inbox</span>
                        </div>
                    </a>
                </div>

                <!-- Group 4: System / External -->
                <div class="space-y-1 pt-4 border-t border-night-border/70">
                    <span class="px-3 text-[10px] font-mono font-semibold uppercase tracking-wider text-night-dim">
                        System Shortcuts
                    </span>
                    <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-800/60 transition-all">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-night-dim" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            <span>Live Public Website</span>
                        </div>
                        <span class="text-[10px] font-mono text-night-dim">&nearr;</span>
                    </a>
                </div>
            </nav>
        </div>

        <!-- User Info & Logout Footer -->
        <div class="p-4 border-t border-night-border bg-night-midnight transition-colors">
            <div class="flex items-center gap-3 mb-3 px-2 py-1">
                <div class="w-9 h-9 rounded-xl bg-slate-900 text-white dark:bg-white dark:text-slate-950 flex items-center justify-center font-mono font-bold text-xs shrink-0 shadow-sm">
                    {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 2)) }}
                </div>
                <div class="min-w-0 flex-1">
                    <span class="block text-xs font-semibold text-night-text truncate">{{ Auth::user()->name ?? 'Administrator' }}</span>
                    <span class="block text-[10px] text-night-dim font-mono truncate">{{ Auth::user()->email ?? 'admin@oxidlabs.my.id' }}</span>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full py-2.5 rounded-xl border border-night-border bg-night-surface text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400 hover:text-rose-500 hover:border-rose-300 dark:hover:border-rose-800 transition-colors flex items-center justify-center gap-2">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    <span>Sign Out</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Mobile Slide-over Drawer Backdrop & Drawer -->
    <div id="mobileDrawerBackdrop" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40 hidden lg:hidden transition-opacity"></div>
    <div id="mobileDrawer" class="fixed inset-y-0 left-0 w-72 bg-night-surface border-r border-night-border z-50 transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col justify-between">
        <div>
            <!-- Drawer Header -->
            <div class="h-20 flex items-center justify-between px-6 border-b border-night-border bg-night-midnight">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-white p-1 flex items-center justify-center border border-slate-200/50 shadow-sm">
                        <img src="{{ asset('images/oxid-logo.png') }}" alt="OXID Labs" class="w-full h-full object-contain">
                    </div>
                    <span class="font-display font-extrabold text-sm tracking-wider text-night-text">OXID ADMIN</span>
                </div>
                <button id="closeDrawerBtn" aria-label="Close navigation" class="p-2 text-night-muted hover:text-night-text rounded-lg focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Drawer Nav -->
            <nav class="p-4 space-y-4 text-xs font-medium">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.dashboard') ? 'bg-slate-900 text-white dark:bg-white dark:text-slate-950 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.projects.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.projects.index') ? 'bg-slate-900 text-white dark:bg-white dark:text-slate-950 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    <span>Projects Catalog</span>
                </a>
                <a href="{{ route('admin.projects.create') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.projects.create') ? 'bg-slate-900 text-white dark:bg-white dark:text-slate-950 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>Add Project</span>
                </a>
                <a href="{{ route('admin.inquiries.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.inquiries.*') ? 'bg-slate-900 text-white dark:bg-white dark:text-slate-950 font-semibold' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>Inquiries Inbox</span>
                </a>
                <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    <span>Live Public Website &nearr;</span>
                </a>
            </nav>
        </div>

        <div class="p-4 border-t border-night-border bg-night-midnight space-y-3">
            <div class="flex items-center justify-between p-2.5 rounded-xl bg-night-surface border border-night-border">
                <span class="text-xs font-mono text-night-text">Theme Appearance</span>
                <x-theme-toggle variant="compact" />
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full py-2.5 rounded-xl bg-rose-500/10 text-rose-500 border border-rose-500/30 text-xs font-mono uppercase tracking-wider flex items-center justify-center gap-2">
                    <span>Sign Out</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-w-0">
        <!-- Topbar -->
        <header class="h-20 border-b border-night-border bg-night-surface/90 backdrop-blur-md px-6 sm:px-8 flex items-center justify-between sticky top-0 z-20 transition-colors">
            <div class="flex items-center gap-4">
                <!-- Hamburger Button (Mobile / Tablet) -->
                <button id="openDrawerBtn" aria-label="Open mobile navigation" class="lg:hidden p-2 rounded-lg bg-white/5 hover:bg-white/10 text-night-muted focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <div class="flex items-center gap-3">
                    <div class="w-2 h-2 rounded-full bg-night-cyan animate-pulse"></div>
                    <h1 class="text-xs sm:text-sm font-semibold text-night-text font-mono uppercase tracking-wider">
                        @yield('header_title', 'CONTROL PORTAL')
                    </h1>
                </div>
            </div>

            <!-- Topbar Right Actions: Theme Toggle, Site Link & Add Project -->
            <div class="flex items-center gap-2.5 sm:gap-3">
                <!-- Theme Toggle Button -->
                <x-theme-toggle variant="default" />

                <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-night-border bg-night-surface hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 text-xs font-mono transition-colors shadow-sm">
                    <span>Public Site</span>
                    <span class="text-xs">&nearr;</span>
                </a>

                @if(!request()->routeIs('admin.projects.create'))
                    <a href="{{ route('admin.projects.create') }}" class="btn-pill-primary inline-flex items-center gap-1.5 px-4 py-2 text-xs uppercase tracking-wider shadow-sm">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        <span>New Project</span>
                    </a>
                @endif
            </div>
        </header>

        <!-- Main Body -->
        <main class="flex-1 p-6 sm:p-8 max-w-7xl w-full mx-auto">
            <!-- Flash Notifications -->
            @if(session('success'))
                <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 font-mono text-xs flex items-center justify-between" role="alert">
                    <div class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span>{{ session('success') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-400 text-sm font-bold">&times;</button>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 p-4 rounded-xl bg-rose-500/10 border border-rose-500/20 text-rose-400 font-mono text-xs flex items-center justify-between" role="alert">
                    <div class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 text-rose-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        <span>{{ session('error') }}</span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-rose-500 hover:text-rose-400 text-sm font-bold">&times;</button>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <!-- Mobile Drawer Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const openBtn = document.getElementById('openDrawerBtn');
            const closeBtn = document.getElementById('closeDrawerBtn');
            const drawer = document.getElementById('mobileDrawer');
            const backdrop = document.getElementById('mobileDrawerBackdrop');

            function openDrawer() {
                if (drawer && backdrop) {
                    backdrop.classList.remove('hidden');
                    drawer.classList.remove('-translate-x-full');
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeDrawer() {
                if (drawer && backdrop) {
                    drawer.classList.add('-translate-x-full');
                    backdrop.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            }

            if (openBtn) openBtn.addEventListener('click', openDrawer);
            if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
            if (backdrop) backdrop.addEventListener('click', closeDrawer);

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') closeDrawer();
            });
        });
    </script>
</body>
</html>
