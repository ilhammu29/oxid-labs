@props([
    'variant' => 'default', // 'default', 'compact', 'admin'
])

<button type="button" 
        class="theme-toggle-btn inline-flex items-center justify-center rounded-xl transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-night-cyan/40 {{ $variant === 'compact' ? 'w-8 h-8 p-1.5' : 'w-9 h-9 p-2' }} bg-white/[0.05] hover:bg-white/[0.12] text-night-muted hover:text-night-text border border-night-border" 
        aria-label="Switch to light mode" 
        title="Switch to light mode"
        aria-pressed="false">
    <!-- Sun Icon (Rendered in Dark Mode to switch to Light) -->
    <svg class="theme-icon-sun w-4 h-4 text-amber-300 transition-transform duration-300 hover:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
    </svg>
    <!-- Moon Icon (Rendered in Light Mode to switch to Dark) -->
    <svg class="theme-icon-moon w-4 h-4 hidden text-indigo-500 transition-transform duration-300 hover:-rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
    </svg>
</button>
