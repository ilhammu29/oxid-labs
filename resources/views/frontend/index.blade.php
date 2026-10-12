@extends('layouts.app')

@section('title', 'OXID LABS — Solusi Website & Digital untuk Bisnis & Produk Anda')
@section('meta_description', 'Layanan pembuatan landing page profesional, website company profile, e-commerce, dan sistem web modern yang berorientasi pada konversi dan hasil nyata.')

@section('content')
    <!-- ========================================================================= -->
    <!-- HERO SECTION: CLEAN MINIMALIST HERO WITH REAL DEVICE MOCKUP SHOWCASE       -->
    <!-- ========================================================================= -->
    <!-- ========================================================================= -->
    <!-- HERO SECTION: CLEAN MINIMALIST HERO WITH REAL DEVICE MOCKUP SHOWCASE       -->
    <!-- ========================================================================= -->
    <section class="relative w-full min-h-[85vh] flex flex-col justify-center overflow-hidden bg-[#0E0E10] text-white pt-10 pb-16 sm:pb-20">
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Hero Left: High-Impact Typography & Conversion Actions -->
                <div class="lg:col-span-7 space-y-6 pt-2 lg:pt-0 text-left">
                    <!-- Category Eyebrow Badge -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/15">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-[11px] font-mono tracking-widest uppercase text-zinc-300 font-semibold">
                            WEB DEVELOPMENT SERVICES
                        </span>
                    </div>

                    <!-- Main Headline (Direct match with reference) -->
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-[1.12]">
                        Landing Page <span class="text-white">Profesional</span> untuk <span class="text-zinc-400">Bisnis &amp; Produk Anda</span>
                    </h1>

                    <!-- Subtitle / Value Proposition -->
                    <p class="text-base sm:text-lg text-zinc-400 max-w-xl leading-relaxed font-normal">
                        Dari landing page hingga website lengkap, kami bantu wujudkan kehadiran digital yang modern, cepat, dan berorientasi pada hasil.
                    </p>

                    <!-- Primary Conversion Action Buttons -->
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-2">
                        <a href="{{ route('pricing') }}" class="px-8 py-4 text-xs sm:text-sm font-semibold btn-pill-white shadow-lg">
                            <span>Mulai Sekarang</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        
                        <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener noreferrer" class="px-7 py-4 text-xs sm:text-sm font-semibold rounded-full border border-white/20 bg-white/5 hover:bg-white/10 text-white transition-all flex items-center justify-center gap-2.5">
                            <svg class="w-4 h-4 text-zinc-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                            <span>Konsultasi Gratis via Chat / Email</span>
                        </a>
                    </div>

                    <!-- Client Trust & Delivery Assurance Note -->
                    <div class="pt-2 flex items-center gap-6 text-xs text-zinc-400 font-mono">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Estimasi 1 &ndash; 7 Hari</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Garansi Support Teknis</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Right: High-Resolution Device Presentation Mockup (OXID Labs Tech Device Mockup) -->
                <div class="lg:col-span-5 relative flex flex-col items-center justify-center">
                    
                    <!-- Direct Transparent Mockup Image -->
                    <div class="relative w-full flex items-center justify-center animate-float">
                        <img src="{{ asset('images/oxid-device-mockup.png') }}" 
                             alt="OXID Labs Tech Device Mockup" 
                             class="w-full max-w-lg lg:max-w-xl h-auto object-contain drop-shadow-2xl transition-transform duration-500 hover:scale-105"
                             loading="eager">
                    </div>

                    <!-- Floating Badges Layer (Below mockup - exact match with reference) -->
                    <div class="grid grid-cols-3 gap-3 w-full mt-6">
                        <div class="p-3 sm:p-3.5 rounded-2xl bg-[#0E0E10] border border-white/10 text-center shadow-sm hover:border-white/20 transition-all">
                            <div class="text-emerald-400 mb-1 flex justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                            </div>
                            <div class="text-[11px] font-bold text-white leading-tight">Fast Loading</div>
                            <div class="text-[10px] text-zinc-400 font-mono">&lt; 1.5s</div>
                        </div>

                        <div class="p-3 sm:p-3.5 rounded-2xl bg-[#0E0E10] border border-white/10 text-center shadow-sm hover:border-white/20 transition-all">
                            <div class="text-zinc-200 mb-1 flex justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div class="text-[11px] font-bold text-white leading-tight">Modern Design</div>
                            <div class="text-[10px] text-zinc-400 font-mono">Responsive</div>
                        </div>

                        <div class="p-3 sm:p-3.5 rounded-2xl bg-[#0E0E10] border border-white/10 text-center shadow-sm hover:border-white/20 transition-all">
                            <div class="text-zinc-200 mb-1 flex justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                            </div>
                            <div class="text-[11px] font-bold text-white leading-tight">Clean Code</div>
                            <div class="text-[10px] text-zinc-400 font-mono">Easy to Scale</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Horizontal Key Benefits Ribbon -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 mt-16 w-full">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 p-4 rounded-2xl bg-[#0E0E10] border border-white/10 shadow-sm">
                <div class="flex items-center gap-3 p-2">
                    <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center text-white flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-white">Proses Cepat</div>
                        <div class="text-[11px] text-zinc-400">1 – 7 hari kerja</div>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-2">
                    <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center text-white flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-white">Desain Modern</div>
                        <div class="text-[11px] text-zinc-400">Responsive di semua perangkat</div>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-2">
                    <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center text-white flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-white">Kode Bersih</div>
                        <div class="text-[11px] text-zinc-400">Mudah dikembangkan</div>
                    </div>
                </div>

                <div class="flex items-center gap-3 p-2">
                    <div class="w-9 h-9 rounded-xl bg-white/10 flex items-center justify-center text-white flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-white">Support Teknis</div>
                        <div class="text-[11px] text-zinc-400">Setelah project selesai</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 2: LAYANAN KAMI (SOLUSI WEBSITE & DIGITAL UNTUK SETIAP KEBUTUHAN)  -->
    <!-- ========================================================================= -->
    <section id="layanan" class="py-20 sm:py-28 px-6 sm:px-8 bg-night-base border-t border-night-border">
        <div class="max-w-7xl mx-auto">
            
            <!-- Section Header (Exact match with reference) -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
                <div>
                    <span class="block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-3">
                        LAYANAN KAMI
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-night-text tracking-tight">
                        Solusi Website &amp; Digital <br>untuk Setiap Kebutuhan
                    </h2>
                </div>
                <div class="max-w-md">
                    <p class="text-sm text-night-muted leading-relaxed">
                        Kami menyediakan layanan pembuatan landing page, website, dan sistem web modern yang dirancang khusus untuk bisnis, produk, dan kebutuhan digital Anda.
                    </p>
                </div>
            </div>

            <!-- 6 Services Grid (Direct Match with Reference 1) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Service 1: Landing Page -->
                <article class="studio-card p-7 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-night-text mb-2.5">
                            Landing Page
                        </h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-6">
                            Tampil profesional dengan landing page yang fokus pada konversi, daya tarik visual tinggi, dan penyampaian pesan yang jelas.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-night-border text-xs font-mono text-night-dim">
                        Marketing &bull; Promo &bull; Product Launch
                    </div>
                </article>

                <!-- Service 2: Website Company Profile -->
                <article class="studio-card p-7 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-night-text mb-2.5">
                            Website Company Profile
                        </h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-6">
                            Bangun kredibilitas bisnis Anda dengan website profil perusahaan yang modern, elegan, dan mencerminkan reputasi terpercaya.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-night-border text-xs font-mono text-night-dim">
                        Corporate &bull; Portfolio &bull; Brand
                    </div>
                </article>

                <!-- Service 3: E-Commerce Website -->
                <article class="studio-card p-7 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-night-text mb-2.5">
                            E-Commerce Website
                        </h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-6">
                            Toko online siap pakai dengan fitur katalog lengkap, integrasi pemesanan, dan sistem transaksi yang mudah dikelola.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-night-border text-xs font-mono text-night-dim">
                        UMKM &bull; Produk Digital &bull; Online Store
                    </div>
                </article>

                <!-- Service 4: Web Application -->
                <article class="studio-card p-7 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-night-text mb-2.5">
                            Web Application
                        </h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-6">
                            Sistem web custom untuk kebutuhan operasional, pencatatan otomatis, manajemen inventaris, dan dashboard analitik bisnis Anda.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-night-border text-xs font-mono text-night-dim">
                        Dashboard &bull; CRM &bull; SaaS
                    </div>
                </article>

                <!-- Service 5: Website Redesign -->
                <article class="studio-card p-7 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-night-text mb-2.5">
                            Website Redesign
                        </h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-6">
                            Perbarui tampilan dan performa website lama Anda menjadi lebih modern, responsif, cepat diakses, dan ramah mesin pencari.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-night-border text-xs font-mono text-night-dim">
                        UI/UX &bull; Performance &bull; SEO
                    </div>
                </article>

                <!-- Service 6: Maintenance & Support -->
                <article class="studio-card p-7 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white mb-6">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-night-text mb-2.5">
                            Maintenance &amp; Support
                        </h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed mb-6">
                            Kami siap membantu menjaga website Anda tetap aman, backup rutin, pembaruan konten berkala, dan performa yang selalu optimal.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-night-border text-xs font-mono text-night-dim">
                        Update &bull; Bug Fix &bull; Monitoring
                    </div>
                </article>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 3: KATALOG HARGA & PAKET (DIRECT MATCH WITH REFERENCE 2)          -->
    <!-- ========================================================================= -->
    <section id="pricing" class="py-20 sm:py-28 px-6 sm:px-8 bg-night-surface border-t border-night-border">
        <div class="max-w-7xl mx-auto">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-3">
                    KATALOG HARGA &amp; PAKET
                </span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-night-text tracking-tight mb-4">
                    Landing Page Profesional <br>untuk Bisnis Anda
                </h2>
                <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                    Dari landing page sederhana hingga website lengkap, kami bantu wujudkan kehadiran digital yang modern, cepat, dan berorientasi pada hasil.
                </p>
            </div>

            <!-- Pricing Tier Cards (Exact 3 Columns Match with Reference 2) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch mb-14">
                
                <!-- Tier 1: BASIC -->
                <div class="studio-card p-8 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-mono tracking-widest uppercase text-slate-500 font-bold mb-2">
                            BASIC
                        </div>
                        <h3 class="text-base font-bold text-night-text mb-4">
                            Landing Page Satu Halaman
                        </h3>

                        <div class="flex items-baseline gap-1 mb-4">
                            <span class="text-xs font-mono text-night-muted">Rp</span>
                            <span class="text-3xl sm:text-4xl font-extrabold text-night-text font-mono">500.000</span>
                            <span class="text-xs font-mono text-night-dim">/ project</span>
                        </div>

                        <p class="text-xs text-night-muted leading-relaxed pb-6 border-b border-night-border mb-6">
                            Cocok untuk UMKM, personal brand, atau kebutuhan promosi sederhana yang memerlukan kehadiran online cepat.
                        </p>

                        <ul class="space-y-3.5 text-xs text-night-text mb-8">
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>1 Halaman (Landing Page)</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Desain Modern &amp; Responsif</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Formulir Kontak / WhatsApp</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Optimasi SEO Dasar</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Revisi 1x</span>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ route('contact') }}?package=basic" class="w-full py-3.5 text-xs font-semibold btn-pill-primary shadow-sm text-center">
                        Pilih Paket Basic &rarr;
                    </a>
                </div>

                <!-- Tier 2: BUSINESS (PALING POPULER) -->
                <div class="studio-card p-8 flex flex-col justify-between relative border-2 border-slate-900 dark:border-white shadow-xl">
                    <!-- Populer Tag -->
                    <div class="absolute -top-3.5 right-6 px-3.5 py-1 rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-[10px] font-mono tracking-widest uppercase font-bold shadow-md">
                        PALING POPULER
                    </div>

                    <div>
                        <div class="text-xs font-mono tracking-widest uppercase text-slate-500 font-bold mb-2">
                            BUSINESS
                        </div>
                        <h3 class="text-base font-bold text-night-text mb-4">
                            Landing Page Multi Halaman
                        </h3>

                        <div class="flex items-baseline gap-1 mb-4">
                            <span class="text-xs font-mono text-night-muted">Rp</span>
                            <span class="text-3xl sm:text-4xl font-extrabold text-night-text font-mono">1.000.000</span>
                            <span class="text-xs font-mono text-night-dim">/ project</span>
                        </div>

                        <p class="text-xs text-night-muted leading-relaxed pb-6 border-b border-night-border mb-6">
                            Ideal untuk bisnis yang membutuhkan informasi lebih lengkap dan interaksi lebih baik dengan pelanggan.
                        </p>

                        <ul class="space-y-3.5 text-xs text-night-text mb-8">
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>3 &ndash; 5 Halaman (Home, About, Services, dll)</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Desain Modern &amp; Responsif</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Formulir Kontak / WhatsApp</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Integrasi Sosial Media</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Optimasi SEO On-Page</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Revisi 2x</span>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ route('contact') }}?package=business" class="w-full py-3.5 text-xs font-semibold btn-pill-primary shadow-lg text-center">
                        Pilih Paket Business &rarr;
                    </a>
                </div>

                <!-- Tier 3: PRO -->
                <div class="studio-card p-8 flex flex-col justify-between">
                    <div>
                        <div class="text-xs font-mono tracking-widest uppercase text-slate-500 font-bold mb-2">
                            PRO
                        </div>
                        <h3 class="text-base font-bold text-night-text mb-4">
                            Website Lengkap (E-Commerce / Custom)
                        </h3>

                        <div class="flex items-baseline gap-1 mb-4">
                            <span class="text-xs font-mono text-night-muted">Rp</span>
                            <span class="text-3xl sm:text-4xl font-extrabold text-night-text font-mono">1.500.000</span>
                            <span class="text-xs font-mono text-night-dim">/ project</span>
                        </div>

                        <p class="text-xs text-night-muted leading-relaxed pb-6 border-b border-night-border mb-6">
                            Untuk bisnis yang butuh fitur lebih kompleks, seperti toko online, sistem pemesanan, atau integrasi khusus.
                        </p>

                        <ul class="space-y-3.5 text-xs text-night-text mb-8">
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>5 &ndash; 10 Halaman (Landing Page + Fitur Lengkap)</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Desain Premium &amp; Custom Sesuai Brand</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>E-Commerce / Booking / Fitur Khusus</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Integrasi Payment Gateway (Midtrans/VA)</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Optimasi SEO Lengkap</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Revisi 3x</span>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ route('contact') }}?package=pro" class="w-full py-3.5 text-xs font-semibold btn-pill-primary shadow-sm text-center">
                        Pilih Paket Pro &rarr;
                    </a>
                </div>

            </div>

            <!-- Fitur Tambahan (Add-ons Banner - Direct match with reference 2) -->
            <div class="rounded-2xl p-6 sm:p-8 bg-slate-50 dark:bg-white/[0.03] border border-night-border">
                <div class="flex items-center gap-2.5 mb-6 text-night-text font-bold text-sm sm:text-base">
                    <span class="text-amber-500">✨</span>
                    <span>Fitur Tambahan</span>
                    <span class="text-xs font-normal text-night-dim hidden sm:inline">&mdash; Kami juga menyediakan fitur tambahan sesuai kebutuhan bisnis Anda:</span>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="p-4 rounded-xl bg-night-surface border border-night-border flex flex-col justify-center">
                        <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white mb-2.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                        </div>
                        <div class="text-xs font-bold text-night-text">Payment Gateway</div>
                        <div class="text-[11px] text-night-dim">Midtrans, VA, QRIS, e-Wallet</div>
                    </div>

                    <div class="p-4 rounded-xl bg-night-surface border border-night-border flex flex-col justify-center">
                        <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white mb-2.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7 7z"/></svg>
                        </div>
                        <div class="text-xs font-bold text-night-text">Sistem Login</div>
                        <div class="text-[11px] text-night-dim">Member area &amp; proteksi data</div>
                    </div>

                    <div class="p-4 rounded-xl bg-night-surface border border-night-border flex flex-col justify-center">
                        <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white mb-2.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        </div>
                        <div class="text-xs font-bold text-night-text">Blog &amp; CMS</div>
                        <div class="text-[11px] text-night-dim">Publikasi artikel &amp; konten berita</div>
                    </div>

                    <div class="p-4 rounded-xl bg-night-surface border border-night-border flex flex-col justify-center">
                        <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white mb-2.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div class="text-xs font-bold text-night-text">Dashboard Admin</div>
                        <div class="text-[11px] text-night-dim">Kelola konten &amp; data mandiri</div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 4: PORTOFOLIO & PRODUK UNGGULAN (DATABASE LIVE SHOWCASE)          -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 px-6 sm:px-8 bg-night-base border-t border-night-border">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
                <div>
                    <span class="block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-3">
                        Project Catalog &bull; Portofolio &amp; Produk Unggulan
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-night-text tracking-tight">
                        Hasil Karya &amp; Sistem Digital <br>yang Telah Kami Bangun
                    </h2>
                </div>
                <div class="max-w-md">
                    <p class="text-sm text-night-muted leading-relaxed mb-3">
                        Sistem nyata yang kami kembangkan dan pelihara, mulai dari platform SaaS bisnis hingga website brand berkonversi tinggi.
                    </p>
                    <a href="{{ route('products') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-900 dark:text-white hover:underline">
                        <span>Lihat Semua Katalog ({{ $projects->count() }})</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Featured Product Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredProjects as $project)
                    <article class="studio-card overflow-hidden flex flex-col justify-between group">
                        <div>
                            <!-- Visual Image Showcase with Auto-Mirroring Thumbnail Support -->
                            <div class="relative aspect-[16/10] overflow-hidden bg-slate-100 dark:bg-slate-800 border-b border-night-border">
                                @if($project->thumbnail)
                                    <img src="{{ $project->thumbnail_url }}" alt="{{ $project->title }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-night-dim font-mono text-xs">
                                        [OXID LABS PREVIEW]
                                    </div>
                                @endif
                                <div class="absolute top-3 left-3 px-2.5 py-1 rounded-md bg-white/90 dark:bg-black/80 backdrop-blur-md text-[10px] font-mono uppercase tracking-wider text-night-text font-bold border border-slate-200 dark:border-white/10">
                                    {{ $project->category }}
                                </div>
                            </div>

                            <!-- Editorial Description -->
                            <div class="p-6">
                                <div class="text-[11px] font-mono text-night-dim mb-2">
                                    {{ $project->year ?? '2026' }} &bull; {{ $project->client_name ?? 'OXID Venture' }}
                                </div>
                                <h3 class="text-lg font-bold text-night-text group-hover:text-slate-950 dark:group-hover:text-white transition-colors mb-2.5">
                                    {{ $project->title }}
                                </h3>
                                <p class="text-xs text-night-muted line-clamp-2 leading-relaxed">
                                    {{ $project->summary }}
                                </p>
                            </div>
                        </div>

                        <!-- Card Actions & Tech Stack -->
                        <div class="p-6 pt-0 space-y-4">
                            @if(!empty($project->tech_stack))
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach(array_slice($project->tech_stack, 0, 3) as $tag)
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-mono bg-slate-100 dark:bg-white/5 text-night-muted border border-slate-200 dark:border-white/10">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif

                            <div class="pt-4 border-t border-night-border flex items-center justify-between">
                                <button type="button" onclick="openProjectModal('{{ $project->slug }}')" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-900 dark:text-white hover:underline">
                                    <span>Lihat Detail Arsitektur</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </button>

                                @if($project->demo_url)
                                    <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-slate-100 dark:bg-white/10 text-slate-700 dark:text-slate-300 hover:text-black dark:hover:text-white transition-colors" title="Buka Demo Langsung">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 5: PROSES KERJA (DARI IDE HINGGA ONLINE, DENGAN PROSES JELAS)      -->
    <!-- ========================================================================= -->
    <section class="py-24 px-6 sm:px-8 bg-[#0E0E10] text-white border-t border-white/10">
        <div class="max-w-7xl mx-auto">
            
            <!-- Section Header (Exact Match with Reference 1) -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
                <div>
                    <span class="block text-xs font-mono uppercase tracking-[0.2em] text-slate-400 font-bold mb-3">
                        PROSES KERJA
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Dari Ide hingga Online, <br>dengan Proses yang Jelas
                    </h2>
                </div>
                <div class="max-w-md">
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Kami memastikan setiap tahap berjalan transparan, terstruktur, dan sesuai dengan kebutuhan bisnis Anda.
                    </p>
                </div>
            </div>

            <!-- 5 Steps Sequence (Exact Match with Reference 1 & 2) -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 relative">
                
                <!-- Step 01 -->
                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center font-mono text-xs font-bold text-white border border-white/15">
                                01
                            </span>
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-white">
                            Diskusi &amp; Brief
                        </h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Kami mendengarkan kebutuhan Anda dan memberikan saran solusi terbaik sesuai target bisnis.
                        </p>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center font-mono text-xs font-bold text-white border border-white/15">
                                02
                            </span>
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-white">
                            Desain &amp; Prototype
                        </h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Anda akan melihat konsep visual dan interaksi desain sebelum masuk ke tahap pengembangan coding.
                        </p>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center font-mono text-xs font-bold text-white border border-white/15">
                                03
                            </span>
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-white">
                            Development
                        </h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Kami membangun website dengan kode bersih, performa optimal, dan keamanan data yang terjaga.
                        </p>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center font-mono text-xs font-bold text-white border border-white/15">
                                04
                            </span>
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-white">
                            Testing &amp; Revisi
                        </h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Kami pastikan semua tombol dan fitur berjalan lancar di berbagai perangkat sebelum dirilis.
                        </p>
                    </div>
                </div>

                <!-- Step 05 -->
                <div class="p-6 rounded-2xl bg-white/[0.04] border border-white/10 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center font-mono text-xs font-bold text-white border border-white/15">
                                05
                            </span>
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15.536a5 5 0 001.414 1.414m2.828-9.9a9 9 0 012.828-1.414M12 3v1m0 16v1m9-9h-1M4 12H3"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-white">
                            Go Live &amp; Support
                        </h3>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Website siap online! Kami juga siap membantu untuk maintenance dan pembaruan lebih lanjut.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SECTION 6: FAQ (PERTANYAAN UMUM)                                          -->
    <!-- ========================================================================= -->
    <section class="py-20 sm:py-28 px-6 sm:px-8 bg-night-base border-t border-night-border">
        <div class="max-w-4xl mx-auto">
            
            <div class="text-center mb-14">
                <span class="inline-block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-3">
                    PERTANYAAN UMUM
                </span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-night-text tracking-tight mb-3">
                    Hal yang Sering Ditanyakan
                </h2>
                <p class="text-xs sm:text-sm text-night-muted">
                    Transparansi kerja dari awal sampai website Anda siap menghasilkan.
                </p>
            </div>

            <div class="space-y-4">
                <div class="studio-card p-6">
                    <h3 class="text-sm sm:text-base font-bold text-night-text mb-2">
                        Berapa lama waktu pengerjaan website?
                    </h3>
                    <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                        Untuk paket Landing Page Basic umumnya memakan waktu 1 – 3 hari kerja setelah materi konten lengkap. Untuk paket Business dan Pro membutuhkan 3 – 7 hari kerja.
                    </p>
                </div>

                <div class="studio-card p-6">
                    <h3 class="text-sm sm:text-base font-bold text-night-text mb-2">
                        Apakah website sudah responsif di smartphone?
                    </h3>
                    <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                        Ya, 100%. Setiap website yang kami rancang telah diuji pada layar ponsel (iPhone, Android), tablet, laptop, hingga monitor resolusi tinggi dengan kecepatan loading cepat.
                    </p>
                </div>

                <div class="studio-card p-6">
                    <h3 class="text-sm sm:text-base font-bold text-night-text mb-2">
                        Apakah bisa menambah fitur di kemudian hari?
                    </h3>
                    <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                        Tentu bisa. Arsitektur kode kami dibangun secara modular dan scalable sehingga mudah diperluas dengan fitur payment gateway, login member, katalog baru, maupun integrasi sistem lainnya.
                    </p>
                </div>

                <div class="studio-card p-6">
                    <h3 class="text-sm sm:text-base font-bold text-night-text mb-2">
                        Bagaimana jika saya belum memiliki domain dan hosting?
                    </h3>
                    <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                        Tim OXID Labs dapat membantu Anda memilih dan menyiapkan domain serta hosting terbaik sampai website benar-benar aktif online dan siap digunakan.
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection
