@extends('layouts.app')

@section('title', 'Kemampuan Rekayasa & Standar Teknis — OXID LABS')
@section('meta_description', 'Standar rekayasa perangkat lunak, metodologi pengembangan, dan arsitektur teknis yang diterapkan oleh OXID Labs.')

@section('content')
    <!-- ========================================================================= -->
    <!-- HERO SECTION: ARCHITECTURAL CAPABILITIES (Seamlessly integrated with header) -->
    <!-- ========================================================================= -->
    <section id="dark-hero-section" class="relative w-full pt-28 sm:pt-36 pb-16 sm:pb-24 bg-[#0E0E10] text-white border-b border-white/10 overflow-hidden select-none">
        <!-- Atmospheric Ambient Diffuse Glows -->
        <div class="absolute -top-32 -right-20 w-[550px] lg:w-[750px] h-[550px] lg:h-[750px] rounded-full bg-gradient-to-bl from-cyan-500/15 via-blue-500/10 to-transparent blur-[130px] pointer-events-none z-0"></div>
        <div class="absolute -bottom-32 -left-20 w-[450px] lg:w-[650px] h-[450px] lg:h-[650px] rounded-full bg-gradient-to-tr from-emerald-500/15 via-teal-500/5 to-transparent blur-[120px] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 relative z-10">
            <div class="max-w-3xl">
                <!-- Typographic Eyebrow (No badges) -->
                <div class="flex items-center gap-2.5 mb-6 font-mono text-[11px] tracking-[0.25em] text-zinc-400 uppercase">
                    <span class="w-1.5 h-1.5 bg-emerald-400"></span>
                    <span>ENGINEERING METHODOLOGY &bull; ARCHITECTURAL STANDARDS</span>
                </div>

                <!-- Main Headline (Contains 'How We Architect' for test assertion) -->
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight leading-[1.12] mb-6">
                    How We Architect <br>
                    <span class="bg-gradient-to-b from-white via-white to-zinc-400 bg-clip-text text-transparent">
                        Digital Systems Built for Scale
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-sm sm:text-base md:text-lg text-zinc-400 leading-relaxed font-normal mb-8 max-w-2xl">
                    Pendekatan rekayasa terstruktur yang memadukan kode bersih, kecepatan performa, estetika modern, dan keandalan operasional jangka panjang tanpa kompromi kualitas.
                </p>

                <!-- Value Proposition Trust Bar (Clean Architectural Grid, No Badges) -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2 font-mono text-xs text-zinc-300">
                    <div class="p-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-[10px] text-zinc-400 mb-0.5">// LATENCY</div>
                        <div class="font-bold text-white">Sub-1.0s First Paint</div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-[10px] text-zinc-400 mb-0.5">// SOVEREIGNTY</div>
                        <div class="font-bold text-white">100% Full Ownership</div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-[10px] text-zinc-400 mb-0.5">// HARDENING</div>
                        <div class="font-bold text-white">A+ Grade SSL &amp; Cloud</div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-[10px] text-zinc-400 mb-0.5">// MODULARITY</div>
                        <div class="font-bold text-white">Zero Plugin Bloat</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- MAIN CAPABILITIES CONTENT CONTAINER                                       -->
    <!-- ========================================================================= -->
    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24 space-y-24">

        <!-- ===================================================================== -->
        <!-- SECTION 1: SYSTEM DELIVERY PIPELINE (Required Test String)            -->
        <!-- ===================================================================== -->
        <section class="reveal-init space-y-10">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-6 border-b border-night-border">
                <div class="max-w-2xl space-y-2">
                    <div class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-500 font-semibold">
                        // SYSTEM DELIVERY PIPELINE
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                        Lima Fase Eksekusi Presisi Dari Brief Menuju Produksi
                    </h2>
                </div>
                <p class="text-xs sm:text-sm text-night-muted max-w-md leading-relaxed">
                    Setiap modul dibangun melalui alur rekayasa deterministik untuk mengeliminasi celah keamanan, bug tersembunyi, dan degradasi performa.
                </p>
            </div>

            <!-- Pipeline Cards (5 Phases Flow) -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                
                <!-- Phase 01: Discovery & Requirements (Required Test String) -->
                <div class="reveal-init delay-100 studio-card p-6 border-t-2 border-t-zinc-900 dark:border-t-white flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between font-mono text-[11px] text-night-dim">
                            <span class="font-bold text-night-text">PHASE 01</span>
                            <span>01 / 05</span>
                        </div>
                        <h3 class="text-base font-bold text-night-text">Discovery &amp; Requirements</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Membedah tujuan komersial bisnis, target demografi audiens, dan menyusun spesifikasi kebutuhan teknis tanpa asumsi spekulatif.
                        </p>
                    </div>
                    <div class="pt-6 mt-4 border-t border-night-border font-mono text-[10px] text-night-dim space-y-1">
                        <div>&mdash; Scope Blueprint</div>
                        <div>&mdash; Technical Architecture RFC</div>
                    </div>
                </div>

                <!-- Phase 02: Desain & UX Prototyping -->
                <div class="reveal-init delay-150 studio-card p-6 border-t-2 border-t-sky-500 flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between font-mono text-[11px] text-sky-500">
                            <span class="font-bold">PHASE 02</span>
                            <span>02 / 05</span>
                        </div>
                        <h3 class="text-base font-bold text-night-text">Desain &amp; UX Prototyping</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Merancang user journey konversi tinggi, hierarki tipografi ergonomis, dan purwarupa interaktif yang ramah kenyamanan sentuhan seluler.
                        </p>
                    </div>
                    <div class="pt-6 mt-4 border-t border-night-border font-mono text-[10px] text-night-dim space-y-1">
                        <div>&mdash; Wireframe Ergonomis</div>
                        <div>&mdash; High-Fidelity UI System</div>
                    </div>
                </div>

                <!-- Phase 03: Arsitektur & Clean Code -->
                <div class="reveal-init delay-200 studio-card p-6 border-t-2 border-t-indigo-500 flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between font-mono text-[11px] text-indigo-500">
                            <span class="font-bold">PHASE 03</span>
                            <span>03 / 05</span>
                        </div>
                        <h3 class="text-base font-bold text-night-text">Arsitektur &amp; Clean Code</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Pengembangan frontend responsif dan backend modular berbasis framework teruji tanpa tumpukan plugin pihak ketiga yang membengkak.
                        </p>
                    </div>
                    <div class="pt-6 mt-4 border-t border-night-border font-mono text-[10px] text-night-dim space-y-1">
                        <div>&mdash; Semantik HTML5 / Tailwind</div>
                        <div>&mdash; Modular Clean Architecture</div>
                    </div>
                </div>

                <!-- Phase 04: Integrasi & Automated QA -->
                <div class="reveal-init delay-250 studio-card p-6 border-t-2 border-t-emerald-500 flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between font-mono text-[11px] text-emerald-500">
                            <span class="font-bold">PHASE 04</span>
                            <span>04 / 05</span>
                        </div>
                        <h3 class="text-base font-bold text-night-text">Integrasi &amp; QA</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Pengujian regresi lintas browser &amp; perangkat, audit sanitasi form, optimasi database, proteksi spam honeypot, dan integrasi WhatsApp.
                        </p>
                    </div>
                    <div class="pt-6 mt-4 border-t border-night-border font-mono text-[10px] text-night-dim space-y-1">
                        <div>&mdash; Cross-Device Testing</div>
                        <div>&mdash; Security &amp; Spam Filter</div>
                    </div>
                </div>

                <!-- Phase 05: Peluncuran & Cloud Hardening -->
                <div class="reveal-init delay-300 studio-card p-6 border-t-2 border-t-zinc-600 dark:border-t-zinc-400 flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between font-mono text-[11px] text-night-dim">
                            <span class="font-bold text-night-text">PHASE 05</span>
                            <span>05 / 05</span>
                        </div>
                        <h3 class="text-base font-bold text-night-text">Peluncuran &amp; Scale</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Deployment ke server produksi, aktivasi sertifikat HTTPS SSL, pendaftaran Google Search Console, dan serah terima kepemilikan kode utuh.
                        </p>
                    </div>
                    <div class="pt-6 mt-4 border-t border-night-border font-mono text-[10px] text-night-dim space-y-1">
                        <div>&mdash; SSL HTTPS &amp; DNS Cloud</div>
                        <div>&mdash; 100% Source Code Transfer</div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- SECTION 2: 6 FOUNDATIONAL ENGINEERING DISCIPLINES                     -->
        <!-- ===================================================================== -->
        <section class="reveal-init space-y-10">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-6 border-b border-night-border">
                <div class="max-w-2xl space-y-2">
                    <div class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-500 font-semibold">
                        // DISIPLIN UTAMA KAMI
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                        Enam Standar Mutu Rekayasa Tanpa Kompromi
                    </h2>
                </div>
                <p class="text-xs sm:text-sm text-night-muted max-w-md leading-relaxed">
                    Kami menolak jalan pintas template instan demi membangun pondasi teknis yang cepat, aman, dan mudah dipelihara hingga bertahun-tahun.
                </p>
            </div>

            <!-- 6 Disciplines Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- 01. Kecepatan Sub-1.5 Detik -->
                <article class="reveal-init delay-100 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <span class="font-mono text-xs text-night-dim">01 // LATENCY</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Kecepatan Sub-1.5 Detik</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Kompresi aset otomatis, purge CSS tanpa sampah kode, dan arsitektur caching agresif memastikan website terbuka seketika bahkan pada jaringan seluler 4G yang terbatas.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border font-mono text-xs text-night-dim space-y-1.5">
                        <li>&check; Gambar Modern WebP / AVIF</li>
                        <li>&check; Zero Render-Blocking CSS</li>
                    </ul>
                </article>

                <!-- 02. Ergonomi Mobile-First -->
                <article class="reveal-init delay-150 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        </div>
                        <span class="font-mono text-xs text-night-dim">02 // ERGONOMICS</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Ergonomi Mobile-First</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Lebih dari 80% pengunjung bertransaksi lewat smartphone. Tata letak kami dioptimalkan khusus untuk jangkauan ibu jari (thumb-zone), tombol responsif, dan keterbacaan teks tanpa zoom.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border font-mono text-xs text-night-dim space-y-1.5">
                        <li>&check; Touch Targets &ge; 48px</li>
                        <li>&check; Smooth Viewport Dynamic Resizing</li>
                    </ul>
                </article>

                <!-- 03. Keamanan & Perlindungan Data -->
                <article class="reveal-init delay-200 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <span class="font-mono text-xs text-night-dim">03 // HARDENING</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Keamanan &amp; Perlindungan Data</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Sertifikat SSL TLS modern, proteksi CSRF ketat pada setiap form, filter anti-spam honeypot cerdas, serta pemisahan kode inti dari direktori publik server guna mencegah kebocoran data.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border font-mono text-xs text-night-dim space-y-1.5">
                        <li>&check; Honeypot Anti-Spam Bot Filter</li>
                        <li>&check; HTTPS Enforced &amp; Secure Headers</li>
                    </ul>
                </article>

                <!-- 04. Kode Bersih & Terstruktur -->
                <article class="reveal-init delay-250 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                        <span class="font-mono text-xs text-night-dim">04 // ARCHITECTURE</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Kode Bersih &amp; Terstruktur</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Dibangun dengan standar rekayasa modern tanpa ketergantungan plugin pihak ketiga yang rapuh. Arsitektur modular membuat kode mudah dibaca, diaudit, dan dikembangkan oleh developer mana pun.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border font-mono text-xs text-night-dim space-y-1.5">
                        <li>&check; Semantik Modern &amp; Reusable Components</li>
                        <li>&check; Bebas Ketergantungan CMS Rentan</li>
                    </ul>
                </article>

                <!-- 05. Optimasi SEO On-Page -->
                <article class="reveal-init delay-300 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1 3 3 3h10c2 0 3-1 3-3V7c0-2-1-3-3-3H7C5 4 4 5 4 7z"/></svg>
                        </div>
                        <span class="font-mono text-xs text-night-dim">05 // VISIBILITY</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Optimasi SEO On-Page</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Struktur heading semantik H1-H3 yang presisi, metadata OpenGraph untuk pratinjau media sosial WhatsApp &amp; LinkedIn, sitemap XML otomatis, dan markup schema yang disukai Google.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border font-mono text-xs text-night-dim space-y-1.5">
                        <li>&check; OpenGraph &amp; Rich Snippets Ready</li>
                        <li>&check; Google Search Console XML Sitemap</li>
                    </ul>
                </article>

                <!-- 06. Kemudahan Scale-Up -->
                <article class="reveal-init delay-400 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <span class="font-mono text-xs text-night-dim">06 // EXTENSIBILITY</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Kemudahan Scale-Up</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Arsitektur modular yang memudahkan ekspansi fitur di masa depan: penambahan modul pembayaran payment gateway, portal member, sistem booking, atau migrasi infrastruktur tanpa bongkar ulang.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border font-mono text-xs text-night-dim space-y-1.5">
                        <li>&check; Siap Integrasi Payment &amp; API Webhook</li>
                        <li>&check; Database Skalabel &amp; Mudah Dimigrasi</li>
                    </ul>
                </article>

            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- SECTION 3: MEASURABLE PERFORMANCE METRICS SCORECARD                   -->
        <!-- ===================================================================== -->
        <section class="reveal-init rounded-2xl p-8 sm:p-12 bg-[#0E0E10] text-white border border-white/10 shadow-2xl relative overflow-hidden">
            <!-- Ambient Glow -->
            <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-cyan-500/10 blur-[100px] pointer-events-none"></div>

            <div class="max-w-2xl mb-10 relative z-10 space-y-2">
                <div class="font-mono text-xs text-cyan-400 font-bold uppercase tracking-widest">
                    // METRIK PERFORMA &bull; OBJECTIVE BENCHMARKS
                </div>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                    Standar Mutu Rekayasa yang Terukur
                </h3>
                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                    Setiap website yang kami rilis diuji terhadap standar objektif industri internasional sebelum serah terima.
                </p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 text-center relative z-10">
                
                <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-white/20 transition-all duration-300">
                    <div class="text-3xl sm:text-5xl font-extrabold font-mono text-white mb-2">95+</div>
                    <div class="text-xs font-semibold text-zinc-200 mb-1">Google Lighthouse</div>
                    <div class="text-[11px] text-zinc-400 font-mono">Performance &amp; SEO</div>
                </div>

                <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-white/20 transition-all duration-300">
                    <div class="text-3xl sm:text-5xl font-extrabold font-mono text-emerald-400 mb-2">&lt; 1.5s</div>
                    <div class="text-xs font-semibold text-zinc-200 mb-1">Waktu Muat Halaman</div>
                    <div class="text-[11px] text-zinc-400 font-mono">Mobile 4G Network</div>
                </div>

                <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-white/20 transition-all duration-300">
                    <div class="text-3xl sm:text-5xl font-extrabold font-mono text-white mb-2">100%</div>
                    <div class="text-xs font-semibold text-zinc-200 mb-1">Responsif Seluler</div>
                    <div class="text-[11px] text-zinc-400 font-mono">Multi-Screen Testing</div>
                </div>

                <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-white/20 transition-all duration-300">
                    <div class="text-3xl sm:text-5xl font-extrabold font-mono text-cyan-400 mb-2">A+</div>
                    <div class="text-xs font-semibold text-zinc-200 mb-1">Keamanan SSL TLS</div>
                    <div class="text-[11px] text-zinc-400 font-mono">Industry Grade Standard</div>
                </div>

            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- SECTION 4: ARCHITECTURAL CTA (Zero badges)                             -->
        <!-- ===================================================================== -->
        <section class="reveal-init rounded-2xl p-8 sm:p-12 bg-night-surface border border-night-border hover:border-night-text transition-all duration-300 shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <div class="space-y-3 max-w-xl">
                <div class="font-mono text-xs uppercase tracking-widest text-zinc-500 font-semibold">
                    // KONSULTASI REKAYASA TEKNIS
                </div>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                    Diskusikan Arsitektur Proyek Anda Bersama Kami
                </h3>
                <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                    Dapatkan evaluasi teknis gratis, rekomendasi struktur sistem, dan estimasi transparan tanpa biaya komitmen di awal.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 w-full sm:w-auto flex-shrink-0">
                <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20ingin%20konsultasi%20mengenai%20arsitektur%20website" target="_blank" rel="noopener noreferrer" class="px-6 py-3.5 text-xs font-semibold rounded-full bg-emerald-600 hover:bg-emerald-700 text-white text-center shadow-sm transition-all duration-200 flex items-center justify-center gap-2">
                    <span>Chat WhatsApp (0895-1688-5651)</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="{{ route('pricing') }}" class="px-6 py-3.5 text-xs font-semibold btn-pill-secondary text-center">
                    Lihat Katalog Paket
                </a>
            </div>
        </section>

    </div>
@endsection
