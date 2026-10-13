/**
 * OXID LABS — Cohesive Motion System & Interface Micro-Interactions
 *
 * Implements:
 * 1. IntersectionObserver-driven scroll reveals with staggered delays
 * 2. Tactile pointer spotlight (--mouse-x, --mouse-y) and subtle 3D perspective tilt on cards
 * 3. Mobile touch isolation (no hover locks, automatic fallback)
 * 4. Respect for `prefers-reduced-motion`
 * 5. Smooth modal transitions
 */
(function() {
    'use strict';

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isTouch = window.matchMedia('(pointer: coarse)').matches || ('ontouchstart' in window);

    // =========================================================================
    // 1. INTERSECTION OBSERVER SCROLL REVEALS
    // =========================================================================
    function initScrollReveals() {
        const revealElements = document.querySelectorAll('.reveal-init');
        if (!revealElements.length) return;

        if (prefersReducedMotion || !('IntersectionObserver' in window)) {
            revealElements.forEach(el => el.classList.add('reveal-active'));
            return;
        }

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal-active');
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.01,
            rootMargin: '0px 0px 60px 0px'
        });

        revealElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight + 60) {
                el.classList.add('reveal-active');
            } else {
                observer.observe(el);
            }
        });
    }

    // =========================================================================
    // 2. ADVANCED TACTILE CARD INTERACTIONS (SPOTLIGHT + SUBTLE 3D TILT)
    // =========================================================================
    function initCardInteractions() {
        if (prefersReducedMotion || isTouch) return;

        const cards = document.querySelectorAll('.night-card');
        cards.forEach(card => {
            // Avoid tilt on full-screen modal or dialog containers
            if (card.id === 'modal-card' || card.closest('#project-modal')) return;

            let rafId = null;
            let bounds = null;

            card.addEventListener('mouseenter', () => {
                bounds = card.getBoundingClientRect();
                card.style.transition = 'transform 0.15s ease-out, border-color 0.25s ease, box-shadow 0.25s ease';
            });

            card.addEventListener('mousemove', (e) => {
                if (!bounds) bounds = card.getBoundingClientRect();
                const x = e.clientX - bounds.left;
                const y = e.clientY - bounds.top;

                // Update CSS variables for radial spotlight
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);

                // Subtle clamped perspective tilt (max ~3.5 degrees)
                const percentX = (x / bounds.width) - 0.5;
                const percentY = (y / bounds.height) - 0.5;
                const tiltX = Math.max(-3.5, Math.min(3.5, percentY * -7.0));
                const tiltY = Math.max(-3.5, Math.min(3.5, percentX * 7.0));

                if (rafId) cancelAnimationFrame(rafId);
                rafId = requestAnimationFrame(() => {
                    card.style.transform = `perspective(1000px) rotateX(${tiltX.toFixed(2)}deg) rotateY(${tiltY.toFixed(2)}deg) scale3d(1.012, 1.012, 1.012)`;
                });
            });

            card.addEventListener('mouseleave', () => {
                if (rafId) cancelAnimationFrame(rafId);
                card.style.transition = 'transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s ease, box-shadow 0.25s ease';
                card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
                card.style.setProperty('--mouse-x', '-999px');
                card.style.setProperty('--mouse-y', '-999px');
                bounds = null;
            });
        });
    }

    // =========================================================================
    // 3. SMOOTH MODAL ENTRANCE & EXIT ANIMATION HOOKS
    // =========================================================================
    function enhanceModalAnimation() {
        const modal = document.getElementById('project-modal');
        const modalCard = document.getElementById('modal-card');
        if (!modal || !modalCard) return;

        // Store original close function if present
        const originalClose = window.closeProjectModal;

        window.animateOpenModal = function() {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            if (prefersReducedMotion) {
                modal.classList.add('modal-visible');
                modalCard.classList.add('card-visible');
                return;
            }

            // Trigger reflow for smooth CSS transitions
            modal.classList.remove('modal-visible');
            modalCard.classList.remove('card-visible');
            void modal.offsetWidth;

            modal.classList.add('modal-visible');
            modalCard.classList.add('card-visible');
        };

        window.animateCloseModal = function(callback) {
            if (prefersReducedMotion) {
                modal.classList.remove('modal-visible');
                modalCard.classList.remove('card-visible');
                modal.classList.add('hidden');
                document.body.style.overflow = '';
                if (typeof callback === 'function') callback();
                return;
            }

            modal.classList.remove('modal-visible');
            modalCard.classList.remove('card-visible');

            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
                if (typeof callback === 'function') callback();
            }, 200);
        };
    }

    // Initialize all motion modules when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            initScrollReveals();
            initCardInteractions();
            enhanceModalAnimation();
        });
    } else {
        initScrollReveals();
        initCardInteractions();
        enhanceModalAnimation();
    }
})();
