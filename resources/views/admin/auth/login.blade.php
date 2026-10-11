<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Authentication // OXID LABS</title>

    <!-- Browser Tab Favicon & Touch Icons -->
    <link rel="icon" type="image/png" href="{{ asset('images/oxid-logo.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/oxid-logo.png') }}">

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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Syne:wght@700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
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
            --color-border-active: rgba(56, 189, 248, 0.35);
            --color-text-primary: #F2F5FA;
            --color-text-muted: #A7B2C5;
            --color-text-dim: #5E6D84;
            --color-accent-cyan: #00E5FF;
            --color-accent-cyan-muted: #38BDF8;
            --color-accent-violet: #8B5CF6;
            --color-card-bg: linear-gradient(180deg, rgba(13, 22, 41, 0.92) 0%, rgba(8, 13, 24, 0.97) 100%);
            --color-card-border: rgba(167, 178, 197, 0.15);
            --color-card-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.75), 0 0 35px -5px rgba(56, 189, 248, 0.07);
            --color-input-bg: rgba(8, 13, 24, 0.80);
            --color-input-border: rgba(51, 65, 85, 0.6);
            --color-btn-bg: #FFFFFF;
            --color-btn-text: #080D18;
            --bg-radial-1: rgba(56, 189, 248, 0.08);
            --bg-radial-2: rgba(139, 92, 246, 0.05);
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
            --color-border-active: rgba(2, 132, 199, 0.45);
            --color-text-primary: #172033;
            --color-text-muted: #4A5870;
            --color-text-dim: #71829D;
            --color-accent-cyan: #0284C7;
            --color-accent-cyan-muted: #087FA8;
            --color-accent-violet: #6855C5;
            --color-card-bg: linear-gradient(180deg, rgba(255, 255, 255, 0.96) 0%, rgba(244, 247, 252, 0.98) 100%);
            --color-card-border: rgba(36, 56, 90, 0.14);
            --color-card-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.12), 0 0 30px -5px rgba(2, 132, 199, 0.06);
            --color-input-bg: rgba(255, 255, 255, 0.90);
            --color-input-border: rgba(203, 213, 225, 0.9);
            --color-btn-bg: #172033;
            --color-btn-text: #FFFFFF;
            --bg-radial-1: rgba(2, 132, 199, 0.08);
            --bg-radial-2: rgba(99, 102, 241, 0.05);
        }

        body {
            background-color: var(--color-bg-base);
            color: var(--color-text-primary);
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-image: 
                radial-gradient(circle at 50% 10%, var(--bg-radial-1) 0%, transparent 45%),
                radial-gradient(circle at 80% 85%, var(--bg-radial-2) 0%, transparent 40%);
            transition: background-color 0.25s ease, color 0.25s ease;
        }
        .login-card {
            background: var(--color-card-bg);
            border: 1px solid var(--color-card-border);
            box-shadow: var(--color-card-shadow);
            backdrop-filter: blur(20px);
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
                <div class="w-11 h-11 rounded-xl bg-white p-2 flex items-center justify-center shadow-lg border border-night-border group-hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/oxid-logo.png') }}" alt="OXID Labs" class="w-full h-full object-contain">
                </div>
                <div class="text-left">
                    <span class="font-display font-extrabold text-2xl tracking-wider text-night-text block leading-none">
                        OXID<span class="text-night-dim font-light">LABS</span>
                    </span>
                    <span class="text-[9px] font-mono uppercase tracking-[0.25em] text-night-cyan font-semibold block mt-1">
                        Control Gateway
                    </span>
                </div>
            </a>
        </div>

        <!-- Login Card -->
        <div class="login-card p-8 sm:p-10 rounded-2xl">
            <div class="mb-7">
                <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-night-cyan text-[10px] font-mono uppercase tracking-wider mb-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-night-cyan animate-pulse"></span>
                    Restricted Area
                </div>
                <h1 class="text-xl font-display font-bold text-night-text uppercase tracking-tight">Admin Console Access</h1>
                <p class="text-xs text-night-muted mt-1.5 leading-relaxed">Authenticate administrative credentials to manage studio systems and catalog deployments.</p>
            </div>

            <!-- Error Notifications -->
            @if ($errors->any())
                <div class="mb-6 p-4 rounded-xl bg-rose-500/10 border border-rose-500/30 text-rose-500 dark:text-rose-300 text-xs flex items-start gap-3" role="alert">
                    <svg class="w-4 h-4 text-rose-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <div>
                        <span class="font-semibold block font-mono text-[11px] uppercase tracking-wider text-rose-400">Authentication Failed</span>
                        <span class="text-xs mt-0.5 block">{{ $errors->first() }}</span>
                    </div>
                </div>
            @endif

            @if (session('info'))
                <div class="mb-6 p-4 rounded-xl bg-cyan-500/10 border border-cyan-500/30 text-night-cyan text-xs flex items-center gap-2">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{ session('info') }}</span>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST" class="space-y-5" autocomplete="on">
                @csrf

                <!-- Email Input (Strictly empty on fresh load, preserves old input on validation failure) -->
                <div class="space-y-1.5">
                    <label for="email" class="block text-xs font-mono uppercase tracking-wider text-night-muted">
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
                        class="w-full bg-[var(--color-input-bg)] border border-[var(--color-input-border)] rounded-xl px-4 py-3 text-sm text-night-text placeholder-night-dim focus:outline-none focus:border-night-cyan focus:ring-1 focus:ring-night-cyan/30 transition-all font-sans"
                    >
                </div>

                <!-- Password Input with Show/Hide Toggle -->
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-xs font-mono uppercase tracking-wider text-night-muted">
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
                            class="w-full bg-[var(--color-input-bg)] border border-[var(--color-input-border)] rounded-xl px-4 py-3 pr-11 text-sm text-night-text placeholder-night-dim focus:outline-none focus:border-night-cyan focus:ring-1 focus:ring-night-cyan/30 transition-all font-sans"
                        >
                        <button 
                            type="button" 
                            id="togglePassword" 
                            aria-label="Toggle password visibility" 
                            class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-night-dim hover:text-night-cyan transition-colors focus:outline-none"
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
                    <label class="flex items-center gap-2.5 text-night-muted cursor-pointer select-none group">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded bg-[var(--color-input-bg)] border-[var(--color-input-border)] text-night-cyan focus:ring-0 focus:ring-offset-0 cursor-pointer">
                        <span class="group-hover:text-night-text transition-colors">Retain Session</span>
                    </label>
                    <span class="text-[11px] font-mono text-night-dim flex items-center gap-1.5">
                        <svg class="w-3 h-3 text-night-cyan/80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        TLS Protected
                    </span>
                </div>

                <button 
                    type="submit" 
                    id="submitBtn"
                    class="w-full py-3.5 rounded-xl font-semibold text-xs uppercase tracking-wider transition-all duration-300 flex items-center justify-center gap-2 group cursor-pointer shadow-lg hover:opacity-90"
                    style="background-color: var(--color-btn-bg); color: var(--color-btn-text); border: 1px solid var(--color-card-border);"
                >
                    <span>Authenticate Access</span>
                    <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </form>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('home') }}" class="text-xs text-night-dim hover:text-night-cyan transition-colors font-mono inline-flex items-center gap-1.5">
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
