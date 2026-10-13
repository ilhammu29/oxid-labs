@extends('layouts.app')

@section('title', 'Layanan Rekayasa Website & Solusi Digital — OXID LABS')
@section('meta_description', 'Layanan rekayasa website berkinerja tinggi oleh OXID Labs: landing page berkonversi tinggi, company profile korporat, e-commerce WhatsApp, SaaS web application, dan optimasi performa.')

@section('content')
    <!-- ========================================================================= -->
    <!-- HERO SECTION: SERVICES OVERVIEW (Seamlessly integrated with header)       -->
    <!-- ========================================================================= -->
    <section id="dark-hero-section" class="relative w-full pt-24 sm:pt-36 pb-12 sm:pb-24 bg-[#0E0E10] text-white border-b border-white/10 overflow-hidden select-none">
        <!-- Atmospheric Ambient Diffuse Glows -->
        <div class="absolute -top-32 -right-20 w-[550px] lg:w-[750px] h-[550px] lg:h-[750px] rounded-full bg-gradient-to-bl from-emerald-400/15 via-teal-500/10 to-transparent blur-[130px] pointer-events-none z-0"></div>
        <div class="absolute -bottom-32 -left-20 w-[450px] lg:w-[650px] h-[450px] lg:h-[650px] rounded-full bg-gradient-to-tr from-cyan-500/15 via-blue-500/5 to-transparent blur-[120px] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-8 relative z-10">
            <div class="max-w-3xl">
                <!-- Eyebrow -->
                <div class="text-[11px] sm:text-xs uppercase tracking-widest text-zinc-400 font-bold mb-3 sm:mb-4">
                    Engineering & Technical Services &bull; OXID LABS
                </div>

                <!-- Main Headline -->
                <h1 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-[1.15] sm:leading-[1.12] mb-4 sm:mb-6">
                    Layanan Rekayasa Website <br class="hidden sm:inline">
                    <span class="bg-gradient-to-b from-white via-white to-zinc-400 bg-clip-text text-transparent">
                        &amp; Arsitektur Digital Modern
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xs sm:text-base md:text-lg text-zinc-400 leading-relaxed font-normal mb-6 sm:mb-8 max-w-2xl">
                    Kami merancang dan membangun ekosistem digital presisi untuk pertumbuhan bisnis: landing page konversi tinggi, profil perusahaan kredibel, toko online terintegrasi, hingga aplikasi web SaaS skala produksi.
                </p>

                <!-- Value Proposition Trust Bar -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-3 pt-2 font-mono text-[11px] sm:text-xs text-zinc-300">
                    <div class="p-2.5 sm:p-3 rounded-xl bg-white/5 border border-white/10 flex items-center gap-2">
                        <span class="text-emerald-400 font-bold">&check;</span>
                        <span>Core Web Vitals &lt; 1.5s</span>
                    </div>
                    <div class="p-2.5 sm:p-3 rounded-xl bg-white/5 border border-white/10 flex items-center gap-2">
                        <span class="text-emerald-400 font-bold">&check;</span>
                        <span>100% Hak Milik Kode</span>
                    </div>
                    <div class="p-2.5 sm:p-3 rounded-xl bg-white/5 border border-white/10 flex items-center gap-2">
                        <span class="text-emerald-400 font-bold">&check;</span>
                        <span>Security &amp; SSL Cloud</span>
                    </div>
                    <div class="p-2.5 sm:p-3 rounded-xl bg-white/5 border border-white/10 flex items-center gap-2">
                        <span class="text-emerald-400 font-bold">&check;</span>
                        <span>Garansi &amp; Free Setup</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- DETAILED SERVICES CATALOG SECTION                                         -->
    <!-- ========================================================================= -->
    <section class="reveal-init py-12 sm:py-24 px-4 sm:px-8 bg-night-base min-h-screen">
        <div class="max-w-7xl mx-auto">

            <!-- Category Filter Tabs & Navigation -->
            <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-4 mb-8 sm:mb-12 pb-6 border-b border-night-border">
                <div class="flex items-center gap-2 overflow-x-auto no-scrollbar scroll-smooth flex-nowrap -mx-4 px-4 sm:mx-0 sm:px-0 sm:flex-wrap pb-1" id="service-filter-tabs">
                    <button type="button" data-filter="all" class="service-tab active flex-shrink-0 whitespace-nowrap px-4 py-2 rounded-full text-xs font-semibold transition-all duration-200 bg-[#111113] text-white dark:bg-white dark:text-black shadow-sm">
                        Semua Layanan (6)
                    </button>
                    <button type="button" data-filter="web" class="service-tab flex-shrink-0 whitespace-nowrap px-4 py-2 rounded-full text-xs font-semibold text-night-muted hover:text-night-text bg-night-surface border border-night-border hover:border-night-text transition-all duration-200">
                        Web &amp; Landing Page (2)
                    </button>
                    <button type="button" data-filter="ecommerce" class="service-tab flex-shrink-0 whitespace-nowrap px-4 py-2 rounded-full text-xs font-semibold text-night-muted hover:text-night-text bg-night-surface border border-night-border hover:border-night-text transition-all duration-200">
                        Toko Online (1)
                    </button>
                    <button type="button" data-filter="saas" class="service-tab flex-shrink-0 whitespace-nowrap px-4 py-2 rounded-full text-xs font-semibold text-night-muted hover:text-night-text bg-night-surface border border-night-border hover:border-night-text transition-all duration-200">
                        SaaS &amp; Web App (1)
                    </button>
                    <button type="button" data-filter="maintenance" class="service-tab flex-shrink-0 whitespace-nowrap px-4 py-2 rounded-full text-xs font-semibold text-night-muted hover:text-night-text bg-night-surface border border-night-border hover:border-night-text transition-all duration-200">
                        Optimasi &amp; Care (2)
                    </button>
                </div>

                <div class="text-[11px] sm:text-xs text-night-dim font-mono">
                    * Semua layanan menyertakan setup domain, deployment server, dan garansi pasca-rilis
                </div>
            </div>

            <!-- Services Detailed Grid (Clean, Architectural Studio Cards) -->
            <div class="space-y-8" id="services-container">

                <!-- 01. Website & Web Application Development -->
                <article class="service-card studio-card p-5 sm:p-8 lg:p-10 rounded-2xl sm:rounded-3xl border border-night-border hover:border-night-text transition-all duration-300" data-category="web">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                        <div class="space-y-2">
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-xs font-bold text-emerald-600 dark:text-emerald-400">01</span>
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono tracking-wider uppercase font-semibold bg-night-midnight text-night-dim border border-night-border">
                                    KONVERSI &amp; IKLAN
                                </span>
                                <span class="text-xs font-mono text-night-dim">
                                    &bull; 1 &ndash; 3 Hari Kerja
                                </span>
                            </div>
                            <h2 class="text-2xl sm:text-3xl font-bold text-night-text tracking-tight">
                                Website & Web Application Development
                            </h2>
                            <p class="text-xs sm:text-sm text-night-muted leading-relaxed max-w-2xl">
                                Solusi pembuatan landing page performa tinggi yang dirancang spesifik untuk kampanye promosi, iklan Google/Meta Ads, dan peluncuran produk dengan struktur psikologi konversi AIDA.
                            </p>
                        </div>

                        <div class="flex flex-wrap items-center gap-3 flex-shrink-0">
                            <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20tertarik%20dengan%20layanan%20Website%20%26%20Landing%20Page%20Development" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 text-xs font-semibold btn-pill-primary">
                                Konsultasi Layanan &rarr;
                            </a>
                            <a href="{{ route('pricing') }}" class="px-5 py-2.5 text-xs font-semibold btn-pill-secondary">
                                Lihat Paket Harga
                            </a>
                        </div>
                    </div>

                    <!-- 3-Column Architecture Matrix -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 text-xs">
                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Tantangan &amp; Solusi
                            </span>
                            <p class="text-night-muted leading-relaxed">
                                Iklan boncos karena website lambat atau tidak terstruktur? Kami bangun landing page yang memuat dalam &lt; 1.5 detik, mobile-first, dan langsung memicu pengunjung menekan tombol beli/WhatsApp.
                            </p>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Deliverables &amp; Fitur
                            </span>
                            <ul class="space-y-1.5 text-night-text">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Layout Responsif Mobile &amp; Desktop
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Direct WhatsApp &amp; Lead Magnet Form
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Integrasi Meta Pixel &amp; Google Analytics
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Animasi Mikro Halus &amp; Interaktif
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Spesifikasi Teknologi
                            </span>
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Laravel 11</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Tailwind CSS</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Alpine.js</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Three.js 3D</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Cloudflare SSL</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-2 font-medium">
                                Tersedia paket Starter mulai Rp 500.000
                            </div>
                        </div>
                    </div>
                </article>

                <!-- 02. Website Company Profile & Portal Korporat -->
                <article class="service-card studio-card p-5 sm:p-8 lg:p-10 rounded-2xl sm:rounded-3xl border border-night-border hover:border-night-text transition-all duration-300" data-category="web">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                        <div class="space-y-2">
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-xs font-bold text-emerald-600 dark:text-emerald-400">02</span>
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono tracking-wider uppercase font-semibold bg-night-midnight text-night-dim border border-night-border">
                                    KREDIBILITAS &amp; BRAND
                                </span>
                                <span class="text-xs font-mono text-night-dim">
                                    &bull; 3 &ndash; 7 Hari Kerja
                                </span>
                            </div>
                            <h2 class="text-2xl sm:text-3xl font-bold text-night-text tracking-tight">
                                Website Company Profile &amp; Lembaga
                            </h2>
                            <p class="text-xs sm:text-sm text-night-muted leading-relaxed max-w-2xl">
                                Membangun otoritas dan citra profesional perusahaan di mata investor, mitra B2B, dan klien dengan situs resmi berestetika korporat modern yang elegan dan responsif.
                            </p>
                        </div>

                        <div class="flex flex-wrap items-center gap-3 flex-shrink-0">
                            <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20tertarik%20dengan%20layanan%20Website%20Company%20Profile" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 text-xs font-semibold btn-pill-primary">
                                Konsultasi Layanan &rarr;
                            </a>
                            <a href="{{ route('pricing') }}" class="px-5 py-2.5 text-xs font-semibold btn-pill-secondary">
                                Lihat Paket Harga
                            </a>
                        </div>
                    </div>

                    <!-- 3-Column Architecture Matrix -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 text-xs">
                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Tantangan &amp; Solusi
                            </span>
                            <p class="text-night-muted leading-relaxed">
                                Calon mitra ragu bekerjasama karena website perusahaan terkesan usang atau belum memiliki portal resmi? Kami bangun portal resmi berwibawa dengan navigasi rapi dan keamanan SSL.
                            </p>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Deliverables &amp; Fitur
                            </span>
                            <ul class="space-y-1.5 text-night-text">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Multi-Halaman: Home, About, Services, Karir
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Setup Domain &amp; Email Bisnis (@perusahaan.com)
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Formulir Inquiry Masuk Langsung ke Email
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Optimasi SEO On-Page &amp; Google Index
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Spesifikasi Teknologi
                            </span>
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">HTML5 Semantik</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Tailwind CSS</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">OpenGraph Meta</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">DKIM / SPF Email</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-2 font-medium">
                                Paket Company Profile mulai Rp 1.250.000
                            </div>
                        </div>
                    </div>
                </article>

                <!-- 03. Toko Online (E-Commerce) & WhatsApp Catalog -->
                <article class="service-card studio-card p-5 sm:p-8 lg:p-10 rounded-2xl sm:rounded-3xl border border-night-border hover:border-night-text transition-all duration-300" data-category="ecommerce">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                        <div class="space-y-2">
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-xs font-bold text-emerald-600 dark:text-emerald-400">03</span>
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono tracking-wider uppercase font-semibold bg-night-midnight text-night-dim border border-night-border">
                                    PENJUALAN &amp; TRANSAKSI
                                </span>
                                <span class="text-xs font-mono text-night-dim">
                                    &bull; 5 &ndash; 10 Hari Kerja
                                </span>
                            </div>
                            <h2 class="text-2xl sm:text-3xl font-bold text-night-text tracking-tight">
                                Toko Online (E-Commerce) &amp; Katalog WhatsApp
                            </h2>
                            <p class="text-xs sm:text-sm text-night-muted leading-relaxed max-w-2xl">
                                Miliki channel penjualan mandiri tanpa potongan komisi marketplace. Dilengkapi katalog varian produk, keranjang belanja instan, dan integrasi order otomatis ke WhatsApp &amp; payment gateway.
                            </p>
                        </div>

                        <div class="flex flex-wrap items-center gap-3 flex-shrink-0">
                            <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20tertarik%20dengan%20layanan%20Toko%20Online%20E-Commerce" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 text-xs font-semibold btn-pill-primary">
                                Konsultasi Layanan &rarr;
                            </a>
                            <a href="{{ route('pricing') }}" class="px-5 py-2.5 text-xs font-semibold btn-pill-secondary">
                                Lihat Paket Harga
                            </a>
                        </div>
                    </div>

                    <!-- 3-Column Architecture Matrix -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 text-xs">
                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Tantangan &amp; Solusi
                            </span>
                            <p class="text-night-muted leading-relaxed">
                                Biaya admin marketplace menggerus margin laba? Toko online mandiri memberi kontrol 100% atas database pelanggan, penentuan promo eksklusif, dan pembayaran langsung ke rekening Anda.
                            </p>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Deliverables &amp; Fitur
                            </span>
                            <ul class="space-y-1.5 text-night-text">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Katalog Varian Warna &amp; Ukuran
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Checkout Direct WhatsApp (Format Rapi)
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Dashboard Admin Kelola Produk &amp; Stok
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Opsi Integrasi QRIS &amp; Virtual Account
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Spesifikasi Teknologi
                            </span>
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Laravel E-Commerce</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">MySQL Relasional</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Midtrans Gateway</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">WhatsApp API</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-2 font-medium">
                                Paket E-Commerce mulai Rp 2.450.000
                            </div>
                        </div>
                    </div>
                </article>

                <!-- 04. SaaS Product Development & Aplikasi Web Custom -->
                <article class="service-card studio-card p-5 sm:p-8 lg:p-10 rounded-2xl sm:rounded-3xl border border-night-border hover:border-night-text transition-all duration-300" data-category="saas">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                        <div class="space-y-2">
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-xs font-bold text-emerald-600 dark:text-emerald-400">04</span>
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono tracking-wider uppercase font-semibold bg-night-midnight text-night-dim border border-night-border">
                                    SaaS &amp; OPERASIONAL BISNIS
                                </span>
                                <span class="text-xs font-mono text-night-dim">
                                    &bull; 10 &ndash; 20 Hari Kerja
                                </span>
                            </div>
                            <h2 class="text-2xl sm:text-3xl font-bold text-night-text tracking-tight">
                                SaaS Product Development &amp; Aplikasi Web Custom
                            </h2>
                            <p class="text-xs sm:text-sm text-night-muted leading-relaxed max-w-2xl">
                                Rekayasa sistem web dengan logika bisnis kompleks, manajemen database relasional, dashboard analitik eksekutif, dan arsitektur modular yang siap di-scale ke ribuan pengguna aktif.
                            </p>
                        </div>

                        <div class="flex flex-wrap items-center gap-3 flex-shrink-0">
                            <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20tertarik%20dengan%20layanan%20SaaS%20Product%20Development" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 text-xs font-semibold btn-pill-primary">
                                Konsultasi Layanan &rarr;
                            </a>
                            <a href="{{ route('pricing') }}" class="px-5 py-2.5 text-xs font-semibold btn-pill-secondary">
                                Lihat Paket Harga
                            </a>
                        </div>
                    </div>

                    <!-- 3-Column Architecture Matrix -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 text-xs">
                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Tantangan &amp; Solusi
                            </span>
                            <p class="text-night-muted leading-relaxed">
                                Pencatatan spreadsheet manual rawan korup dan membingungkan staf? Kami bangun aplikasi web tersentralisasi dengan kalkulasi presisi, kontrol hak akses bertingkat, dan sinkronisasi real-time.
                            </p>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Deliverables &amp; Fitur
                            </span>
                            <ul class="space-y-1.5 text-night-text">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Otentikasi Multi-Role &amp; Audit Log
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Dashboard Metrik &amp; Visualisasi Grafik
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Fitur Ekspor Data ke Excel &amp; PDF
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> RESTful API &amp; Webhook Integration
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Spesifikasi Teknologi
                            </span>
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Laravel 11 MVC</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">PostgreSQL / MySQL</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Redis Caching</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Chart.js</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-2 font-medium">
                                Paket SaaS MVP mulai Rp 4.500.000
                            </div>
                        </div>
                    </div>
                </article>

                <!-- 05. Modernisasi, Redesain & Speed Optimization -->
                <article class="service-card studio-card p-5 sm:p-8 lg:p-10 rounded-2xl sm:rounded-3xl border border-night-border hover:border-night-text transition-all duration-300" data-category="maintenance">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                        <div class="space-y-2">
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-xs font-bold text-emerald-600 dark:text-emerald-400">05</span>
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono tracking-wider uppercase font-semibold bg-night-midnight text-night-dim border border-night-border">
                                    PERFORMA &amp; REBRANDING
                                </span>
                                <span class="text-xs font-mono text-night-dim">
                                    &bull; 2 &ndash; 5 Hari Kerja
                                </span>
                            </div>
                            <h2 class="text-2xl sm:text-3xl font-bold text-night-text tracking-tight">
                                Redesain &amp; Modernisasi Website Lama
                            </h2>
                            <p class="text-xs sm:text-sm text-night-muted leading-relaxed max-w-2xl">
                                Menyegarkan tampilan visual website lawas Anda agar selaras dengan tren minimalis modern, memperbaiki tata letak di smartphone, dan mendongkrak skor PageSpeed Google hingga lolos Core Web Vitals.
                            </p>
                        </div>

                        <div class="flex flex-wrap items-center gap-3 flex-shrink-0">
                            <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20tertarik%20dengan%20layanan%20Redesain%20dan%20Modernisasi%20Website" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 text-xs font-semibold btn-pill-primary">
                                Konsultasi Layanan &rarr;
                            </a>
                            <a href="{{ route('pricing') }}" class="px-5 py-2.5 text-xs font-semibold btn-pill-secondary">
                                Lihat Paket Harga
                            </a>
                        </div>
                    </div>

                    <!-- 3-Column Architecture Matrix -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 text-xs">
                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Tantangan &amp; Solusi
                            </span>
                            <p class="text-night-muted leading-relaxed">
                                Website terasa lambat, tampilan kaku di HP, dan SEO terus anjlok? Kami rekonstruksi antarmuka UI/UX dan optimasi aset agar pengunjung betah dan angka konversi melonjak kembali.
                            </p>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Deliverables &amp; Fitur
                            </span>
                            <ul class="space-y-1.5 text-night-text">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Desain UI/UX Baru yang Bersih &amp; Estetik
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Kompresi Gambar Modern (WebP / AVIF)
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Garansi Skor PageSpeed 90+ Hijau
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Struktur URL Lama Tetap Aman (No 404)
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Spesifikasi Teknologi
                            </span>
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Lighthouse Audit</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Vite Asset Pipeline</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Gzip/Brotli Compression</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">CDN Edge Cache</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-2 font-medium">
                                Paket Speed Booster mulai Rp 490.000
                            </div>
                        </div>
                    </div>
                </article>

                <!-- 06. Workflow Automation & Systems Integration -->
                <article class="service-card studio-card p-5 sm:p-8 lg:p-10 rounded-2xl sm:rounded-3xl border border-night-border hover:border-night-text transition-all duration-300" data-category="maintenance">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                        <div class="space-y-2">
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-xs font-bold text-emerald-600 dark:text-emerald-400">06</span>
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono tracking-wider uppercase font-semibold bg-night-midnight text-night-dim border border-night-border">
                                    INFRASTRUKTUR &amp; PEMELIHARAAN
                                </span>
                                <span class="text-xs font-mono text-night-dim">
                                    &bull; Layanan Berkelanjutan
                                </span>
                            </div>
                            <h2 class="text-2xl sm:text-3xl font-bold text-night-text tracking-tight">
                                Workflow Automation & Systems Integration
                            </h2>
                            <p class="text-xs sm:text-sm text-night-muted leading-relaxed max-w-2xl">
                                Pastikan website dan infrastruktur cloud Anda beroperasi prima 24/7. Layanan mencakup monitoring uptime proaktif, backup teratur, penanganan error darurat, dan integrasi otomatisasi alur kerja.
                            </p>
                        </div>

                        <div class="flex flex-wrap items-center gap-3 flex-shrink-0">
                            <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20tertarik%20dengan%20layanan%20Workflow%20Automation%20%26%20Maintenance" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 text-xs font-semibold btn-pill-primary">
                                Konsultasi Layanan &rarr;
                            </a>
                            <a href="{{ route('pricing') }}" class="px-5 py-2.5 text-xs font-semibold btn-pill-secondary">
                                Lihat Paket Harga
                            </a>
                        </div>
                    </div>

                    <!-- 3-Column Architecture Matrix -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 text-xs">
                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Tantangan &amp; Solusi
                            </span>
                            <p class="text-night-muted leading-relaxed">
                                Tidak memiliki tim teknis in-house untuk memantau keamanan server dan backup berkala? Kami menjadi divisi engineering eksternal Anda yang siap siaga menjaga kestabilan situs.
                            </p>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Deliverables &amp; Fitur
                            </span>
                            <ul class="space-y-1.5 text-night-text">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Pemantauan Uptime Server 24/7 Real-Time
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Backup Database &amp; File Otomatis Berkala
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Patching Keamanan &amp; Proteksi Anti-Malware
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-500">&check;</span> Dukungan Teknis Prioritas via WhatsApp
                                </li>
                            </ul>
                        </div>

                        <div class="space-y-2 p-4 rounded-xl bg-night-midnight border border-night-border">
                            <span class="font-mono text-night-dim uppercase tracking-wider font-semibold block text-[11px]">
                                Spesifikasi Teknologi
                            </span>
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Uptime Robot</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Automated Crons</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Cloudflare WAF</span>
                                <span class="px-2 py-1 rounded-md text-[10px] font-mono bg-night-surface border border-night-border text-night-text">Git Deployment</span>
                            </div>
                            <div class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono mt-2 font-medium">
                                Paket Monthly Care mulai Rp 350.000 / bulan
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- ENGINEERING EXCELLENCE & STANDARDS                                        -->
    <!-- ========================================================================= -->
    <section class="reveal-init py-12 sm:py-24 px-4 sm:px-8 bg-night-midnight border-t border-night-border">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-10 sm:mb-14">
                <span class="text-xs font-mono uppercase tracking-[0.2em] text-emerald-600 dark:text-emerald-400 font-bold block mb-3">
                    STANDAR REKAYASA SISTEM
                </span>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-night-text tracking-tight mb-4">
                    Mengapa Memilih Standar Rekayasa OXID Labs?
                </h2>
                <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                    Kami tidak menggunakan builder berat, tema instan yang lambat, atau plugin bajakan. Setiap solusi dirancang dengan kode modular yang ramping, aman, dan siap menghadapi beban pengunjung nyata.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <!-- Standard 1 -->
                <div class="p-5 sm:p-6 rounded-2xl bg-night-surface border border-night-border space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-night-midnight border border-night-border flex items-center justify-center text-emerald-500 font-mono font-bold text-sm">
                        01
                    </div>
                    <h3 class="text-base font-bold text-night-text">Kecepatan &amp; Core Web Vitals</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Aset dioptimasi maksimal, waktu render di bawah 1.5 detik untuk memastikan pengalaman belanja dan baca tanpa jeda di seluruh jenis ponsel.
                    </p>
                </div>

                <!-- Standard 2 -->
                <div class="p-5 sm:p-6 rounded-2xl bg-night-surface border border-night-border space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-night-midnight border border-night-border flex items-center justify-center text-emerald-500 font-mono font-bold text-sm">
                        02
                    </div>
                    <h3 class="text-base font-bold text-night-text">Arsitektur Kode Bersih</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Dibangun dengan standar Laravel &amp; Tailwind terkini yang terstruktur rapi. Sangat mudah dirawat dan dikembangkan oleh tim developer mana pun.
                    </p>
                </div>

                <!-- Standard 3 -->
                <div class="p-5 sm:p-6 rounded-2xl bg-night-surface border border-night-border space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-night-midnight border border-night-border flex items-center justify-center text-emerald-500 font-mono font-bold text-sm">
                        03
                    </div>
                    <h3 class="text-base font-bold text-night-text">Keamanan Berlapis Cloud</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Enkripsi SSL penuh, proteksi dari serangan bot dan DDoS melalui edge Cloudflare, serta sanitasi ketat terhadap form masukan data pengguna.
                    </p>
                </div>

                <!-- Standard 4 -->
                <div class="p-5 sm:p-6 rounded-2xl bg-night-surface border border-night-border space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-night-midnight border border-night-border flex items-center justify-center text-emerald-500 font-mono font-bold text-sm">
                        04
                    </div>
                    <h3 class="text-base font-bold text-night-text">100% Hak Milik Klien</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Seluruh source code, database, dan akses hosting diserahkan penuh kepada Anda tanpa biaya sewa sistem tahunan tersembunyi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SYSTEM DELIVERY PIPELINE                                                  -->
    <!-- ========================================================================= -->
    <section class="reveal-init py-12 sm:py-24 px-4 sm:px-8 bg-night-base border-t border-night-border">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-10 sm:mb-14">
                <span class="text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold block mb-3">
                    METODOLOGI PENGERJAAN
                </span>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-night-text tracking-tight mb-4">
                    Alur Produksi Proyek Transparan
                </h2>
                <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                    Setiap proyek dikerjakan melalui tahapan terstruktur dengan komunikasi berkala agar hasil akhir tepat waktu dan sesuai spesifikasi Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <!-- Step 1 -->
                <div class="relative p-5 sm:p-6 rounded-2xl bg-night-surface border border-night-border">
                    <div class="text-[11px] font-mono font-bold text-night-dim mb-3">LANGKAH 01</div>
                    <h4 class="text-sm font-bold text-night-text mb-2">Discovery &amp; Briefing</h4>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Diskusi mendalam mengenai tujuan bisnis, profil audiens, serta perumusan struktur halaman dan fitur yang diperlukan.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="relative p-5 sm:p-6 rounded-2xl bg-night-surface border border-night-border">
                    <div class="text-[11px] font-mono font-bold text-night-dim mb-3">LANGKAH 02</div>
                    <h4 class="text-sm font-bold text-night-text mb-2">UI/UX &amp; Prototyping</h4>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Penyusunan tata letak visual modern, pemilihan tipografi, copywriting pesan promosi, dan skema warna kontras tinggi.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="relative p-5 sm:p-6 rounded-2xl bg-night-surface border border-night-border">
                    <div class="text-[11px] font-mono font-bold text-night-dim mb-3">LANGKAH 03</div>
                    <h4 class="text-sm font-bold text-night-text mb-2">Clean Coding &amp; Integrasi</h4>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Pengembangan kode berkinerja tinggi, penghubungan basis data, integrasi tombol WhatsApp, formulir, atau payment gateway.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="relative p-5 sm:p-6 rounded-2xl bg-night-surface border border-night-border">
                    <div class="text-[11px] font-mono font-bold text-night-dim mb-3">LANGKAH 04</div>
                    <h4 class="text-sm font-bold text-night-text mb-2">Testing, Go-Live &amp; Handover</h4>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Uji coba menyeluruh di berbagai resolusi layar, setup domain dan SSL, peluncuran online, serta serah terima berkas proyek.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- BOTTOM CALL TO ACTION                                                     -->
    <!-- ========================================================================= -->
    <section class="reveal-init py-12 sm:py-24 px-4 sm:px-8 bg-night-base border-t border-night-border">
        <div class="max-w-7xl mx-auto">
            <div class="rounded-2xl sm:rounded-3xl p-6 sm:p-12 lg:p-14 bg-[#0E0E10] text-white border border-white/10 shadow-2xl relative overflow-hidden">
                <!-- Ambient Subtle Glow -->
                <div class="absolute -top-24 -right-20 w-80 h-80 rounded-full bg-emerald-500/10 blur-3xl pointer-events-none"></div>

                <div class="relative z-10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 sm:gap-8">
                    <div class="max-w-2xl space-y-3">
                        <span class="inline-block px-3 py-1 rounded-full bg-white/5 border border-white/10 text-[10px] font-mono uppercase tracking-widest text-emerald-400 font-bold">
                            KONSULTASI GRATIS &bull; TANPA KOMITMEN
                        </span>
                        <h3 class="text-2xl sm:text-3xl md:text-4xl font-extrabold tracking-tight">
                            Siap Membangun Website &amp; Solusi Digital Terbaik untuk Bisnis Anda?
                        </h3>
                        <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                            Diskusikan spesifikasi kebutuhan website Anda bersama tim engineer OXID Labs. Kami berikan rekomendasi solusi arsitektur yang paling efektif dan efisien sesuai skala anggaran Anda.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 w-full lg:w-auto flex-shrink-0">
                        <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20ingin%20konsultasi%20layanan%20rekayasa%20website" target="_blank" rel="noopener noreferrer" class="px-6 py-3.5 text-xs font-semibold btn-pill-white text-center">
                            Chat WhatsApp Langsung &rarr;
                        </a>
                        <a href="{{ route('pricing') }}" class="px-6 py-3.5 text-xs font-semibold rounded-full border border-white/20 bg-white/5 hover:bg-white/10 text-white transition-all duration-200 text-center">
                            Lihat Katalog Harga
                        </a>
                        <a href="{{ route('contact') }}" class="px-6 py-3.5 text-xs font-semibold rounded-full border border-white/20 bg-white/5 hover:bg-white/10 text-white transition-all duration-200 text-center">
                            Kirim Formulir Brief
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Filter Interactive Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('#service-filter-tabs .service-tab');
            const cards = document.querySelectorAll('#services-container .service-card');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const filter = tab.getAttribute('data-filter');

                    // Active tab style toggle
                    tabs.forEach(t => {
                        t.classList.remove('active', 'bg-[#111113]', 'text-white', 'dark:bg-white', 'dark:text-black', 'shadow-sm');
                        t.classList.add('text-night-muted', 'bg-night-surface', 'border', 'border-night-border');
                    });
                    tab.classList.add('active', 'bg-[#111113]', 'text-white', 'dark:bg-white', 'dark:text-black', 'shadow-sm');
                    tab.classList.remove('text-night-muted', 'bg-night-surface', 'border-night-border');

                    // Filter cards
                    cards.forEach(card => {
                        const category = card.getAttribute('data-category');
                        if (filter === 'all' || category === filter) {
                            card.style.display = 'block';
                            card.style.opacity = '1';
                        } else {
                            card.style.display = 'none';
                            card.style.opacity = '0';
                        }
                    });
                });
            });
        });
    </script>
@endsection
