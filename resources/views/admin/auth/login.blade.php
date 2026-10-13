<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Authentication // OXID LABS</title>

    <!-- Browser Tab Favicon & Touch Icons -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-white.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon-white.png') }}">

    <!-- Anti-FOUT Theme Engine Execution -->
    <script>
        (function() {
            try {
                var stored = localStorage.getItem('oxid_theme');
                var theme = stored || (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');
                document.documentElement.setAttribute('data-theme', theme);
                document.documentElement.classList.remove('theme-dark', 'theme-light');
                document.documentElement.classList.add(theme === 'light' ? 'theme-light' : 'theme-dark');
            } catch(e) {}
        })();
    </script>

    <!-- Google Fonts: Plus Jakarta Sans & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
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
    <script src="{{ asset('js/theme-manager.js') }}"></script>
    <style>
        :root,
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
            --color-card-bg: #151518;
            --color-card-border: rgba(255, 255, 255, 0.08);
            --color-card-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.75);
            --color-input-bg: #0E0E10;
            --color-input-border: rgba(255, 255, 255, 0.12);
            --color-btn-bg: #F8F9FA;
            --color-btn-text: #111113;
            --bg-radial-1: transparent;
            --bg-radial-2: transparent;
        }

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
            --color-card-bg: #FFFFFF;
            --color-card-border: rgba(0, 0, 0, 0.08);
            --color-card-shadow: 0 20px 45px -10px rgba(0, 0, 0, 0.06);
            --color-input-bg: #F8F9FA;
            --color-input-border: rgba(0, 0, 0, 0.12);
            --color-btn-bg: #111113;
            --color-btn-text: #FFFFFF;
            --bg-radial-1: transparent;
            --bg-radial-2: transparent;
        }

        body {
            background-color: var(--color-bg-base);
            color: var(--color-text-primary);
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: background-color 0.25s ease, color 0.25s ease;
        }
        .login-card {
            background: var(--color-card-bg);
            border: 1px solid var(--color-card-border);
            box-shadow: var(--color-card-shadow);
            border-radius: 1.5rem;
            transition: background 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-5 selection:bg-cyan-400 selection:text-black relative">

    <!-- Top Right Theme Toggle -->
    <div class="fixed top-5 right-5 z-20">
        <x-theme-toggle variant="compact" />
    </div>

    <div class="w-full max-w-md relative z-10">
        <!-- Brand Header -->
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-3.5 group">
                <div class="w-12 h-12 rounded-2xl bg-white p-2 flex items-center justify-center shadow-sm border border-slate-200/80 group-hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/oxid-logo.png') }}?v=2" alt="OXID Labs" class="w-full h-full object-contain">
                </div>
                <div class="text-left">
                    <span class="font-display font-extrabold text-2xl tracking-tight text-slate-900 dark:text-white block leading-none">
                        OXID<span class="text-slate-400 font-normal">LABS</span>
                    </span>
                    <span class="text-[9px] font-mono uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400 font-semibold block mt-1">
                        Control Gateway
                    </span>
                </div>
            </a>
        </div>

        <!-- Login Card -->
        <div class="p-8 sm:p-10 rounded-3xl bg-white dark:bg-slate-900/90 border border-slate-200/80 dark:border-slate-800/80 shadow-xl backdrop-blur-xl">
            <div class="mb-7">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800 border border-slate-200/60 dark:border-slate-700/60 text-slate-700 dark:text-slate-300 text-[10px] font-mono uppercase tracking-wider mb-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    Restricted Area
                </div>
                <h1 class="text-xl font-bold text-slate-900 dark:text-white uppercase tracking-tight">Admin Console Access</h1>
                <p class="text-xs text-slate-600 dark:text-slate-400 mt-1.5 leading-relaxed">Authenticate administrative credentials to manage studio systems and catalog deployments.</p>
            </div>

            <!-- Error Notifications -->
            @if ($errors->any())
                <div class="mb-6 p-4 rounded-xl bg-rose-500/10 border border-rose-500/30 text-rose-600 dark:text-rose-300 text-xs flex items-start gap-3" role="alert">
                    <svg class="w-4 h-4 text-rose-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <div>
                        <span class="font-semibold block font-mono text-[11px] uppercase tracking-wider text-rose-500">Authentication Failed</span>
                        <span class="text-xs mt-0.5 block">{{ $errors->first() }}</span>
                    </div>
                </div>
            @endif

            @if (session('info'))
                <div class="mb-6 p-4 rounded-xl bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 text-xs flex items-center gap-2">
                    <svg class="w-4 h-4 shrink-0 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{ session('info') }}</span>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST" class="space-y-5" autocomplete="on">
                @csrf

                <!-- Email Input -->
                <div class="space-y-1.5">
                    <label for="email" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">
                        Admin Identifier (Email)
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autofocus 
                        placeholder="operator@oxidlabs.my.id" 
                        class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10 dark:focus:ring-white/20 transition-all font-sans"
                    >
                </div>

                <!-- Password Input with Show/Hide Toggle -->
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-xs font-mono uppercase tracking-wider text-slate-600 dark:text-slate-400">
                            Security Key (Password)
                        </label>
                    </div>
                    <div class="relative">
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required 
                            placeholder="••••••••••••" 
                            class="w-full bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 pr-11 text-sm text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10 dark:focus:ring-white/20 transition-all font-sans"
                        >
                        <button 
                            type="button" 
                            id="togglePassword" 
                            aria-label="Toggle password visibility" 
                            class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors focus:outline-none"
                        >
                            <svg id="eyeIconOpen" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <svg id="eyeIconClosed" class="w-4 h-4 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between text-xs pt-1">
                    <label class="flex items-center gap-2.5 text-slate-600 dark:text-slate-400 cursor-pointer select-none group">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded bg-slate-50 dark:bg-slate-800 border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white focus:ring-0 focus:ring-offset-0 cursor-pointer">
                        <span class="group-hover:text-slate-900 dark:group-hover:text-white transition-colors">Retain Session</span>
                    </label>
                    <span class="text-[11px] font-mono text-slate-400 flex items-center gap-1.5">
                        <svg class="w-3 h-3 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        TLS Protected
                    </span>
                </div>

                <button 
                    type="submit" 
                    id="submitBtn"
                    class="w-full py-3.5 rounded-full bg-[#111113] text-white hover:bg-black dark:bg-white dark:text-slate-900 dark:hover:bg-slate-100 font-semibold text-xs uppercase tracking-wider transition-all duration-200 flex items-center justify-center gap-2 group cursor-pointer shadow-md hover:-translate-y-0.5"
                >
                    <span>Authenticate Access</span>
                    <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </form>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('home') }}" class="text-xs text-slate-500 hover:text-slate-900 dark:hover:text-white transition-colors font-mono inline-flex items-center gap-1.5">
                <span>&larr;</span>
                <span>Return to Public Experience</span>
            </a>
        </div>
    </div>

    <!-- Password visibility toggle script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const eyeOpen = document.getElementById('eyeIconOpen');
            const eyeClosed = document.getElementById('eyeIconClosed');

            if (toggleBtn && passwordInput) {
                toggleBtn.addEventListener('click', function () {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    eyeOpen.classList.toggle('hidden', isPassword);
                    eyeClosed.classList.toggle('hidden', !isPassword);
                });
            }
        });
    </script>
</body>
</html>
