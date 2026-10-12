@extends('layouts.app')

@section('title', 'Katalog Harga & Paket Promo Layanan — OXID LABS')
@section('meta_description', 'Katalog harga transparan pembuatan landing page, website company profile, toko online, sistem web app, dan optimasi performa website di OXID Labs. Diskon spesial promo hingga 45%.')

@section('content')
    <!-- ========================================================================= -->
    <!-- HERO SECTION: PRICING CATALOG & ACTIVE PROMO                               -->
    <!-- ========================================================================= -->
    <section class="relative w-full py-16 sm:py-24 bg-[#0E0E10] text-white border-b border-white/10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 relative z-10">
            <div class="max-w-3xl">
                <!-- Eyebrow Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/15 mb-6">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-[11px] font-mono tracking-widest uppercase text-zinc-300 font-semibold">
                        TRANSPARENT PRICING &bull; PROMO RESMI
                    </span>
                </div>

                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-[1.15] mb-6">
                    Katalog Harga Layanan <br>
                    <span class="text-zinc-400">&amp; Solusi Digital OXID Labs</span>
                </h1>

                <p class="text-base sm:text-lg text-zinc-400 leading-relaxed font-normal mb-8">
                    Harga transparan tanpa biaya tersembunyi. Dapatkan website berkualitas tinggi, performa super cepat, dan garansi penuh dengan diskon promo hingga 45%.
                </p>

                <!-- Promo Banner Card -->
                <div class="p-4 sm:p-5 rounded-2xl bg-white/5 border border-white/15 backdrop-blur-md flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-xl bg-rose-500/20 text-rose-400 border border-rose-500/30 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-white uppercase tracking-wider font-mono">
                                PROMO LAUNCHING STUDIO &bull; DISKON HINGGA 45%
                            </div>
                            <div class="text-xs text-zinc-400">
                                Sudah termasuk setup domain, SSL keamanan, dan garansi support pasca-peluncuran.
                            </div>
                        </div>
                    </div>
                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20konsultasi%20paket%20promo%20harga" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 rounded-full text-xs font-semibold btn-pill-white flex-shrink-0 whitespace-nowrap">
                        Konsultasi Promo &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- PRICING TIERS & CATALOG FILTER SECTION                                    -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 px-6 sm:px-8 bg-night-base min-h-screen">
        <div class="max-w-7xl mx-auto">

            <!-- Category Filter Tabs -->
            <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4 mb-12 pb-6 border-b border-night-border">
                <div class="flex flex-wrap items-center gap-2" id="pricing-filter-tabs">
                    <button type="button" data-category="all" class="pricing-tab active px-4 py-2 rounded-full text-xs font-semibold transition-all duration-200 bg-[#111113] text-white dark:bg-white dark:text-black shadow-sm">
                        Semua Paket (10)
                    </button>
                    <button type="button" data-category="landing" class="pricing-tab px-4 py-2 rounded-full text-xs font-semibold text-night-muted hover:text-night-text bg-night-surface border border-night-border hover:border-night-text transition-all duration-200">
                        Landing Page Kilat
                    </button>
                    <button type="button" data-category="business" class="pricing-tab px-4 py-2 rounded-full text-xs font-semibold text-night-muted hover:text-night-text bg-night-surface border border-night-border hover:border-night-text transition-all duration-200">
                        Website Bisnis &amp; Toko
                    </button>
                    <button type="button" data-category="webapp" class="pricing-tab px-4 py-2 rounded-full text-xs font-semibold text-night-muted hover:text-night-text bg-night-surface border border-night-border hover:border-night-text transition-all duration-200">
                        SaaS &amp; Web App
                    </button>
                    <button type="button" data-category="optimization" class="pricing-tab px-4 py-2 rounded-full text-xs font-semibold text-night-muted hover:text-night-text bg-night-surface border border-night-border hover:border-night-text transition-all duration-200">
                        Optimasi &amp; Maintenance
                    </button>
                </div>

                <div class="text-xs text-night-dim font-mono">
                    * Pembayaran bertahap DP 50% &amp; pelunasan setelah live
                </div>
            </div>

            <!-- Pricing Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="pricing-cards-grid">
                
                <!-- 1. Landing Page Starter -->
                <div class="pricing-card studio-card p-8 flex flex-col justify-between relative group" data-category="landing">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-mono tracking-widest uppercase text-slate-500 font-bold">
                                LANDING PAGE
                            </span>
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-mono font-bold bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                                DISKON 40%
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-night-text mb-2">
                            Starter Landing Page
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed mb-6">
                            Solusi praktis untuk UMKM, promosi produk tunggal, atau kampanye promosi yang memerlukan rilis cepat.
                        </p>

                        <!-- Pricing Breakdown -->
                        <div class="p-4 rounded-xl bg-night-midnight border border-night-border mb-6">
                            <div class="text-xs text-night-dim line-through font-mono mb-1">
                                Rp 750.000
                            </div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-sm font-bold text-night-text">Rp</span>
                                <span class="text-3xl font-extrabold text-night-text font-mono">450.000</span>
                                <span class="text-xs text-night-dim font-mono">/ project</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-1 font-semibold">
                                &bull; Estimasi pengerjaan: 1 – 2 hari kerja
                            </div>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-3 text-xs text-night-text mb-8">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>1 Halaman Landing Page Responsif (Mobile &amp; Desktop)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Formulir Lead &amp; Tombol Direct WhatsApp Otomatis</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Kecepatan Tinggi (Fast Loading &lt; 1.5 detik)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Setup Hosting &amp; Free SSL Sertifikat</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Garansi Revisi 2x &amp; Support 14 Hari</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20memesan%20Paket%20Starter%20Landing%20Page%20(Rp%20450.000)" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 text-xs font-semibold btn-pill-primary text-center">
                        Pesan Paket Starter &rarr;
                    </a>
                </div>

                <!-- 2. Pro Conversion Landing Page (PALING LARIS) -->
                <div class="pricing-card studio-card p-8 flex flex-col justify-between relative border-2 border-slate-900 dark:border-white shadow-xl" data-category="landing">
                    <!-- Populer Tag -->
                    <div class="absolute -top-3.5 right-6 px-3.5 py-1 rounded-full bg-slate-900 dark:bg-white text-white dark:text-slate-900 text-[10px] font-mono tracking-widest uppercase font-bold shadow-md">
                        PALING LARIS
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-mono tracking-widest uppercase text-slate-500 font-bold">
                                HIGH-CONVERSION
                            </span>
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-mono font-bold bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                                DISKON 37%
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-night-text mb-2">
                            Pro Conversion Landing Page
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed mb-6">
                            Dirancang spesifik memaksimalkan konversi iklan Google Ads &amp; Meta Ads dengan storytelling visual menarik.
                        </p>

                        <!-- Pricing Breakdown -->
                        <div class="p-4 rounded-xl bg-night-midnight border border-night-border mb-6">
                            <div class="text-xs text-night-dim line-through font-mono mb-1">
                                Rp 1.500.000
                            </div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-sm font-bold text-night-text">Rp</span>
                                <span class="text-3xl font-extrabold text-night-text font-mono">950.000</span>
                                <span class="text-xs text-night-dim font-mono">/ project</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-1 font-semibold">
                                &bull; Estimasi pengerjaan: 2 – 4 hari kerja
                            </div>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-3 text-xs text-night-text mb-8">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Desain Kustom Eksklusif (Bukan Template Murahan)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Copywriting Struktur AIDA (Attention, Interest, Desire, Action)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Pemasangan Meta Pixel, Google Tag Manager &amp; Analytics</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Integrasi Formulir Multi-Step &amp; Auto-Reply Chat</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Garansi Revisi 4x &amp; Support Prioritas 30 Hari</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20memesan%20Paket%20Pro%20Conversion%20Landing%20Page%20(Rp%20950.000)" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 text-xs font-semibold btn-pill-primary text-center">
                        Pesan Paket Pro Conversion &rarr;
                    </a>
                </div>

                <!-- 3. 3D Interactive & Immersive Landing Page -->
                <div class="pricing-card studio-card p-8 flex flex-col justify-between relative group" data-category="landing">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-mono tracking-widest uppercase text-slate-500 font-bold">
                                THREE.JS &amp; 3D
                            </span>
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-mono font-bold bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                                DISKON 38%
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-night-text mb-2">
                            3D Interactive Landing Page
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed mb-6">
                            Pengalaman visual futuristik dengan Three.js / WebGL 3D canvas interaktif, scroll interaction, dan dark mode.
                        </p>

                        <!-- Pricing Breakdown -->
                        <div class="p-4 rounded-xl bg-night-midnight border border-night-border mb-6">
                            <div class="text-xs text-night-dim line-through font-mono mb-1">
                                Rp 2.800.000
                            </div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-sm font-bold text-night-text">Rp</span>
                                <span class="text-3xl font-extrabold text-night-text font-mono">1.750.000</span>
                                <span class="text-xs font-mono text-night-dim">/ project</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-1 font-semibold">
                                &bull; Estimasi pengerjaan: 4 – 7 hari kerja
                            </div>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-3 text-xs text-night-text mb-8">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Scene Objek 3D Kustom (Three.js / WebGL)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Interaksi Kursor Mouse &amp; Scroll Trigger Halus</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Sistem Tema Gelap &amp; Terang Terintegrasi 100%</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Optimasi Shader Ringan untuk Semua HP &amp; Laptop</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Garansi Revisi Prioritas &amp; Support 30 Hari Penuh</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20memesan%20Paket%203D%20Interactive%20Landing%20Page%20(Rp%201.750.000)" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 text-xs font-semibold btn-pill-primary text-center">
                        Pesan Paket 3D Interactive &rarr;
                    </a>
                </div>

                <!-- 4. Company Profile Bisnis & UMKM -->
                <div class="pricing-card studio-card p-8 flex flex-col justify-between relative group" data-category="business">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-mono tracking-widest uppercase text-slate-500 font-bold">
                                COMPANY PROFILE
                            </span>
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-mono font-bold bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                                DISKON 37%
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-night-text mb-2">
                            Website Company Profile Standard
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed mb-6">
                            Website multi-halaman profesional untuk membangun kredibilitas perusahaan, instansi, atau bisnis jasa.
                        </p>

                        <!-- Pricing Breakdown -->
                        <div class="p-4 rounded-xl bg-night-midnight border border-night-border mb-6">
                            <div class="text-xs text-night-dim line-through font-mono mb-1">
                                Rp 2.200.000
                            </div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-sm font-bold text-night-text">Rp</span>
                                <span class="text-3xl font-extrabold text-night-text font-mono">1.390.000</span>
                                <span class="text-xs font-mono text-night-dim">/ project</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-1 font-semibold">
                                &bull; Estimasi pengerjaan: 3 – 5 hari kerja
                            </div>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-3 text-xs text-night-text mb-8">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Hingga 5 Halaman Penuh (Home, Tentang, Layanan, Portofolio, Kontak)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Admin Dashboard CMS untuk Update Konten Mandiri</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Inbox Formulir Masuk Tersimpan Rapi di Database</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Email Bisnis Profesional (info@domainanda.com)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Garansi Perbaikan Bug &amp; Bantuan 30 Hari</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20memesan%20Paket%20Company%20Profile%20(Rp%201.390.000)" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 text-xs font-semibold btn-pill-primary text-center">
                        Pesan Company Profile &rarr;
                    </a>
                </div>

                <!-- 5. Toko Online & E-Commerce WhatsApp / Payment Gateway -->
                <div class="pricing-card studio-card p-8 flex flex-col justify-between relative group" data-category="business">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-mono tracking-widest uppercase text-slate-500 font-bold">
                                TOKO ONLINE
                            </span>
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-mono font-bold bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                                DISKON 35%
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-night-text mb-2">
                            E-Commerce WhatsApp &amp; Checkout
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed mb-6">
                            Platform katalog belanja online praktis dengan fitur pemesanan otomatis ke WhatsApp atau integrasi payment gateway.
                        </p>

                        <!-- Pricing Breakdown -->
                        <div class="p-4 rounded-xl bg-night-midnight border border-night-border mb-6">
                            <div class="text-xs text-night-dim line-through font-mono mb-1">
                                Rp 3.800.000
                            </div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-sm font-bold text-night-text">Rp</span>
                                <span class="text-3xl font-extrabold text-night-text font-mono">2.450.000</span>
                                <span class="text-xs font-mono text-night-dim">/ project</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-1 font-semibold">
                                &bull; Estimasi pengerjaan: 5 – 8 hari kerja
                            </div>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-3 text-xs text-night-text mb-8">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Katalog Produk Multi-Kategori Tanpa Batas</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Keranjang Belanja &amp; Formulir Checkout Alamat Otomatis</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Order Direct WhatsApp / Opsi Payment Gateway (QRIS, VA)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Admin Panel Kelola Produk, Stok, Diskon &amp; Orderan</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Pelatihan Penggunaan Sistem &amp; Support 45 Hari</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20memesan%20Paket%20E-Commerce%20(Rp%202.450.000)" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 text-xs font-semibold btn-pill-primary text-center">
                        Pesan Toko Online &rarr;
                    </a>
                </div>

                <!-- 6. Corporate & Enterprise Brand Portal -->
                <div class="pricing-card studio-card p-8 flex flex-col justify-between relative group" data-category="business">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-mono tracking-widest uppercase text-slate-500 font-bold">
                                ENTERPRISE
                            </span>
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-mono font-bold bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                                DISKON 37%
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-night-text mb-2">
                            Corporate Brand Authority Portal
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed mb-6">
                            Website korporasi skala besar dengan standar keamanan tinggi, multi-bahasa, dan performa arsitektur optimal.
                        </p>

                        <!-- Pricing Breakdown -->
                        <div class="p-4 rounded-xl bg-night-midnight border border-night-border mb-6">
                            <div class="text-xs text-night-dim line-through font-mono mb-1">
                                Rp 4.500.000
                            </div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-sm font-bold text-night-text">Rp</span>
                                <span class="text-3xl font-extrabold text-night-text font-mono">2.850.000</span>
                                <span class="text-xs font-mono text-night-dim">/ project</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-1 font-semibold">
                                &bull; Estimasi pengerjaan: 7 – 10 hari kerja
                            </div>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-3 text-xs text-night-text mb-8">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Struktur Halaman Tak Terbatas (Unlimited Pages)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Dukungan Multi-Bahasa Dinamis (Indonesia / English)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Audit Keamanan OWASP &amp; Proteksi Anti-Spam Lanjutan</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Konfigurasi Cloud Server / VPS Production</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Support Dedicated SLA &amp; Garansi 60 Hari Penuh</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20memesan%20Paket%20Corporate%20Portal%20(Rp%202.850.000)" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 text-xs font-semibold btn-pill-primary text-center">
                        Pesan Corporate Portal &rarr;
                    </a>
                </div>

                <!-- 7. SaaS MVP Prototype & Startup Build -->
                <div class="pricing-card studio-card p-8 flex flex-col justify-between relative group" data-category="webapp">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-mono tracking-widest uppercase text-slate-500 font-bold">
                                SAAS &amp; STARTUP
                            </span>
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-mono font-bold bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                                DISKON 35%
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-night-text mb-2">
                            SaaS MVP Prototype
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed mb-6">
                            Bangun produk digital perdana Anda dengan arsitektur scalable, backend terstruktur, dan antarmuka modern.
                        </p>

                        <!-- Pricing Breakdown -->
                        <div class="p-4 rounded-xl bg-night-midnight border border-night-border mb-6">
                            <div class="text-xs text-night-dim line-through font-mono mb-1">
                                Rp 9.500.000
                            </div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-sm font-bold text-night-text">Rp</span>
                                <span class="text-3xl font-extrabold text-night-text font-mono">6.200.000</span>
                                <span class="text-xs font-mono text-night-dim">/ project</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-1 font-semibold">
                                &bull; Estimasi pengerjaan: 10 – 14 hari kerja
                            </div>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-3 text-xs text-night-text mb-8">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Arsitektur Laravel REST API + Modern Front-End</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Sistem Autentikasi Pengguna &amp; Role Access Control</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Integrasi Layanan Pihak Ketiga (AI API, Payment, Email)</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Automated Unit &amp; Feature Test Coverage</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Dokumentasi Arsitektur &amp; Full Code Handover</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20konsultasi%20Paket%20SaaS%20MVP%20(Rp%206.200.000)" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 text-xs font-semibold btn-pill-primary text-center">
                        Konsultasi SaaS MVP &rarr;
                    </a>
                </div>

                <!-- 8. Custom Internal Management Tool & Dashboard -->
                <div class="pricing-card studio-card p-8 flex flex-col justify-between relative group" data-category="webapp">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-mono tracking-widest uppercase text-slate-500 font-bold">
                                SISTEM KUSTOM
                            </span>
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-mono font-bold bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                                DISKON 36%
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-night-text mb-2">
                            Dashboard &amp; Internal Tool
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed mb-6">
                            Digitalisasi alur operasional bisnis Anda dengan sistem inventaris, manajemen proyek, atau analitik kustom.
                        </p>

                        <!-- Pricing Breakdown -->
                        <div class="p-4 rounded-xl bg-night-midnight border border-night-border mb-6">
                            <div class="text-xs text-night-dim line-through font-mono mb-1">
                                Rp 7.000.000
                            </div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-sm font-bold text-night-text">Rp</span>
                                <span class="text-3xl font-extrabold text-night-text font-mono">4.500.000</span>
                                <span class="text-xs font-mono text-night-dim">/ project</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-1 font-semibold">
                                &bull; Estimasi pengerjaan: 7 – 12 hari kerja
                            </div>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-3 text-xs text-night-text mb-8">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Dashboard Visual Interaktif dengan Grafik Data</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Sistem Manajemen CRUD Fleksibel Sesuai Kebutuhan</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Export Data ke Format Excel &amp; Cetak Laporan PDF</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Multi Hak Akses: Admin, Operator, &amp; Manajer</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Audit Log Aktivitas &amp; Garansi Pemeliharaan 45 Hari</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20konsultasi%20Paket%20Dashboard%20Internal%20(Rp%204.500.000)" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 text-xs font-semibold btn-pill-primary text-center">
                        Konsultasi Sistem Kustom &rarr;
                    </a>
                </div>

                <!-- 9. Speed Optimization & Core Web Vitals -->
                <div class="pricing-card studio-card p-8 flex flex-col justify-between relative group" data-category="optimization">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-mono tracking-widest uppercase text-slate-500 font-bold">
                                SPEED OPTIMIZATION
                            </span>
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-mono font-bold bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                                DISKON 39%
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-night-text mb-2">
                            Speed &amp; PageSpeed 90+ Booster
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed mb-6">
                            Website Anda lemot atau ranking Google anjlok? Kami optimasi struktur aset hingga lolos Core Web Vitals hijau.
                        </p>

                        <!-- Pricing Breakdown -->
                        <div class="p-4 rounded-xl bg-night-midnight border border-night-border mb-6">
                            <div class="text-xs text-night-dim line-through font-mono mb-1">
                                Rp 800.000
                            </div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-sm font-bold text-night-text">Rp</span>
                                <span class="text-3xl font-extrabold text-night-text font-mono">490.000</span>
                                <span class="text-xs font-mono text-night-dim">/ website</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-1 font-semibold">
                                &bull; Estimasi pengerjaan: 1 – 2 hari kerja
                            </div>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-3 text-xs text-night-text mb-8">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Audit Lengkap Bottleneck Loading &amp; Server Response</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Kompresi Gambar Otomatis Next-Gen WebP / AVIF</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Minifikasi Script JavaScript, CSS, &amp; HTML Caching</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Jaminan Skor Google PageSpeed Meningkat Signifikan</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Laporan Before-After Transparan &amp; Garansi 14 Hari</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20optimasi%20kecepatan%20website%20(Rp%20490.000)" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 text-xs font-semibold btn-pill-primary text-center">
                        Pesan Optimasi Kecepatan &rarr;
                    </a>
                </div>

                <!-- 10. Monthly Care & Cloud Maintenance -->
                <div class="pricing-card studio-card p-8 flex flex-col justify-between relative group" data-category="optimization">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-mono tracking-widest uppercase text-slate-500 font-bold">
                                BULANAN / CARE
                            </span>
                            <span class="px-2.5 py-1 rounded-md text-[10px] font-mono font-bold bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">
                                DISKON 42%
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-night-text mb-2">
                            Website Care &amp; Maintenance
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed mb-6">
                            Fokus jalankan bisnis Anda. Biarkan tim engineer kami yang menjaga server, keamanan, dan backup website Anda 24/7.
                        </p>

                        <!-- Pricing Breakdown -->
                        <div class="p-4 rounded-xl bg-night-midnight border border-night-border mb-6">
                            <div class="text-xs text-night-dim line-through font-mono mb-1">
                                Rp 600.000
                            </div>
                            <div class="flex items-baseline gap-1.5">
                                <span class="text-sm font-bold text-night-text">Rp</span>
                                <span class="text-3xl font-extrabold text-night-text font-mono">350.000</span>
                                <span class="text-xs font-mono text-night-dim">/ bulan</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-1 font-semibold">
                                &bull; Layanan berkelanjutan &amp; fleksibel (bisa stop kapan saja)
                            </div>
                        </div>

                        <!-- Feature Checklist -->
                        <ul class="space-y-3 text-xs text-night-text mb-8">
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Backup Berkala Mingguan Cloud Storage Mandiri</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Update Versi Framework, PHP Runtime, &amp; Security Patch</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Monitoring Uptime 24/7 &amp; Penanganan Error Instan</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Bantuan Penggantian Konten Minor &amp; Teks Banner</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Konsultasi Teknis Prioritas via Jalur WhatsApp Khusus</span>
                            </li>
                        </ul>
                    </div>

                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20berlangganan%20Website%20Maintenance%20(Rp%20350.000/bln)" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 text-xs font-semibold btn-pill-primary text-center">
                        Langganan Maintenance &rarr;
                    </a>
                </div>

            </div>

            <!-- ========================================================================= -->
            <!-- FEATURE COMPARISON TABLE                                                  -->
            <!-- ========================================================================= -->
            <div class="mt-20 pt-16 border-t border-night-border">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold block mb-2">
                        TABEL KOMPARASI PAKET
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                        Pilih Tingkatan Layanan yang Tepat
                    </h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="border-b border-night-border">
                                <th class="py-4 px-6 font-bold text-night-text bg-night-midnight rounded-tl-2xl w-2/5">Fitur &amp; Spesifikasi</th>
                                <th class="py-4 px-6 font-bold text-night-text text-center bg-night-surface">Starter (Landing)</th>
                                <th class="py-4 px-6 font-bold text-night-text text-center bg-night-midnight">Pro Conversion</th>
                                <th class="py-4 px-6 font-bold text-night-text text-center bg-night-surface rounded-tr-2xl">Company &amp; Custom</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-night-border text-night-muted">
                            <tr>
                                <td class="py-3.5 px-6 font-semibold text-night-text">Jumlah Halaman</td>
                                <td class="py-3.5 px-6 text-center">1 Halaman</td>
                                <td class="py-3.5 px-6 text-center font-bold text-night-text">1 Halaman Long-Form</td>
                                <td class="py-3.5 px-6 text-center font-bold text-night-text">5 – Unlimited Halaman</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-6 font-semibold text-night-text">Custom Desain Eksklusif</td>
                                <td class="py-3.5 px-6 text-center">Standar Studio</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check; Penuh</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check; Penuh</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-6 font-semibold text-night-text">Admin CMS Update Mandiri</td>
                                <td class="py-3.5 px-6 text-center">&mdash;</td>
                                <td class="py-3.5 px-6 text-center">Tersedia Opsi</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check; Termasuk CMS</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-6 font-semibold text-night-text">Setup Domain &amp; SSL</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check;</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check;</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check;</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-6 font-semibold text-night-text">Tracking Pixel &amp; Google Tag</td>
                                <td class="py-3.5 px-6 text-center">Dasar</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check; Lengkap</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check; Lengkap</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-6 font-semibold text-night-text">Jaminan Garansi Support</td>
                                <td class="py-3.5 px-6 text-center">14 Hari</td>
                                <td class="py-3.5 px-6 text-center font-bold text-night-text">30 Hari</td>
                                <td class="py-3.5 px-6 text-center font-bold text-night-text">45 – 60 Hari</td>
                            </tr>
                            <tr>
                                <td class="py-3.5 px-6 font-semibold text-night-text">Source Code Handover</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check; 100% Hak Milik</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check; 100% Hak Milik</td>
                                <td class="py-3.5 px-6 text-center text-emerald-500 font-bold">&check; 100% Hak Milik</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ========================================================================= -->
            <!-- FREQUENTLY ASKED QUESTIONS (FAQ)                                         -->
            <!-- ========================================================================= -->
            <div class="mt-20 pt-16 border-t border-night-border max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold block mb-2">
                        PERTANYAAN UMUM
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                        Hal yang Sering Ditanyakan
                    </h2>
                </div>

                <div class="space-y-4">
                    <div class="studio-card p-6 rounded-2xl">
                        <h3 class="text-sm font-bold text-night-text mb-2 flex items-center justify-between">
                            <span>Bagaimana alur dan sistem pembayarannya?</span>
                            <span class="text-xs text-night-dim font-mono">01</span>
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Pembayaran dilakukan bertahap secara aman: DP 50% di awal setelah brief disepakati untuk memulai pengerjaan, dan pelunasan 50% setelah website selesai di-review dan siap live. Kami menerima transfer Bank, QRIS, dan Invoice resmi.
                        </p>
                    </div>

                    <div class="studio-card p-6 rounded-2xl">
                        <h3 class="text-sm font-bold text-night-text mb-2 flex items-center justify-between">
                            <span>Apakah saya perlu menyiapkan domain dan hosting sendiri?</span>
                            <span class="text-xs text-night-dim font-mono">02</span>
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Bebas sesuai kebutuhan Anda. Jika Anda sudah memiliki domain atau hosting (cPanel/VPS), kami akan deploy langsung ke server Anda. Jika belum memiliki, tim kami siap mengurus pendaftaran domain dan konfigurasi hosting tanpa biaya tambahan.
                        </p>
                    </div>

                    <div class="studio-card p-6 rounded-2xl">
                        <h3 class="text-sm font-bold text-night-text mb-2 flex items-center justify-between">
                            <span>Apakah ada garansi jika terjadi kendala atau bug pasca peluncuran?</span>
                            <span class="text-xs text-night-dim font-mono">03</span>
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Pasti. Semua paket pembuatan website di OXID Labs dilindungi garansi support teknis mulai dari 14 hingga 60 hari penuh. Jika ada kendala teknis atau error, kami perbaiki secara prioritas tanpa biaya tambahan.
                        </p>
                    </div>

                    <div class="studio-card p-6 rounded-2xl">
                        <h3 class="text-sm font-bold text-night-text mb-2 flex items-center justify-between">
                            <span>Apakah saya memegang kepemilikan penuh atas kode dan website?</span>
                            <span class="text-xs text-night-dim font-mono">04</span>
                        </h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Ya, 100%! Tidak ada sistem vendor lock-in. Seluruh source code, database, dan aset desain sepenuhnya menjadi hak milik Anda dan bisa dikembangkan kembali di kemudian hari.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ========================================================================= -->
            <!-- CUSTOM QUOTE & CONSULTATION BANNER                                        -->
            <!-- ========================================================================= -->
            <div class="mt-20 p-8 sm:p-12 rounded-3xl bg-[#0E0E10] text-white border border-white/10 text-center relative overflow-hidden">
                <div class="max-w-2xl mx-auto relative z-10">
                    <span class="text-xs font-mono uppercase tracking-[0.2em] text-zinc-400 font-bold block mb-3">
                        KONSULTASI KEBUTUHAN KHUSUS
                    </span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white tracking-tight mb-4">
                        Punya Spesifikasi Khusus di Luar Paket?
                    </h2>
                    <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed mb-8">
                        Ceritakan ide proyek Anda. Kami akan memberikan estimasi waktu, rekomendasi tech stack, serta penawaran harga terbaik yang transparan dan dapat disesuaikan.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20konsultasi%20pembuatan%20website%20kustom" target="_blank" rel="noopener noreferrer" class="px-8 py-4 text-xs font-semibold btn-pill-white shadow-lg w-full sm:w-auto">
                            Konsultasi Langsung via WhatsApp
                        </a>
                        <a href="{{ route('contact') }}" class="px-7 py-4 text-xs font-semibold rounded-full border border-white/20 bg-white/5 hover:bg-white/10 text-white transition-all w-full sm:w-auto">
                            Kirim Formulir Brief Kustom
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Client-Side Script for Category Filter Tabs -->
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.pricing-tab');
            const cards = document.querySelectorAll('.pricing-card');

            tabs.forEach(tab => {
                tab.addEventListener('click', function () {
                    const category = this.getAttribute('data-category');

                    // Active state on tabs
                    tabs.forEach(t => {
                        t.classList.remove('active', 'bg-[#111113]', 'text-white', 'dark:bg-white', 'dark:text-black', 'shadow-sm');
                        t.classList.add('text-night-muted', 'bg-night-surface', 'border', 'border-night-border');
                    });
                    this.classList.add('active', 'bg-[#111113]', 'text-white', 'dark:bg-white', 'dark:text-black', 'shadow-sm');
                    this.classList.remove('text-night-muted', 'bg-night-surface', 'border-night-border');

                    // Filter cards
                    cards.forEach(card => {
                        const cardCat = card.getAttribute('data-category');
                        if (category === 'all' || cardCat === category) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
    @endpush
@endsection
