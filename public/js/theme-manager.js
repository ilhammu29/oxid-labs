/**
 * OXID LABS — Centralized Theme System Architecture
 *
 * Provides a production-grade, flicker-free dark and light mode system:
 * - Priority: 1. User explicit choice (localStorage) -> 2. System preference (prefers-color-scheme) -> 3. Default ('dark')
 * - Real-time synchronization across DOM, Three.js canvas, and multi-tab storage events
 * - Accessible controls with dynamic ARIA attributes and SVGs
 * - Event dispatching: 'oxid-theme-changed' with detail { theme: 'dark' | 'light' }
 */
(function () {
    'use strict';

    const STORAGE_KEY = 'oxid_theme';
    const THEME_ATTR = 'data-theme';

    /**
     * Resolve the active theme based on user choice or system preference.
     */
    function resolveTheme() {
        try {
            const stored = localStorage.getItem(STORAGE_KEY);
            if (stored === 'light' || stored === 'dark') {
                return stored;
            }
        } catch (e) {
            // LocalStorage might be restricted
        }

        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
            return 'light';
        }

        return 'dark';
    }

    /**
     * Apply theme to the document and dispatch synchronization events.
     */
    function applyTheme(theme, persist = true) {
        const root = document.documentElement;
        const currentTheme = root.getAttribute(THEME_ATTR);

        // Update root attributes and classes
        root.setAttribute(THEME_ATTR, theme);
        if (theme === 'light') {
            root.classList.add('theme-light');
            root.classList.remove('theme-dark');
        } else {
            root.classList.add('theme-dark');
            root.classList.remove('theme-light');
        }

        // Color-scheme meta tag update
        let metaColorScheme = document.querySelector('meta[name="color-scheme"]');
        if (!metaColorScheme) {
            metaColorScheme = document.createElement('meta');
            metaColorScheme.name = 'color-scheme';
            document.head.appendChild(metaColorScheme);
        }
        metaColorScheme.content = theme === 'light' ? 'light dark' : 'dark light';

        // Persist choice if requested
        if (persist) {
            try {
                localStorage.setItem(STORAGE_KEY, theme);
                // Also store cookie for server-side awareness if needed (1 year)
                document.cookie = `${STORAGE_KEY}=${theme};path=/;max-age=31536000;SameSite=Lax`;
            } catch (e) {
                // Ignore storage restrictions
            }
        }

        // Update all theme toggle buttons across the DOM
        updateToggleButtons(theme);

        // Notify Three.js and custom listeners if theme changed or on init
        window.dispatchEvent(new CustomEvent('oxid-theme-changed', {
            detail: { theme: theme, previousTheme: currentTheme }
        }));
    }

    /**
     * Update all DOM toggle buttons with proper SVGs, tooltips, and ARIA attributes.
     */
    function updateToggleButtons(theme) {
        const toggles = document.querySelectorAll('.theme-toggle-btn');
        toggles.forEach(btn => {
            const isLight = theme === 'light';
            const nextTheme = isLight ? 'dark' : 'light';
            const label = `Switch to ${nextTheme} mode`;

            btn.setAttribute('aria-label', label);
            btn.setAttribute('title', label);
            btn.setAttribute('aria-pressed', isLight ? 'true' : 'false');

            // Find sun and moon icon elements inside button
            const sunIcon = btn.querySelector('.theme-icon-sun');
            const moonIcon = btn.querySelector('.theme-icon-moon');
            const statusLabel = btn.querySelector('.theme-toggle-status');

            if (sunIcon && moonIcon) {
                if (isLight) {
                    // Light mode is active: show Moon icon (action: switch to dark)
                    sunIcon.classList.add('hidden');
                    moonIcon.classList.remove('hidden');
                } else {
                    // Dark mode is active: show Sun icon (action: switch to light)
                    sunIcon.classList.remove('hidden');
                    moonIcon.classList.add('hidden');
                }
            }

            if (statusLabel) {
                statusLabel.textContent = isLight ? 'Light' : 'Dark';
            }
        });
    }

    /**
     * Toggle between dark and light themes.
     */
    function toggleTheme() {
        const current = document.documentElement.getAttribute(THEME_ATTR) || resolveTheme();
        const next = current === 'light' ? 'dark' : 'light';
        applyTheme(next, true);
        return next;
    }

    // Initialize early
    const initialTheme = resolveTheme();
    applyTheme(initialTheme, false);

    // Document ready handler to bind clicks and initial button states
    function onReady() {
        updateToggleButtons(document.documentElement.getAttribute(THEME_ATTR) || initialTheme);

        // Delegate click for any theme toggle buttons
        document.addEventListener('click', (e) => {
            const toggle = e.target.closest('.theme-toggle-btn');
            if (toggle) {
                e.preventDefault();
                toggleTheme();
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', onReady);
    } else {
        onReady();
    }

    // Listen for system theme changes if user hasn't set an explicit preference
    if (window.matchMedia) {
        const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
        mediaQuery.addEventListener('change', (e) => {
            try {
                const stored = localStorage.getItem(STORAGE_KEY);
                if (!stored) {
                    applyTheme(e.matches ? 'dark' : 'light', false);
                }
            } catch (err) {}
        });
    }

    // Sync across browser tabs
    window.addEventListener('storage', (e) => {
        if (e.key === STORAGE_KEY && e.newValue) {
            applyTheme(e.newValue, false);
        }
    });

    // Expose Global Public Theme API
    window.OxidTheme = {
        getTheme: function () {
            return document.documentElement.getAttribute(THEME_ATTR) || resolveTheme();
        },
        setTheme: function (theme) {
            applyTheme(theme, true);
        },
        toggleTheme: toggleTheme
    };
})();
