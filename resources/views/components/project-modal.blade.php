<!-- Global Project Showcase Modal (Two-Column Editorial Interface) -->
<div id="project-modal" 
     class="fixed inset-0 z-50 hidden bg-night-base/80 backdrop-blur-md flex items-center justify-center p-3 sm:p-5 md:p-6 lg:p-8" 
     role="dialog" 
     aria-modal="true" 
     aria-labelledby="modal-project-title">

    <div id="modal-card" class="night-card w-full max-w-5xl lg:max-w-6xl max-h-[92vh] sm:max-h-[88vh] rounded-2xl border border-night-border shadow-2xl flex flex-col overflow-hidden bg-night-surface relative">
        
        <!-- Compact Sticky Header Bar -->
        <div class="flex-shrink-0 px-5 sm:px-6 py-3.5 border-b border-night-border/70 flex items-center justify-between bg-night-surface/95 backdrop-blur-sm z-30">
            <div class="flex items-center gap-2.5">
                <span class="w-2 h-2 rounded-full bg-night-cyan shadow-[0_0_8px_rgba(0,229,255,0.6)]"></span>
                <span class="text-xs font-mono uppercase tracking-widest text-night-dim">Project Showcase &bull; Architecture Specification</span>
            </div>
            
            <button type="button" 
                    id="modal-close-header-btn"
                    onclick="closeProjectModal()" 
                    aria-label="Close dialog" 
                    title="Close (Esc)"
                    class="w-8 h-8 rounded-lg bg-white/[0.04] hover:bg-white/[0.08] border border-night-border text-night-muted hover:text-night-text flex items-center justify-center transition-all focus:outline-none focus:ring-1 focus:ring-night-cyan">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Dynamic Modal Body: Two-Column Showcase Composition on Desktop, Stacked on Mobile -->
        <div id="modal-showcase-container" class="flex-1 min-h-0 flex flex-col lg:flex-row overflow-hidden relative">
            
            <!-- Loading State Placeholder -->
            <div id="modal-loading-state" class="w-full flex-1 flex flex-col items-center justify-center py-24 text-center font-mono text-xs text-night-dim">
                <svg class="w-6 h-6 animate-spin mx-auto mb-3 text-night-cyan" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                </svg>
                <span>RETRIEVING SYSTEM ARCHITECTURE & MEDIA GALLERY...</span>
            </div>

            <!-- Left Column: Interactive Project Media Gallery (~58% width on desktop) -->
            <section id="modal-gallery-column" 
                     class="hidden lg:w-[58%] w-full flex flex-col bg-night-base/80 border-b lg:border-b-0 lg:border-r border-night-border/70 relative select-none"
                     aria-label="Project media gallery">

                <!-- Primary Media Viewport -->
                <div id="gallery-viewport" class="flex-1 relative flex items-center justify-center p-3 sm:p-5 overflow-hidden min-h-[260px] sm:min-h-[340px] lg:min-h-[420px]">
                    
                    <!-- Media Render Slot -->
                    <div id="gallery-active-content" class="w-full h-full flex items-center justify-center">
                        <!-- Dynamic Image / Video / Fallback injected here -->
                    </div>

                    <!-- Overlay Badge: Slide Counter -->
                    <div id="gallery-counter" class="absolute top-4 left-4 z-20 px-2.5 py-1 rounded bg-night-base/85 backdrop-blur-md border border-night-border text-[11px] font-mono text-night-muted shadow-sm">
                        01 / 01
                    </div>

                    <!-- Overlay Badge: Video Demonstration Indicator -->
                    <div id="gallery-video-badge" class="absolute top-4 right-4 z-20 hidden px-2.5 py-1 rounded bg-cyan-950/90 backdrop-blur-md border border-cyan-500/30 text-[10px] font-mono text-night-cyan uppercase tracking-wider flex items-center gap-1.5 shadow-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-night-cyan animate-pulse"></span>
                        <span>Video Demo</span>
                    </div>

                    <!-- Previous Slide Button -->
                    <button type="button" 
                            id="gallery-prev-btn" 
                            onclick="navigateGallerySlide(-1)" 
                            aria-label="Previous media slide"
                            class="absolute left-3 top-1/2 -translate-y-1/2 z-20 w-9 h-9 rounded-full bg-night-base/80 hover:bg-night-base backdrop-blur-md border border-night-border text-night-muted hover:text-night-text flex items-center justify-center transition-all shadow-lg hover:scale-105 focus:outline-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>

                    <!-- Next Slide Button -->
                    <button type="button" 
                            id="gallery-next-btn" 
                            onclick="navigateGallerySlide(1)" 
                            aria-label="Next media slide"
                            class="absolute right-3 top-1/2 -translate-y-1/2 z-20 w-9 h-9 rounded-full bg-night-base/80 hover:bg-night-base backdrop-blur-md border border-night-border text-night-muted hover:text-night-text flex items-center justify-center transition-all shadow-lg hover:scale-105 focus:outline-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>

                <!-- Sub-strip Caption Bar -->
                <div id="gallery-caption-bar" class="px-5 py-2 border-t border-night-border/40 bg-night-base/60 text-[11px] font-mono text-night-dim flex items-center justify-between gap-4">
                    <span id="gallery-caption-text" class="truncate">Architecture Overview</span>
                    <span class="hidden sm:inline-block text-[10px] text-night-dim/70 font-mono">Use &larr; &rarr; keys to browse</span>
                </div>

                <!-- Thumbnail Navigation Strip (Shown only when 2+ items exist) -->
                <div id="gallery-thumbnail-strip" class="px-4 py-2.5 border-t border-night-border/60 bg-night-base/95 flex items-center gap-2 overflow-x-auto z-10 custom-scrollbar">
                    <!-- Thumbnails injected here -->
                </div>
            </section>

            <!-- Right Column: Project Information & Case Study Details (~42% width on desktop) -->
            <section id="modal-info-column" 
                     class="hidden lg:w-[42%] w-full flex flex-col bg-night-surface overflow-hidden"
                     aria-label="Project details and specification">
                
                <!-- Scrollable Information Body (Independently scrolls on desktop) -->
                <div id="modal-info-scroll-body" class="flex-1 overflow-y-auto p-6 sm:p-7 space-y-6 overscroll-contain custom-scrollbar">
                    
                    <!-- 1. Category & Context Metadata Header -->
                    <div class="space-y-2">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <span id="modal-info-category" class="px-2.5 py-0.5 rounded bg-white/[0.04] border border-night-border font-mono text-[10px] text-night-cyan-muted uppercase tracking-wider font-semibold">
                                Category
                            </span>
                            <span id="modal-info-meta" class="font-mono text-xs text-night-dim">
                                2026 &bull; Studio Lab
                            </span>
                        </div>

                        <!-- 2. Project Title -->
                        <h2 id="modal-project-title" class="text-2xl sm:text-3xl font-sans font-bold text-night-text tracking-tight leading-snug">
                            Project Title
                        </h2>

                        <!-- 3. Short Executive Overview -->
                        <p id="modal-info-summary" class="text-xs sm:text-sm text-night-muted leading-relaxed font-normal pt-1">
                            Executive summary overview.
                        </p>
                    </div>

                    <!-- 4. Problem & Architectural Purpose -->
                    <div id="modal-info-architecture-box" class="p-5 rounded-xl bg-night-base/80 border border-night-border/80 space-y-2">
                        <span class="block font-mono text-[11px] text-night-cyan-muted uppercase tracking-wider font-semibold">
                            System Architecture & Objectives
                        </span>
                        <div id="modal-info-description" class="text-xs sm:text-sm text-night-muted leading-relaxed whitespace-pre-line">
                            Description text.
                        </div>
                    </div>

                    <!-- 5. Key System Capabilities / Highlights -->
                    <div id="modal-info-features-box" class="space-y-2 pt-1 hidden">
                        <span class="block font-mono text-[11px] text-night-dim uppercase tracking-wider font-medium">
                            Core Capabilities & Design Highlights
                        </span>
                        <ul id="modal-info-features-list" class="space-y-1.5 text-xs text-night-muted font-sans">
                            <!-- Injected list items -->
                        </ul>
                    </div>

                    <!-- 6. Technology Stack & Infrastructure Protocols -->
                    <div id="modal-info-tech-box" class="space-y-2 pt-1">
                        <span class="block font-mono text-[11px] text-night-dim uppercase tracking-wider font-medium">
                            Technology Stack & Infrastructure
                        </span>
                        <div id="modal-info-tech-tags" class="flex flex-wrap gap-1.5">
                            <!-- Injected tech tags -->
                        </div>
                    </div>

                </div>

                <!-- Sticky Action Footer Bar (Anchored in right column) -->
                <div id="modal-action-footer" class="flex-shrink-0 px-6 py-4 border-t border-night-border/70 bg-night-surface/95 backdrop-blur-sm flex items-center justify-between gap-3 z-20">
                    <div id="modal-action-links" class="flex flex-wrap items-center gap-2.5">
                        <!-- Dynamic Live Demo / View Repository injected here -->
                    </div>
                    <button type="button" 
                            onclick="closeProjectModal()" 
                            class="px-4 py-2 rounded-lg text-xs font-mono text-night-muted hover:text-night-text bg-white/[0.04] hover:bg-white/[0.08] border border-night-border transition-colors">
                        Close
                    </button>
                </div>

            </section>

        </div>

    </div>
</div>

<script>
    (function() {
        const modal = document.getElementById('project-modal');
        const loadingState = document.getElementById('modal-loading-state');
        const galleryCol = document.getElementById('modal-gallery-column');
        const infoCol = document.getElementById('modal-info-column');
        
        // Gallery Elements
        const activeContent = document.getElementById('gallery-active-content');
        const counterBadge = document.getElementById('gallery-counter');
        const videoBadge = document.getElementById('gallery-video-badge');
        const prevBtn = document.getElementById('gallery-prev-btn');
        const nextBtn = document.getElementById('gallery-next-btn');
        const captionText = document.getElementById('gallery-caption-text');
        const thumbStrip = document.getElementById('gallery-thumbnail-strip');

        // Info Elements
        const infoCategory = document.getElementById('modal-info-category');
        const infoMeta = document.getElementById('modal-info-meta');
        const infoTitle = document.getElementById('modal-project-title');
        const infoSummary = document.getElementById('modal-info-summary');
        const infoDesc = document.getElementById('modal-info-description');
        const featuresBox = document.getElementById('modal-info-features-box');
        const featuresList = document.getElementById('modal-info-features-list');
        const techBox = document.getElementById('modal-info-tech-box');
        const techTags = document.getElementById('modal-info-tech-tags');
        const actionLinks = document.getElementById('modal-action-links');

        // Gallery State
        let currentProjectData = null;
        let currentMediaList = [];
        let activeSlideIndex = 0;
        let lastFocusedElement = null;

        /**
         * Open modal for specified project slug.
         */
        window.openProjectModal = function(slug) {
            if (!modal) return;
            
            lastFocusedElement = document.activeElement;
            if (typeof window.animateOpenModal === 'function') {
                window.animateOpenModal();
            } else {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            // Show loading, hide columns
            if (loadingState) loadingState.classList.remove('hidden');
            if (galleryCol) galleryCol.classList.add('hidden');
            if (infoCol) infoCol.classList.add('hidden');

            fetch(`/api/projects/${slug}`)
                .then(res => res.json())
                .then(data => {
                    if (data.success && data.project) {
                        currentProjectData = data.project;
                        populateModalContent(data.project);
                    } else {
                        showModalError('PROJECT SPECIFICATION NOT FOUND.');
                    }
                })
                .catch(() => {
                    showModalError('FAILED TO RETRIEVE SPECIFICATIONS. PLEASE RETRY.');
                });
        };

        /**
         * Populate project data into gallery and information column.
         */
        function populateModalContent(p) {
            if (!loadingState || !galleryCol || !infoCol) return;

            loadingState.classList.add('hidden');
            galleryCol.classList.remove('hidden');
            infoCol.classList.remove('hidden');

            // 1. Setup Media Gallery Data
            currentMediaList = Array.isArray(p.media) && p.media.length > 0 
                ? p.media 
                : (p.thumbnail_url ? [{ type: 'image', url: p.thumbnail_url, thumb_url: p.thumbnail_url, caption: 'Primary Overview' }] : []);
            
            activeSlideIndex = 0;
            renderGallerySlide(activeSlideIndex);
            renderThumbnailStrip();

            // 2. Setup Information Panel
            if (infoCategory) infoCategory.textContent = p.category || 'System Architecture';
            if (infoMeta) infoMeta.textContent = `${p.year || '2026'} • ${p.client_name || 'Studio Lab'}`;
            if (infoTitle) infoTitle.textContent = p.title || 'Untitled Project';
            if (infoSummary) infoSummary.textContent = p.summary || '';
            if (infoDesc) infoDesc.textContent = p.description || p.summary || 'Architecture specifications maintained by OXID Labs.';

            // 3. Extract & Render Key Features if description has multiple paragraphs or bullets
            if (featuresBox && featuresList) {
                const desc = p.description || '';
                const lines = desc.split('\n').filter(l => l.trim().length > 0);
                
                // If description has multiple paragraphs, format subsequent ones as capabilities
                if (lines.length > 1) {
                    featuresBox.classList.remove('hidden');
                    featuresList.innerHTML = lines.slice(1).map(line => `
                        <li class="flex items-start gap-2">
                            <span class="text-night-cyan mt-1 select-none">&bull;</span>
                            <span class="leading-relaxed">${line.trim()}</span>
                        </li>
                    `).join('');
                } else {
                    featuresBox.classList.add('hidden');
                    featuresList.innerHTML = '';
                }
            }

            // 4. Technology Stack Tags
            if (techTags) {
                if (Array.isArray(p.tech_stack) && p.tech_stack.length > 0) {
                    techBox.classList.remove('hidden');
                    techTags.innerHTML = p.tech_stack.map(tag => `
                        <span class="px-2.5 py-1 rounded font-mono text-[11px] bg-white/[0.04] text-night-muted border border-night-border/80">
                            ${tag}
                        </span>
                    `).join('');
                } else {
                    techBox.classList.add('hidden');
                    techTags.innerHTML = '';
                }
            }

            // 5. Action Links (Only render valid, supported links)
            if (actionLinks) {
                let linksHtml = '';
                if (p.demo_url) {
                    linksHtml += `
                        <a href="${p.demo_url}" target="_blank" rel="noopener noreferrer" 
                           class="px-4 py-2 rounded-lg btn-night-primary text-xs font-semibold inline-flex items-center gap-1.5 shadow-sm">
                            <span>Live Demo</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                    `;
                }
                if (p.github_url) {
                    linksHtml += `
                        <a href="${p.github_url}" target="_blank" rel="noopener noreferrer" 
                           class="px-4 py-2 rounded-lg btn-night-secondary text-xs font-medium inline-flex items-center gap-1.5">
                            <span>View Repository</span>
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                            </svg>
                        </a>
                    `;
                }
                actionLinks.innerHTML = linksHtml;
            }

            // Scroll info panel back to top
            const infoScrollBody = document.getElementById('modal-info-scroll-body');
            if (infoScrollBody) infoScrollBody.scrollTop = 0;
        }

        /**
         * Render active media item in main viewer.
         */
        function renderGallerySlide(index) {
            if (!activeContent) return;

            // Stop/pause any previously playing video
            pauseActiveVideo();

            const total = currentMediaList.length;

            // Handle Case: Zero media available
            if (total === 0) {
                if (counterBadge) counterBadge.classList.add('hidden');
                if (videoBadge) videoBadge.classList.add('hidden');
                if (prevBtn) prevBtn.classList.add('hidden');
                if (nextBtn) nextBtn.classList.add('hidden');
                if (captionText) captionText.textContent = 'Proprietary System — Visual Data Pending';

                activeContent.innerHTML = `
                    <div class="py-16 px-6 text-center space-y-3 font-mono">
                        <div class="w-12 h-12 mx-auto rounded-xl bg-white/[0.04] border border-night-border flex items-center justify-center text-night-dim">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="text-xs text-night-dim uppercase tracking-wider">[NO_VISUAL_TELEMETRY_LOGGED]</div>
                        <p class="text-[11px] text-night-dim/80 max-w-xs mx-auto">Proprietary Core System — Visual artifacts restricted or currently pending documentation release.</p>
                    </div>
                `;
                return;
            }

            // Keep index in valid range
            activeSlideIndex = (index + total) % total;
            const item = currentMediaList[activeSlideIndex];

            // Counter Badge
            if (counterBadge) {
                counterBadge.classList.remove('hidden');
                const currStr = String(activeSlideIndex + 1).padStart(2, '0');
                const totalStr = String(total).padStart(2, '0');
                counterBadge.textContent = `${currStr} / ${totalStr}`;
            }

            // Previous/Next visibility (hide if single item)
            if (prevBtn) prevBtn.classList.toggle('hidden', total <= 1);
            if (nextBtn) nextBtn.classList.toggle('hidden', total <= 1);

            // Caption Text
            if (captionText) {
                captionText.textContent = item.caption || item.title || `Media Asset #${activeSlideIndex + 1}`;
            }

            // Render Media Type
            if (item.type === 'video') {
                if (videoBadge) videoBadge.classList.remove('hidden');
                activeContent.innerHTML = `
                    <div class="w-full h-full flex items-center justify-center relative p-1 sm:p-2">
                        <video id="gallery-video-player"
                               controls 
                               playsinline 
                               preload="metadata" 
                               class="max-w-full max-h-[380px] lg:max-h-[460px] object-contain rounded-xl shadow-2xl border border-night-border/40 bg-black">
                            <source src="${item.url}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                `;
            } else {
                if (videoBadge) videoBadge.classList.add('hidden');
                activeContent.innerHTML = `
                    <div class="w-full h-full flex items-center justify-center p-1 sm:p-2">
                        <img src="${item.url}" 
                             alt="${item.title || 'Project showcase view'}" 
                             loading="lazy" 
                             class="max-w-full max-h-[380px] lg:max-h-[460px] object-contain rounded-xl shadow-2xl border border-night-border/40 transition-opacity duration-300">
                    </div>
                `;
            }

            // Update active thumbnail highlight
            updateActiveThumbnail();
        }

        /**
         * Render thumbnail navigation strip.
         */
        function renderThumbnailStrip() {
            if (!thumbStrip) return;

            const total = currentMediaList.length;

            // Only show strip if more than 1 media asset exists
            if (total <= 1) {
                thumbStrip.classList.add('hidden');
                thumbStrip.innerHTML = '';
                return;
            }

            thumbStrip.classList.remove('hidden');
            thumbStrip.innerHTML = currentMediaList.map((item, idx) => `
                <button type="button" 
                        onclick="setGallerySlide(${idx})" 
                        aria-label="View media slide ${idx + 1}" 
                        class="thumb-btn flex-shrink-0 w-16 h-11 sm:w-20 sm:h-12 rounded-lg overflow-hidden border transition-all relative ${idx === activeSlideIndex ? 'border-night-cyan ring-1 ring-night-cyan/60 opacity-100 scale-102' : 'border-night-border/60 opacity-55 hover:opacity-90'}">
                    <img src="${item.thumb_url || item.url}" alt="${item.caption || 'Thumbnail'}" class="w-full h-full object-cover">
                    ${item.type === 'video' ? `
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                            <svg class="w-4 h-4 text-night-cyan drop-shadow" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    ` : ''}
                </button>
            `).join('');
        }

        /**
         * Update active thumbnail styling.
         */
        function updateActiveThumbnail() {
            if (!thumbStrip) return;
            const buttons = thumbStrip.querySelectorAll('.thumb-btn');
            buttons.forEach((btn, idx) => {
                if (idx === activeSlideIndex) {
                    btn.classList.add('border-night-cyan', 'ring-1', 'ring-night-cyan/60', 'opacity-100', 'scale-102');
                    btn.classList.remove('border-night-border/60', 'opacity-55');
                    // Ensure thumbnail is visible in horizontal scroll
                    btn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'nearest' });
                } else {
                    btn.classList.remove('border-night-cyan', 'ring-1', 'ring-night-cyan/60', 'opacity-100', 'scale-102');
                    btn.classList.add('border-night-border/60', 'opacity-55');
                }
            });
        }

        /**
         * Gallery slide step (+1 or -1).
         */
        window.navigateGallerySlide = function(direction) {
            renderGallerySlide(activeSlideIndex + direction);
        };

        /**
         * Set gallery slide directly by index.
         */
        window.setGallerySlide = function(index) {
            renderGallerySlide(index);
        };

        /**
         * Pause any active playing video.
         */
        function pauseActiveVideo() {
            const video = document.getElementById('gallery-video-player');
            if (video) {
                video.pause();
                video.currentTime = 0;
            }
        }

        /**
         * Show error message in modal.
         */
        function showModalError(msg) {
            if (!loadingState) return;
            loadingState.classList.remove('hidden');
            if (galleryCol) galleryCol.classList.add('hidden');
            if (infoCol) infoCol.classList.add('hidden');
            loadingState.innerHTML = `
                <div class="py-20 text-center font-mono text-xs text-rose-400">
                    ${msg}
                </div>
            `;
        }

        /**
         * Close modal and restore state.
         */
        window.closeProjectModal = function() {
            if (!modal) return;
            pauseActiveVideo();

            const finishClose = () => {
                // Return focus to trigger button
                if (lastFocusedElement && typeof lastFocusedElement.focus === 'function') {
                    lastFocusedElement.focus();
                }
            };

            if (typeof window.animateCloseModal === 'function') {
                window.animateCloseModal(finishClose);
            } else {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
                finishClose();
            }
        };

        // Keyboard & Backdrop Event Listeners
        if (modal) {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) window.closeProjectModal();
            });
        }

        document.addEventListener('keydown', (e) => {
            if (!modal || modal.classList.contains('hidden')) return;

            if (e.key === 'Escape') {
                window.closeProjectModal();
            } else if (e.key === 'ArrowLeft') {
                if (currentMediaList.length > 1) {
                    window.navigateGallerySlide(-1);
                }
            } else if (e.key === 'ArrowRight') {
                if (currentMediaList.length > 1) {
                    window.navigateGallerySlide(1);
                }
            }
        });
    })();
</script>
