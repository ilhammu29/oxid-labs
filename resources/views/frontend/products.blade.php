@extends('layouts.app')

@section('title', 'Katalog Produk & Portofolio Digital — OXID LABS')
@section('meta_description', 'Eksplorasi marketplace produk website, platform SaaS, dan portofolio solusi digital yang dikembangkan oleh OXID Labs dengan standar performa tinggi, harga promo, dan garansi kualitas.')

@section('content')
    <!-- ========================================================================= -->
    <!-- TOP TRUST NOTICE BAR (STYLE GERAIKITA)                                     -->
    <!-- ========================================================================= -->
    <div class="border-b border-night-border bg-night-midnight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs">
            <div class="flex items-center gap-2 text-night-muted font-medium">
                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <span>Setiap proyek dilindungi jaminan kualitas &mdash; Garansi support teknis hingga 30 hari &amp; pengerjaan tepat waktu.</span>
            </div>
            <div class="flex items-center gap-3 text-night-dim text-[11px] font-mono">
                <span class="hidden md:inline">Saluran Resmi:</span>
                <a href="https://wa.me/6289516885651" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-500 transition-colors">WhatsApp Official</a>
                <span>&bull;</span>
                <a href="https://t.me/oxidlabs" target="_blank" rel="noopener noreferrer" class="hover:text-sky-500 transition-colors">Telegram Studio</a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">

        <!-- ========================================================================= -->
        <!-- HERO MARKETPLACE SHOWCASE (2 COLUMNS LAYOUT PERSIS GERAIKITA)             -->
        <!-- ========================================================================= -->
        <section class="reveal-init grid grid-cols-1 lg:grid-cols-12 gap-6 mb-8">
            
            <!-- Left Banner: 3-Slide Carousel Showcase (Pure Banner Art, Minimalist & Modern) -->
            <div class="lg:col-span-8 rounded-2xl sm:rounded-3xl border border-white/10 bg-[#0E0E10] overflow-hidden shadow-xl relative group flex flex-col justify-center min-h-[260px] sm:min-h-[380px] lg:min-h-[480px]">
                <h1 class="sr-only">Software Products &amp; Portofolio Sistem Digital — OXID Labs</h1>

                <!-- Carousel Track Wrapper -->
                <div class="relative w-full h-full overflow-hidden aspect-[1376/768] lg:aspect-auto lg:h-[480px]">
                    <div id="banner-carousel-track" class="flex w-full h-full transition-transform duration-500 ease-out">
                        <!-- Slide 1 -->
                        <div class="w-full h-full flex-shrink-0 relative">
                            <a href="#products-list" class="block w-full h-full cursor-pointer focus:outline-none" aria-label="Lihat Software Products dan Solusi Digital">
                                <img src="{{ asset('images/banners/banner_1.jpg') }}" 
                                     alt="OXID Labs - Build Your Digital Future - Software Products" 
                                     class="w-full h-full object-cover select-none"
                                     loading="eager">
                            </a>
                        </div>
                        <!-- Slide 2 -->
                        <div class="w-full h-full flex-shrink-0 relative">
                            <a href="#products-list" class="block w-full h-full cursor-pointer focus:outline-none" aria-label="Lihat Produk Digital dan Inovasi SaaS">
                                <img src="{{ asset('images/banners/banner_2.jpg') }}" 
                                     alt="OXID Labs - Ideas Into Reality - Web &amp; SaaS Software Products" 
                                     class="w-full h-full object-cover select-none"
                                     loading="lazy">
                            </a>
                        </div>
                        <!-- Slide 3 -->
                        <div class="w-full h-full flex-shrink-0 relative">
                            <a href="#products-list" class="block w-full h-full cursor-pointer focus:outline-none" aria-label="Lihat Portofolio Teknologi dan Produk Digital">
                                <img src="{{ asset('images/banners/banner_3.jpg') }}" 
                                     alt="OXID Labs - Your Ideas, Our Technology - Digital Frontier Software Products" 
                                     class="w-full h-full object-cover select-none"
                                     loading="lazy">
                            </a>
                        </div>
                    </div>

                    <!-- Previous Navigation Button -->
                    <button type="button" 
                            id="banner-carousel-prev" 
                            aria-label="Banner sebelumnya" 
                            class="absolute left-3 sm:left-4 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-black/60 hover:bg-black/90 text-white backdrop-blur-md border border-white/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-xl z-20 hover:scale-105 active:scale-95">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>

                    <!-- Next Navigation Button -->
                    <button type="button" 
                            id="banner-carousel-next" 
                            aria-label="Banner berikutnya" 
                            class="absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-black/60 hover:bg-black/90 text-white backdrop-blur-md border border-white/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-xl z-20 hover:scale-105 active:scale-95">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>

                    <!-- Indicators / Pagination Dots -->
                    <div class="absolute bottom-3 sm:bottom-4 left-1/2 -translate-x-1/2 flex items-center gap-2 z-20 px-3 py-1.5 rounded-full bg-black/50 backdrop-blur-md border border-white/15" id="banner-carousel-dots">
                        <button type="button" data-slide="0" aria-label="Slide 1" class="banner-dot w-6 h-2 rounded-full bg-emerald-400 transition-all duration-300 shadow"></button>
                        <button type="button" data-slide="1" aria-label="Slide 2" class="banner-dot w-2 h-2 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300"></button>
                        <button type="button" data-slide="2" aria-label="Slide 3" class="banner-dot w-2 h-2 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300"></button>
                    </div>
                </div>
            </div>

            <!-- Right Column: Flash Sale & Official Channels (Persis Geraikita) -->
            <div class="lg:col-span-4 flex flex-col gap-4">
                
                <!-- Card 1: Flash Sale Card with Live Countdown -->
                <div class="rounded-2xl border border-rose-300 bg-rose-50 p-5 shadow-sm transition-all duration-200 hover:shadow-lg dark:border-rose-500/30 dark:bg-rose-500/10 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between gap-2 mb-2">
                            <span class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-widest text-rose-600 dark:text-rose-400">
                                <svg class="w-3.5 h-3.5 animate-bounce" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/></svg>
                                FLASH SALE
                            </span>
                            <span class="inline-flex items-center gap-1 rounded-md border px-2 py-0.5 text-[10px] font-bold border-rose-300 bg-rose-100 text-rose-700 dark:border-rose-500/30 dark:bg-rose-500/20 dark:text-rose-400 font-mono">
                                &minus;37% OFF
                            </span>
                        </div>

                        <h3 class="text-sm font-extrabold text-slate-900 dark:text-white leading-snug mb-1">
                            Pro Conversion Landing Page Package
                        </h3>
                        <p class="text-xs text-slate-600 dark:text-zinc-400 mb-3">
                            Website landing page responsif lengkap dengan Meta Pixel, Google Analytics &amp; WA CTA.
                        </p>
                    </div>

                    <div class="pt-3 border-t border-rose-200 dark:border-rose-500/20">
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-xs text-slate-500 line-through font-mono">Rp 1.500.000</span>
                            <span class="text-base font-extrabold text-rose-600 dark:text-rose-400 font-mono">Rp 950.000</span>
                        </div>

                        <div class="flex items-center justify-between text-[11px]">
                            <div class="inline-flex items-center gap-1 text-rose-600 dark:text-rose-400 font-mono font-semibold" id="flash-sale-timer">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span>Berakhir: <strong id="flash-countdown" class="tabular-nums">08:42:15</strong></span>
                            </div>

                            <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20ingin%20klaim%20Flash%20Sale%20Landing%20Page%20(Rp%20950.000)" target="_blank" rel="noopener noreferrer" class="px-3 py-1.5 rounded-lg bg-rose-600 text-white font-bold text-[10px] hover:bg-rose-700 transition-colors">
                                Klaim &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Saluran Resmi & Verified Developers (Persis Geraikita) -->
                <div class="rounded-2xl border border-night-border bg-night-surface p-5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <h3 class="text-xs font-bold text-night-text uppercase tracking-wider font-mono">
                                Saluran Resmi &amp; Kontak Studio
                            </h3>
                        </div>
                        <p class="text-[11px] text-night-muted leading-relaxed mb-3">
                            Seluruh transaksi dan konsultasi resmi hanya dilakukan melalui saluran resmi terverifikasi berikut:
                        </p>
                        <ul class="space-y-2 text-xs">
                            <li>
                                <a href="https://wa.me/6289516885651" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-night-text hover:text-emerald-500 transition-colors">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    <span>WhatsApp Official: <strong>+62 895-1688-5651</strong></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://t.me/oxidlabs" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-night-text hover:text-sky-500 transition-colors">
                                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                                    <span>Telegram Channel: <strong>@oxidlabs</strong></span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:oxidteam@oxidlabs.my.id" class="flex items-center gap-2 text-night-text hover:text-purple-500 transition-colors">
                                    <span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>
                                    <span>Email: <strong>oxidteam@oxidlabs.my.id</strong></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </section>

        <!-- ========================================================================= -->
        <!-- 4-GRID TRUST BADGES RIBBON (PERSIS GERAIKITA)                             -->
        <!-- ========================================================================= -->
        <div class="mb-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 p-4 rounded-2xl border border-night-border bg-night-surface shadow-sm">
                
                <div class="flex items-center gap-3 p-2">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-900 dark:text-white flex-shrink-0">
                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-night-text">Garansi Support 30 Hari</div>
                        <div class="text-[11px] text-night-dim">Free penanganan bug pasca live</div>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-2 sm:border-l sm:border-night-border">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-900 dark:text-white flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-night-text">Verified Engineers</div>
                        <div class="text-[11px] text-night-dim">Dikerjakan langsung oleh dev ahli</div>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-2 lg:border-l lg:border-night-border">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-900 dark:text-white flex-shrink-0">
                        <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-night-text">Pengerjaan 1 – 7 Hari</div>
                        <div class="text-[11px] text-night-dim">Deploy tepat waktu bergaransi</div>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-2 sm:border-l sm:border-night-border">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-900 dark:text-white flex-shrink-0">
                        <svg class="w-5 h-5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-night-text">100% Hak Milik Kode</div>
                        <div class="text-[11px] text-night-dim">Tanpa lock-in, source code milik Anda</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- CATEGORIES ICON GRID (8 COLUMNS LAYOUT PERSIS GERAIKITA)                  -->
        <!-- ========================================================================= -->
        <div class="reveal-init mb-12">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <span class="w-1.5 h-5 rounded-full bg-slate-900 dark:bg-white"></span>
                    <h2 class="text-base sm:text-lg font-extrabold text-night-text tracking-tight">
                        Kategori Produk &amp; Layanan
                    </h2>
                </div>
                <span class="text-xs text-night-dim font-mono">Pilih kategori untuk memfilter</span>
            </div>

            <div class="grid grid-cols-4 sm:grid-cols-4 lg:grid-cols-8 gap-2.5 sm:gap-3" id="marketplace-category-tiles">
                
                <!-- Tile 1: Semua Kategori -->
                <button type="button" data-filter="all" class="category-tile active group flex flex-col items-center gap-2 p-3 rounded-2xl bg-night-surface border border-night-border hover:border-slate-800 dark:hover:border-white transition-all text-center">
                    <span class="w-11 h-11 rounded-2xl bg-gradient-to-br from-slate-700 to-zinc-900 flex items-center justify-center text-white shadow-sm transition-transform duration-200 group-hover:scale-110">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    </span>
                    <span class="text-[11px] font-bold text-night-text group-hover:text-black dark:group-hover:text-white line-clamp-1 leading-tight">
                        Semua
                    </span>
                </button>

                <!-- Tile 2: Landing Page -->
                <button type="button" data-filter="landing-page" class="category-tile group flex flex-col items-center gap-2 p-3 rounded-2xl bg-night-surface border border-night-border hover:border-slate-800 dark:hover:border-white transition-all text-center">
                    <span class="w-11 h-11 rounded-2xl bg-gradient-to-br from-rose-500 to-orange-500 flex items-center justify-center text-white shadow-sm transition-transform duration-200 group-hover:scale-110">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </span>
                    <span class="text-[11px] font-bold text-night-text group-hover:text-black dark:group-hover:text-white line-clamp-1 leading-tight">
                        Landing Page
                    </span>
                </button>

                <!-- Tile 3: E-Commerce -->
                <button type="button" data-filter="e-commerce" class="category-tile group flex flex-col items-center gap-2 p-3 rounded-2xl bg-night-surface border border-night-border hover:border-slate-800 dark:hover:border-white transition-all text-center">
                    <span class="w-11 h-11 rounded-2xl bg-gradient-to-br from-fuchsia-500 to-pink-600 flex items-center justify-center text-white shadow-sm transition-transform duration-200 group-hover:scale-110">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    </span>
                    <span class="text-[11px] font-bold text-night-text group-hover:text-black dark:group-hover:text-white line-clamp-1 leading-tight">
                        Toko Online
                    </span>
                </button>

                <!-- Tile 4: Company Profile -->
                <button type="button" data-filter="company-profile" class="category-tile group flex flex-col items-center gap-2 p-3 rounded-2xl bg-night-surface border border-night-border hover:border-slate-800 dark:hover:border-white transition-all text-center">
                    <span class="w-11 h-11 rounded-2xl bg-gradient-to-br from-violet-500 to-purple-600 flex items-center justify-center text-white shadow-sm transition-transform duration-200 group-hover:scale-110">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </span>
                    <span class="text-[11px] font-bold text-night-text group-hover:text-black dark:group-hover:text-white line-clamp-1 leading-tight">
                        Company Profile
                    </span>
                </button>

                <!-- Tile 5: SaaS & Web App -->
                <button type="button" data-filter="saas-platform" class="category-tile group flex flex-col items-center gap-2 p-3 rounded-2xl bg-night-surface border border-night-border hover:border-slate-800 dark:hover:border-white transition-all text-center">
                    <span class="w-11 h-11 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center text-white shadow-sm transition-transform duration-200 group-hover:scale-110">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </span>
                    <span class="text-[11px] font-bold text-night-text group-hover:text-black dark:group-hover:text-white line-clamp-1 leading-tight">
                        SaaS Platform
                    </span>
                </button>

                <!-- Tile 6: Design System & 3D -->
                <button type="button" data-filter="ui-ux-design" class="category-tile group flex flex-col items-center gap-2 p-3 rounded-2xl bg-night-surface border border-night-border hover:border-slate-800 dark:hover:border-white transition-all text-center">
                    <span class="w-11 h-11 rounded-2xl bg-gradient-to-br from-amber-500 to-yellow-600 flex items-center justify-center text-white shadow-sm transition-transform duration-200 group-hover:scale-110">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                    </span>
                    <span class="text-[11px] font-bold text-night-text group-hover:text-black dark:group-hover:text-white line-clamp-1 leading-tight">
                        UI/UX &amp; 3D
                    </span>
                </button>

                <!-- Tile 7: Dashboard Internal -->
                <button type="button" data-filter="web-development" class="category-tile group flex flex-col items-center gap-2 p-3 rounded-2xl bg-night-surface border border-night-border hover:border-slate-800 dark:hover:border-white transition-all text-center">
                    <span class="w-11 h-11 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white shadow-sm transition-transform duration-200 group-hover:scale-110">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </span>
                    <span class="text-[11px] font-bold text-night-text group-hover:text-black dark:group-hover:text-white line-clamp-1 leading-tight">
                        Dashboard
                    </span>
                </button>

                <!-- Tile 8: API & Backend -->
                <button type="button" data-filter="api-service" class="category-tile group flex flex-col items-center gap-2 p-3 rounded-2xl bg-night-surface border border-night-border hover:border-slate-800 dark:hover:border-white transition-all text-center">
                    <span class="w-11 h-11 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white shadow-sm transition-transform duration-200 group-hover:scale-110">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </span>
                    <span class="text-[11px] font-bold text-night-text group-hover:text-black dark:group-hover:text-white line-clamp-1 leading-tight">
                        API &amp; Backend
                    </span>
                </button>

            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- REAL-TIME SEARCH & SORT TOOLBAR (STYLE GERAIKITA)                         -->
        <!-- ========================================================================= -->
        <div id="products-list" class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4 mb-8 p-4 rounded-2xl bg-night-surface border border-night-border">
            
            <!-- Search Input -->
            <div class="relative flex-1 max-w-md">
                <svg class="w-4 h-4 text-night-dim absolute left-3.5 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <input type="text" id="catalog-search" placeholder="Cari nama proyek, kategori, atau teknologi (cth: Laravel, E-Commerce)..." class="w-full bg-night-midnight border border-night-border rounded-xl px-4 py-2.5 pl-10 text-xs text-night-text placeholder-night-dim focus:outline-none focus:border-slate-800 dark:focus:border-white transition-all">
            </div>

            <!-- Sort & Counter -->
            <div class="flex items-center justify-between md:justify-end gap-3 text-xs">
                <span class="text-night-dim font-mono" id="results-count">
                    Menampilkan {{ $projects->count() }} Produk Terverifikasi
                </span>
                
                <select id="catalog-sort" aria-label="Urutkan Katalog" class="bg-night-midnight border border-night-border rounded-xl px-3 py-2 text-xs text-night-text font-semibold focus:outline-none">
                    <option value="featured">Paling Populer</option>
                    <option value="newest">Paling Baru</option>
                    <option value="price-low">Harga Terendah</option>
                    <option value="price-high">Harga Tertinggi</option>
                </select>
            </div>

        </div>

        <!-- ========================================================================= -->
        <!-- MARKETPLACE PRODUCT CARDS GRID (PERSIS GERAIKITA PRODUCT CARD)            -->
        <!-- ========================================================================= -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="projects-grid">
            @forelse($projects as $index => $project)
                @php
                    // Dynamic Realistic Pricing for Marketplace Display
                    $catSlug = Str::slug($project->category ?? 'web-development');
                    if (str_contains($catSlug, 'commerce') || str_contains($catSlug, 'toko')) {
                        $origPrice = 3800000;
                        $promoPrice = 2450000;
                        $discount = '35%';
                        $badge = 'FLASH SALE';
                    } elseif (str_contains($catSlug, 'landing')) {
                        $origPrice = 1500000;
                        $promoPrice = 950000;
                        $discount = '37%';
                        $badge = 'POPULER';
                    } elseif (str_contains($catSlug, 'saas') || str_contains($catSlug, 'app')) {
                        $origPrice = 9500000;
                        $promoPrice = 6200000;
                        $discount = '35%';
                        $badge = 'FEATURED';
                    } else {
                        $origPrice = 2200000;
                        $promoPrice = 1390000;
                        $discount = '37%';
                        $badge = 'VERIFIED';
                    }
                @endphp

                <article class="project-card group relative flex flex-col justify-between overflow-hidden rounded-2xl border border-night-border bg-night-surface shadow-sm transition-all duration-300 hover:border-slate-800 dark:hover:border-white/50 hover:shadow-xl hover:-translate-y-1"
                         data-category="{{ $catSlug }}"
                         data-title="{{ strtolower($project->title) }}"
                         data-summary="{{ strtolower($project->summary) }}"
                         data-tags="{{ strtolower(implode(' ', $project->tech_stack ?? [])) }}"
                         data-price="{{ $promoPrice }}"
                         data-order="{{ $project->display_order ?? $index }}">

                    <div>
                        <!-- Aspect Ratio Image Container with Hover Scale (Style Geraikita) -->
                        <div class="relative aspect-[16/10] overflow-hidden bg-gradient-to-br from-slate-100 to-slate-200 dark:from-zinc-900 dark:to-zinc-800 border-b border-night-border">
                            @if($project->thumbnail)
                                <img src="{{ $project->thumbnail_url }}" alt="{{ $project->title }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center text-night-dim font-mono text-xs gap-2">
                                    <svg class="w-8 h-8 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span>[OXID LABS LIVE PROJECT]</span>
                                </div>
                            @endif

                            <!-- Discount Badge Overlay (Top Left) -->
                            <div class="absolute top-3 left-3 z-10 flex items-center gap-1.5">
                                <span class="inline-flex items-center gap-1 rounded-md border px-2 py-0.5 text-[10px] font-bold border-rose-300 bg-rose-50 text-rose-700 dark:border-rose-500/30 dark:bg-rose-500/20 dark:text-rose-400 font-mono shadow-sm">
                                    <svg class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/></svg>
                                    &minus;{{ $discount }}
                                </span>
                                <span class="px-2 py-0.5 rounded-md bg-black/60 backdrop-blur-md text-[10px] font-mono uppercase text-white font-semibold">
                                    {{ $badge }}
                                </span>
                            </div>

                            <!-- Year Badge Overlay (Top Right) -->
                            <div class="absolute top-3 right-3 z-10 px-2 py-0.5 rounded-md bg-white/80 dark:bg-black/80 backdrop-blur-md text-[10px] font-mono text-night-text font-bold border border-night-border">
                                {{ $project->year ?? '2026' }}
                            </div>
                        </div>

                        <!-- Card Content Body -->
                        <div class="p-5">
                            
                            <!-- Category and Rating Line -->
                            <div class="flex items-center justify-between text-[11px] font-mono text-night-dim mb-2">
                                <span class="text-emerald-600 dark:text-emerald-400 font-bold uppercase tracking-wider">
                                    {{ $project->category ?? 'Digital Product' }}
                                </span>
                                <div class="flex items-center gap-1 text-amber-500 font-bold">
                                    <span>★ 5.0</span>
                                    <span class="text-night-dim">(verified)</span>
                                </div>
                            </div>

                            <!-- Product Title -->
                            <h3 class="text-base font-extrabold text-night-text group-hover:text-black dark:group-hover:text-white transition-colors line-clamp-2 leading-snug mb-2">
                                {{ $project->title }}
                            </h3>

                            <!-- Product Summary -->
                            <p class="text-xs text-night-muted line-clamp-2 leading-relaxed mb-4">
                                {{ $project->summary }}
                            </p>

                            <!-- Pricing Box (Geraikita style: original price crossed out + bold promo price) -->
                            <div class="p-3 rounded-xl bg-night-midnight border border-night-border flex items-center justify-between mb-4">
                                <div>
                                    <div class="text-[10px] text-night-dim line-through font-mono">
                                        Rp {{ number_format($origPrice, 0, ',', '.') }}
                                    </div>
                                    <div class="flex items-baseline gap-1">
                                        <span class="text-[10px] font-bold text-night-text">Mulai</span>
                                        <span class="text-sm font-extrabold text-night-text font-mono">
                                            Rp {{ number_format($promoPrice, 0, ',', '.') }}
                                        </span>
                                    </div>
                                </div>
                                <span class="px-2 py-1 rounded bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-[10px] font-mono font-bold">
                                    GARANSI 30 HARI
                                </span>
                            </div>

                            <!-- Tech Stack Pills -->
                            @if(!empty($project->tech_stack))
                                <div class="flex flex-wrap gap-1.5 mb-2">
                                    @foreach(array_slice($project->tech_stack, 0, 3) as $tech)
                                        <span class="px-2 py-0.5 rounded-full text-[10px] font-mono bg-slate-100 dark:bg-white/5 text-night-muted border border-night-border">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    </div>

                    <!-- Card Footer Actions (Geraikita style: Dual Actions) -->
                    <div class="p-5 pt-0 border-t border-night-border mt-2 pt-4 flex items-center justify-between gap-2">
                        <button type="button" onclick="openProjectModal('{{ $project->slug }}')" class="flex-1 py-2.5 px-3 rounded-xl bg-night-midnight border border-night-border hover:border-slate-800 dark:hover:border-white text-xs font-bold text-night-text transition-all text-center flex items-center justify-center gap-1.5">
                            <span>Detail Proyek</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>

                        <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20tertarik%20dengan%20proyek%20{{ urlencode($project->title) }}" target="_blank" rel="noopener noreferrer" class="py-2.5 px-3.5 rounded-xl bg-[#111113] text-white dark:bg-white dark:text-black hover:opacity-90 transition-all text-xs font-bold flex items-center justify-center gap-1.5 shadow-sm" title="Pesan atau Konsultasikan Proyek Ini">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.173.449.741.964 1.2.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.679.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.42-.101.825z"/></svg>
                            <span>Pesan</span>
                        </a>
                    </div>

                </article>
            @empty
                <div class="col-span-full py-20 text-center text-night-dim font-mono text-sm bg-night-surface rounded-2xl border border-night-border">
                    Belum ada produk yang dipublikasikan dalam katalog saat ini.
                </div>
            @endforelse
        </div>

        <!-- No Results Fallback -->
        <div id="no-search-results" class="hidden py-20 text-center text-night-dim font-mono text-sm bg-night-surface rounded-2xl border border-night-border mt-6">
            Tidak ada produk yang cocok dengan pencarian Anda. Coba kata kunci lain atau pilih Semua Kategori.
        </div>

        <!-- ========================================================================= -->
        <!-- BOTTOM MARKETPLACE CTA BANNER                                             -->
        <!-- ========================================================================= -->
        <div class="reveal-init mt-16 p-8 sm:p-12 rounded-3xl bg-[#0E0E10] text-white border border-white/10 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="max-w-xl">
                <span class="text-xs font-mono uppercase tracking-[0.2em] text-emerald-400 font-bold block mb-2">
                    KUSTOMISASI &bull; OXID LABS VENTURE
                </span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-2">
                    Ingin Membangun Proyek Khusus Sesuai Kebutuhan Bisnis Anda?
                </h3>
                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                    Kami siap merealisasikan landing page, platform SaaS, e-commerce, hingga sistem internal perusahaan dengan arsitektur modern dan harga promo transparan.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto flex-shrink-0">
                <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20ingin%20konsultasi%20pembuatan%20website%20kustom" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-6 py-3.5 rounded-full text-xs font-semibold btn-pill-white text-center shadow-lg">
                    Konsultasi via WhatsApp &rarr;
                </a>
                <a href="{{ route('pricing') }}" class="w-full sm:w-auto px-6 py-3.5 rounded-full text-xs font-semibold rounded-full border border-white/20 bg-white/5 hover:bg-white/10 text-white transition-all text-center">
                    Cek Katalog Harga &amp; Diskon
                </a>
            </div>
        </div>

    </div>

    <!-- Client-Side Filter, Search, Sort & Countdown Script -->
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const categoryTiles = document.querySelectorAll('.category-tile');
            const searchInput = document.getElementById('catalog-search');
            const sortSelect = document.getElementById('catalog-sort');
            const cardsGrid = document.getElementById('projects-grid');
            const cards = Array.from(document.querySelectorAll('.project-card'));
            const noResults = document.getElementById('no-search-results');
            const resultsCount = document.getElementById('results-count');

            let activeFilter = 'all';
            let searchQuery = '';

            function updateVisibility() {
                let visibleCount = 0;

                cards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    const title = card.getAttribute('data-title');
                    const summary = card.getAttribute('data-summary');
                    const tags = card.getAttribute('data-tags');

                    const matchesFilter = (activeFilter === 'all') || (category && category.includes(activeFilter)) || (activeFilter && activeFilter.includes(category));
                    const matchesSearch = !searchQuery || 
                                          title.includes(searchQuery) || 
                                          summary.includes(searchQuery) || 
                                          tags.includes(searchQuery);

                    if (matchesFilter && matchesSearch) {
                        card.style.display = 'flex';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (noResults) {
                    noResults.classList.toggle('hidden', visibleCount > 0);
                }
                if (resultsCount) {
                    resultsCount.textContent = `Menampilkan ${visibleCount} Produk Terverifikasi`;
                }
            }

            // Category Tile Click Handler
            categoryTiles.forEach(tile => {
                tile.addEventListener('click', () => {
                    categoryTiles.forEach(t => {
                        t.classList.remove('active', 'border-slate-800', 'dark:border-white', 'shadow-md');
                        t.classList.add('border-night-border');
                    });
                    tile.classList.add('active', 'border-slate-800', 'dark:border-white', 'shadow-md');
                    tile.classList.remove('border-night-border');

                    activeFilter = tile.getAttribute('data-filter');
                    updateVisibility();
                });
            });

            // Search Input Handler
            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    searchQuery = e.target.value.toLowerCase().trim();
                    updateVisibility();
                });
            }

            // Sort Dropdown Handler
            if (sortSelect && cardsGrid) {
                sortSelect.addEventListener('change', () => {
                    const val = sortSelect.value;
                    const sortedCards = [...cards];

                    if (val === 'price-low') {
                        sortedCards.sort((a, b) => parseFloat(a.getAttribute('data-price') || 0) - parseFloat(b.getAttribute('data-price') || 0));
                    } else if (val === 'price-high') {
                        sortedCards.sort((a, b) => parseFloat(b.getAttribute('data-price') || 0) - parseFloat(a.getAttribute('data-price') || 0));
                    } else if (val === 'newest') {
                        sortedCards.reverse();
                    } else {
                        // featured / default
                        sortedCards.sort((a, b) => parseInt(a.getAttribute('data-order') || 0) - parseInt(b.getAttribute('data-order') || 0));
                    }

                    sortedCards.forEach(card => cardsGrid.appendChild(card));
                });
            }

            // Real-time Flash Sale Countdown Clock
            const countdownEl = document.getElementById('flash-countdown');
            if (countdownEl) {
                let secondsRemaining = 8 * 3600 + 42 * 60 + 15; // 8 hours 42 mins 15 secs
                setInterval(() => {
                    if (secondsRemaining > 0) {
                        secondsRemaining--;
                        const hrs = String(Math.floor(secondsRemaining / 3600)).padStart(2, '0');
                        const mins = String(Math.floor((secondsRemaining % 3600) / 60)).padStart(2, '0');
                        const secs = String(secondsRemaining % 60).padStart(2, '0');
                        countdownEl.textContent = `${hrs}:${mins}:${secs}`;
                    }
                }, 1000);
            }

            // Hero Banner Carousel Controller
            const carouselTrack = document.getElementById('banner-carousel-track');
            const prevBtn = document.getElementById('banner-carousel-prev');
            const nextBtn = document.getElementById('banner-carousel-next');
            const dots = document.querySelectorAll('#banner-carousel-dots .banner-dot');
            const totalSlides = 3;
            let currentSlide = 0;
            let autoSlideTimer = null;

            function goToSlide(index) {
                currentSlide = (index + totalSlides) % totalSlides;
                if (carouselTrack) {
                    carouselTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
                }
                dots.forEach((dot, idx) => {
                    if (idx === currentSlide) {
                        dot.className = 'banner-dot w-6 h-2 rounded-full bg-emerald-400 transition-all duration-300 shadow';
                    } else {
                        dot.className = 'banner-dot w-2 h-2 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300';
                    }
                });
            }

            function startAutoSlide() {
                stopAutoSlide();
                autoSlideTimer = setInterval(() => {
                    goToSlide(currentSlide + 1);
                }, 4500);
            }

            function stopAutoSlide() {
                if (autoSlideTimer) {
                    clearInterval(autoSlideTimer);
                    autoSlideTimer = null;
                }
            }

            if (carouselTrack) {
                if (prevBtn) {
                    prevBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        goToSlide(currentSlide - 1);
                        startAutoSlide();
                    });
                }

                if (nextBtn) {
                    nextBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        goToSlide(currentSlide + 1);
                        startAutoSlide();
                    });
                }

                dots.forEach((dot, idx) => {
                    dot.addEventListener('click', (e) => {
                        e.preventDefault();
                        goToSlide(idx);
                        startAutoSlide();
                    });
                });

                // Pause on hover
                const carouselParent = carouselTrack.parentElement;
                if (carouselParent) {
                    carouselParent.addEventListener('mouseenter', stopAutoSlide);
                    carouselParent.addEventListener('mouseleave', startAutoSlide);

                    // Touch swipe support for mobile
                    let touchStartX = 0;
                    let touchEndX = 0;

                    carouselParent.addEventListener('touchstart', (e) => {
                        touchStartX = e.changedTouches[0].screenX;
                        stopAutoSlide();
                    }, { passive: true });

                    carouselParent.addEventListener('touchend', (e) => {
                        touchEndX = e.changedTouches[0].screenX;
                        if (touchStartX - touchEndX > 50) {
                            goToSlide(currentSlide + 1);
                        } else if (touchEndX - touchStartX > 50) {
                            goToSlide(currentSlide - 1);
                        }
                        startAutoSlide();
                    }, { passive: true });
                }

                startAutoSlide();
            }
        });
    </script>
    @endpush
@endsection
