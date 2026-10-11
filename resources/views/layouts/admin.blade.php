<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Console — OXID LABS')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="color-scheme" content="dark light">

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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Syne:wght@600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

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
                        display: ['Syne', 'sans-serif'],
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
        html[data-theme="dark"],
        html.theme-dark {
            --color-bg-base: #080D18;
            --color-bg-midnight: #0B1425;
            --color-bg-navy: #101C32;
            --color-bg-surface: #0D1629;
            --color-bg-raised: #111E36;
            --color-border: rgba(167, 178, 197, 0.12);
            --color-border-subtle: rgba(255, 255, 255, 0.06);
            --color-border-active: rgba(56, 189, 248, 0.28);
            --color-text-primary: #F2F5FA;
            --color-text-muted: #A7B2C5;
            --color-text-dim: #5E6D84;
            --color-accent-cyan: #00E5FF;
            --color-accent-cyan-muted: #38BDF8;
            --color-accent-violet: #8B5CF6;
            --color-scrollbar-thumb: #1A2844;
            --color-scrollbar-hover: #25385C;
        }

        html[data-theme="light"],
        html.theme-light {
            --color-bg-base: #F4F7FC;
            --color-bg-midnight: #EAF0F8;
            --color-bg-navy: #E1E8F2;
            --color-bg-surface: #FFFFFF;
            --color-bg-raised: #F8FAFD;
            --color-border: rgba(36, 56, 90, 0.14);
            --color-border-subtle: rgba(36, 56, 90, 0.08);
            --color-border-active: rgba(2, 132, 199, 0.40);
            --color-text-primary: #172033;
            --color-text-muted: #4A5870;
            --color-text-dim: #71829D;
            --color-accent-cyan: #0284C7;
            --color-accent-cyan-muted: #087FA8;
            --color-accent-violet: #6855C5;
            --color-scrollbar-thumb: #CBD5E1;
            --color-scrollbar-hover: #94A3B8;
        }

        body {
            background-color: var(--color-bg-base);
            color: var(--color-text-primary);
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: background-color 0.25s ease, color 0.25s ease;
        }
        .admin-surface {
            background-color: var(--color-bg-surface);
            border: 1px solid var(--color-border);
            box-shadow: 0 4px 20px -5px rgba(0, 0, 0, 0.05);
            transition: background-color 0.25s ease, border-color 0.25s ease;
        }
        .admin-surface-subtle {
            background-color: var(--color-bg-midnight);
            border: 1px solid var(--color-border-subtle);
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
<body class="min-h-screen flex bg-night-base text-night-text antialiased selection:bg-night-cyan selection:text-white overflow-x-hidden">

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
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-night-cyan text-white font-semibold shadow-sm' : 'text-night-muted hover:text-night-text hover:bg-white/5' }}">
                        <svg class="w-4 h-4 {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-night-cyan' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    <a href="{{ route('admin.projects.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.projects.index') || request()->routeIs('admin.projects.edit') ? 'bg-night-cyan text-white font-semibold shadow-sm' : 'text-night-muted hover:text-night-text hover:bg-white/5' }}">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 {{ request()->routeIs('admin.projects.index') || request()->routeIs('admin.projects.edit') ? 'text-white' : 'text-night-cyan' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                            <span>Projects Catalog</span>
                        </div>
                    </a>

                    <a href="{{ route('admin.projects.create') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.projects.create') ? 'bg-night-cyan text-white font-semibold shadow-sm' : 'text-night-muted hover:text-night-text hover:bg-white/5' }}">
                        <svg class="w-4 h-4 {{ request()->routeIs('admin.projects.create') ? 'text-white' : 'text-night-dim' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    <a href="{{ route('admin.inquiries.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('admin.inquiries.*') ? 'bg-night-cyan text-white font-semibold shadow-sm' : 'text-night-muted hover:text-night-text hover:bg-white/5' }}">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 {{ request()->routeIs('admin.inquiries.*') ? 'text-white' : 'text-night-cyan' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-night-muted hover:text-night-cyan hover:bg-white/5 transition-all">
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
                <div class="w-9 h-9 rounded-xl bg-night-cyan/10 border border-night-cyan/20 text-night-cyan flex items-center justify-center font-mono font-bold text-xs shrink-0">
                    {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 2)) }}
                </div>
                <div class="min-w-0 flex-1">
                    <span class="block text-xs font-semibold text-night-text truncate">{{ Auth::user()->name ?? 'Administrator' }}</span>
                    <span class="block text-[10px] text-night-dim font-mono truncate">{{ Auth::user()->email ?? 'admin@oxidlabs.my.id' }}</span>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full py-2.5 rounded-xl border border-night-border bg-night-surface text-xs font-mono uppercase tracking-wider text-night-muted hover:text-rose-400 hover:border-rose-500/40 hover:bg-rose-500/10 transition-colors flex items-center justify-center gap-2">
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
                    <div class="w-8 h-8 rounded-xl bg-white p-1 flex items-center justify-center border border-slate-200/50">
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
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.dashboard') ? 'bg-night-cyan text-white font-semibold' : 'text-night-muted hover:bg-white/5' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.projects.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.projects.index') ? 'bg-night-cyan text-white font-semibold' : 'text-night-muted hover:bg-white/5' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    <span>Projects Catalog</span>
                </a>
                <a href="{{ route('admin.projects.create') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.projects.create') ? 'bg-night-cyan text-white font-semibold' : 'text-night-muted hover:bg-white/5' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>Add Project</span>
                </a>
                <a href="{{ route('admin.inquiries.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.inquiries.*') ? 'bg-night-cyan text-white font-semibold' : 'text-night-muted hover:bg-white/5' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>Inquiries Inbox</span>
                </a>
                <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-3 px-4 py-3 rounded-xl text-night-muted hover:bg-white/5">
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
                <button type="submit" class="w-full py-2.5 rounded-xl bg-rose-500/10 text-rose-400 border border-rose-500/30 text-xs font-mono uppercase tracking-wider flex items-center justify-center gap-2">
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

                <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-2 px-3 py-1.5 rounded-xl border border-night-border bg-white/5 hover:bg-white/10 text-night-muted hover:text-night-text text-xs font-mono transition-colors">
                    <span>Public Site</span>
                    <span class="text-night-cyan text-xs">&nearr;</span>
                </a>

                @if(!request()->routeIs('admin.projects.create'))
                    <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-xl bg-night-cyan text-white font-semibold text-xs uppercase tracking-wider hover:opacity-90 transition-opacity shadow-sm">
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
