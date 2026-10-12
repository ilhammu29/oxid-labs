@extends('layouts.app')

@section('title', 'Kemampuan Rekayasa & Standar Teknis — OXID LABS')
@section('meta_description', 'Standar rekayasa perangkat lunak, metodologi pengembangan, dan arsitektur teknis yang diterapkan oleh OXID Labs.')

@section('content')
    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-20">
        
        <!-- Page Header -->
        <div class="max-w-3xl mb-16">
            <span class="inline-block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-3">
                KEMAMPUAN REKAYASA &amp; STANDAR TEKNIS
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-night-text tracking-tight mb-4">
                How We Architect
            </h1>
            <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                Pendekatan rekayasa terstruktur yang memadukan kode bersih, kecepatan performa, estetika modern, dan keandalan operasional jangka panjang.
            </p>
        </div>

        <!-- System Delivery Pipeline Flow -->
        <div class="mb-20">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-6">
                SYSTEM DELIVERY PIPELINE
            </span>
            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="studio-card p-5 border-l-4 border-l-slate-900 dark:border-l-white">
                    <span class="text-[10px] font-mono text-night-dim uppercase font-bold">FASE 01</span>
                    <h3 class="text-sm font-bold text-night-text mt-1 mb-1.5">Discovery & Requirements</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Membedah tujuan bisnis, data target audiens, dan menyusun spesifikasi kebutuhan sistem yang jelas.
                    </p>
                </div>

                <div class="studio-card p-5 border-l-4 border-l-sky-500">
                    <span class="text-[10px] font-mono text-sky-500 uppercase font-bold">FASE 02</span>
                    <h3 class="text-sm font-bold text-night-text mt-1 mb-1.5">Desain &amp; UX</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Menyusun tata letak ergonomis, hierarki visual konversi, dan prototipe interaktif modern.
                    </p>
                </div>

                <div class="studio-card p-5 border-l-4 border-l-indigo-500">
                    <span class="text-[10px] font-mono text-indigo-500 uppercase font-bold">FASE 03</span>
                    <h3 class="text-sm font-bold text-night-text mt-1 mb-1.5">Kode Bersih</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Pembangunan frontend responsif dan backend modular dengan optimasi query dan performa tinggi.
                    </p>
                </div>

                <div class="studio-card p-5 border-l-4 border-l-emerald-500">
                    <span class="text-[10px] font-mono text-emerald-500 uppercase font-bold">FASE 04</span>
                    <h3 class="text-sm font-bold text-night-text mt-1 mb-1.5">Integrasi &amp; QA</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Pengujian menyeluruh lintas perangkat, pengujian API/payment gateway, dan proteksi anti-spam.
                    </p>
                </div>

                <div class="studio-card p-5 border-l-4 border-l-slate-700 dark:border-l-slate-300">
                    <span class="text-[10px] font-mono text-night-dim uppercase font-bold">FASE 05</span>
                    <h3 class="text-sm font-bold text-night-text mt-1 mb-1.5">Peluncuran</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Deployment ke server hosting, aktivasi sertifikat SSL HTTPS, optimasi SEO, dan serah terima panduan.
                    </p>
                </div>
            </div>
        </div>

        <!-- 6 Foundational Disciplines -->
        <div class="mb-20">
            <span class="block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-6">
                DISIPLIN UTAMA KAMI
            </span>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <article class="studio-card p-7 space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-night-text">Kecepatan Sub-1.5 Detik</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Aset gambar terkompresi otomatis, caching agresif, dan arsitektur CSS/JS yang ringan membuat website memuat seketika di koneksi mobile.
                    </p>
                </article>

                <article class="studio-card p-7 space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-night-text">Ergonomi Mobile-First</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Desain responsif yang dirancang khusus untuk kenyamanan ibu jari di smartphone, tombol mudah ditekan, dan tipografi mudah dibaca.
                    </p>
                </article>

                <article class="studio-card p-7 space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-night-text">Keamanan &amp; Perlindungan Data</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Sertifikat SSL standar, proteksi CSRF form, filter anti-spam honeypot, dan pemisahan file aplikasi dari direktori publik server.
                    </p>
                </article>

                <article class="studio-card p-7 space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-night-text">Kode Bersih &amp; Terstruktur</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Dibangun dengan standar modern (Laravel, Tailwind CSS, Three.js) tanpa ketergantungan plugin pihak ketiga yang membengkak.
                    </p>
                </article>

                <article class="studio-card p-7 space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1 3 3 3h10c2 0 3-1 3-3V7c0-2-1-3-3-3H7C5 4 4 5 4 7z"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-night-text">Optimasi SEO On-Page</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Tag meta OpenGraph, struktur heading semantik h1-h3, sitemap, dan markup schema yang memudahkan mesin pencari Google membaca website.
                    </p>
                </article>

                <article class="studio-card p-7 space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-white/10 flex items-center justify-center text-slate-800 dark:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-night-text">Kemudahan Scale-Up</h3>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Arsitektur modular yang mempermudah penambahan modul pembayaran, area member, dasbor analitik, atau migrasi hosting tanpa kendala.
                    </p>
                </article>

            </div>
        </div>

        <!-- Measurable Performance Metrics Grid -->
        <div class="rounded-2xl p-8 sm:p-12 bg-slate-900 text-white shadow-xl">
            <div class="max-w-2xl mb-10">
                <span class="text-xs font-mono text-cyan-400 font-bold uppercase tracking-widest">METRIK PERFORMA</span>
                <h3 class="text-2xl font-bold mt-1 text-white">Standar Mutu yang Terukur</h3>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                    <div class="text-3xl sm:text-4xl font-extrabold font-mono text-white mb-1">95+</div>
                    <div class="text-xs text-slate-300">Google Lighthouse Score</div>
                </div>
                <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                    <div class="text-3xl sm:text-4xl font-extrabold font-mono text-emerald-400 mb-1">&lt; 1.5s</div>
                    <div class="text-xs text-slate-300">Rata-rata Waktu Muat</div>
                </div>
                <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                    <div class="text-3xl sm:text-4xl font-extrabold font-mono text-white mb-1">100%</div>
                    <div class="text-xs text-slate-300">Responsif Seluler</div>
                </div>
                <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                    <div class="text-3xl sm:text-4xl font-extrabold font-mono text-cyan-400 mb-1">A+</div>
                    <div class="text-xs text-slate-300">Standar Keamanan SSL</div>
                </div>
            </div>
        </div>

    </div>
@endsection
