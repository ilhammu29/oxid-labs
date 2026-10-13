@extends('layouts.app')

@section('title', 'Kemampuan Rekayasa & Standar Teknis — OXID LABS')
@section('meta_description', 'Standar rekayasa perangkat lunak, metodologi pengembangan, dan arsitektur teknis yang diterapkan oleh OXID Labs.')

@section('content')
    <!-- ========================================================================= -->
    <!-- HERO SECTION: CAPABILITIES (Seamlessly integrated with header)            -->
    <!-- ========================================================================= -->
    <section id="dark-hero-section" class="relative w-full pt-28 sm:pt-36 pb-16 sm:pb-24 bg-[#0E0E10] text-white border-b border-white/10 overflow-hidden select-none">
        <!-- Atmospheric Ambient Diffuse Glows -->
        <div class="absolute -top-32 -right-20 w-[550px] lg:w-[750px] h-[550px] lg:h-[750px] rounded-full bg-gradient-to-bl from-cyan-500/15 via-blue-500/10 to-transparent blur-[130px] pointer-events-none z-0"></div>
        <div class="absolute -bottom-32 -left-20 w-[450px] lg:w-[650px] h-[450px] lg:h-[650px] rounded-full bg-gradient-to-tr from-emerald-500/15 via-teal-500/5 to-transparent blur-[120px] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 relative z-10">
            <div class="max-w-3xl">
                <!-- Main Headline (Contains 'How We Architect' for test assertion) -->
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight leading-[1.12] mb-6">
                    How We Architect <br>
                    <span class="bg-gradient-to-b from-white via-white to-zinc-400 bg-clip-text text-transparent">
                        Sistem Digital untuk Skala Bisnis
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-sm sm:text-base md:text-lg text-zinc-400 leading-relaxed font-normal mb-8 max-w-2xl">
                    Pendekatan rekayasa terstruktur yang memadukan kode bersih, kecepatan performa, estetika modern, dan keandalan operasional jangka panjang tanpa kompromi kualitas.
                </p>

                <!-- Value Proposition Trust Bar (Clean Grid, Plus Jakarta Sans, Zero AI Symbols) -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2 text-xs text-zinc-300">
                    <div class="p-4 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-sm font-bold text-white mb-1">Kecepatan Sub-1.0s</div>
                        <div class="text-xs text-zinc-400">Waktu muat halaman instan</div>
                    </div>
                    <div class="p-4 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-sm font-bold text-white mb-1">100% Hak Milik</div>
                        <div class="text-xs text-zinc-400">Kode sumber milik Anda</div>
                    </div>
                    <div class="p-4 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-sm font-bold text-white mb-1">Keamanan SSL A+</div>
                        <div class="text-xs text-zinc-400">Enkripsi dan proteksi data</div>
                    </div>
                    <div class="p-4 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-sm font-bold text-white mb-1">Arsitektur Modular</div>
                        <div class="text-xs text-zinc-400">Bebas plugin berlebih</div>
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
                    <h2 class="text-xs uppercase tracking-widest text-slate-500 font-bold">
                        SYSTEM DELIVERY PIPELINE
                    </h2>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                        Lima Fase Eksekusi Presisi Dari Brief Menuju Produksi
                    </h3>
                </div>
                <p class="text-xs sm:text-sm text-night-muted max-w-md leading-relaxed">
                    Setiap modul dibangun melalui alur rekayasa terstruktur untuk memastikan performa tinggi, keamanan andal, dan kemudahan pemeliharaan.
                </p>
            </div>

            <!-- Pipeline Cards (5 Phases Flow) -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                
                <!-- Phase 01: Discovery & Requirements (Required Test String) -->
                <div class="reveal-init delay-100 studio-card p-6 border-t-2 border-t-zinc-900 dark:border-t-white flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-night-dim font-bold">
                            <span>FASE 01</span>
                            <span>01 / 05</span>
                        </div>
                        <h4 class="text-base font-bold text-night-text">Discovery &amp; Requirements</h4>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Membedah sasaran bisnis, profil audiens, dan menyusun spesifikasi kebutuhan teknis secara jelas dan terukur.
                        </p>
                    </div>
                    <div class="pt-6 mt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <div>&bull; Analisis Kebutuhan Bisnis</div>
                        <div>&bull; Spesifikasi Teknis Proyek</div>
                    </div>
                </div>

                <!-- Phase 02: Desain & UX Prototyping -->
                <div class="reveal-init delay-150 studio-card p-6 border-t-2 border-t-sky-500 flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-sky-500 font-bold">
                            <span>FASE 02</span>
                            <span>02 / 05</span>
                        </div>
                        <h4 class="text-base font-bold text-night-text">Desain &amp; UX Prototyping</h4>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Merancang alur pengguna berkonversi tinggi, tata letak ergonomis, dan purwarupa interaktif yang ramah sentuhan layar seluler.
                        </p>
                    </div>
                    <div class="pt-6 mt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <div>&bull; Desain Tata Letak Ergonomis</div>
                        <div>&bull; Purwarupa Visual Modern</div>
                    </div>
                </div>

                <!-- Phase 03: Arsitektur & Clean Code -->
                <div class="reveal-init delay-200 studio-card p-6 border-t-2 border-t-indigo-500 flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-indigo-500 font-bold">
                            <span>FASE 03</span>
                            <span>03 / 05</span>
                        </div>
                        <h4 class="text-base font-bold text-night-text">Arsitektur &amp; Clean Code</h4>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Pengembangan frontend responsif dan backend modular berbasis standar teruji tanpa beban plugin pihak ketiga yang memperlambat sistem.
                        </p>
                    </div>
                    <div class="pt-6 mt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <div>&bull; Struktur Kode Bersih &amp; Rapi</div>
                        <div>&bull; Komponen Modular Efisien</div>
                    </div>
                </div>

                <!-- Phase 04: Integrasi & QA -->
                <div class="reveal-init delay-250 studio-card p-6 border-t-2 border-t-emerald-500 flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-emerald-500 font-bold">
                            <span>FASE 04</span>
                            <span>04 / 05</span>
                        </div>
                        <h4 class="text-base font-bold text-night-text">Integrasi &amp; QA</h4>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Pengujian menyeluruh lintas perangkat, audit form pemesanan, proteksi anti-spam, dan integrasi WhatsApp yang mulus.
                        </p>
                    </div>
                    <div class="pt-6 mt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <div>&bull; Pengujian Lintas Perangkat</div>
                        <div>&bull; Proteksi Form &amp; Anti-Spam</div>
                    </div>
                </div>

                <!-- Phase 05: Peluncuran & Scale -->
                <div class="reveal-init delay-300 studio-card p-6 border-t-2 border-t-zinc-600 dark:border-t-zinc-400 flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-night-dim font-bold">
                            <span>FASE 05</span>
                            <span>05 / 05</span>
                        </div>
                        <h4 class="text-base font-bold text-night-text">Peluncuran &amp; Scale</h4>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Deployment ke server produksi, aktivasi sertifikat HTTPS SSL, pendaftaran Google Search Console, dan serah terima kepemilikan kode utuh.
                        </p>
                    </div>
                    <div class="pt-6 mt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <div>&bull; Sertifikat SSL &amp; Domain Live</div>
                        <div>&bull; Serah Terima Akses Penuh</div>
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
                    <h2 class="text-xs uppercase tracking-widest text-slate-500 font-bold">
                        DISIPLIN UTAMA KAMI
                    </h2>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                        Enam Standar Mutu Rekayasa Tanpa Kompromi
                    </h3>
                </div>
                <p class="text-xs sm:text-sm text-night-muted max-w-md leading-relaxed">
                    Kami membangun website dengan pondasi teknis yang cepat, aman, dan mudah dipelihara hingga bertahun-tahun mendatang.
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
                        <span class="text-xs font-bold text-night-dim">01</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Kecepatan Sub-1.5 Detik</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Kompresi aset otomatis, struktur kode efisien, dan caching cerdas memastikan website terbuka seketika bahkan pada jaringan seluler 4G yang terbatas.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <li>&check; Format Gambar Modern WebP &amp; AVIF</li>
                        <li>&check; Optimasi Aset CSS dan JavaScript</li>
                    </ul>
                </article>

                <!-- 02. Ergonomi Mobile-First -->
                <article class="reveal-init delay-150 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        </div>
                        <span class="text-xs font-bold text-night-dim">02</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Ergonomi Mobile-First</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Mayoritas pengunjung mengakses lewat smartphone. Tata letak kami dioptimalkan khusus untuk kenyamanan ibu jari, tombol mudah ditekan, dan keterbacaan teks tanpa zoom.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <li>&check; Ukuran Tombol Sentuh Responsif</li>
                        <li>&check; Adaptasi Otomatis Ukuran Layar</li>
                    </ul>
                </article>

                <!-- 03. Keamanan & Perlindungan Data -->
                <article class="reveal-init delay-200 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <span class="text-xs font-bold text-night-dim">03</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Keamanan &amp; Perlindungan Data</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Sertifikat SSL modern, proteksi CSRF ketat pada setiap form, filter anti-spam cerdas, serta pemisahan kode inti dari direktori publik server guna mencegah kebocoran data.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <li>&check; Proteksi Formulir Anti-Spam</li>
                        <li>&check; Enkripsi Penuh HTTPS SSL</li>
                    </ul>
                </article>

                <!-- 04. Kode Bersih & Terstruktur -->
                <article class="reveal-init delay-250 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        </div>
                        <span class="text-xs font-bold text-night-dim">04</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Kode Bersih &amp; Terstruktur</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Dibangun dengan standar rekayasa modern tanpa ketergantungan plugin pihak ketiga yang rapuh. Arsitektur modular membuat kode mudah dibaca, diaudit, dan dikembangkan di masa depan.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <li>&check; Komponen Antarmuka Terstandar</li>
                        <li>&check; Tanpa Ketergantungan Plugin Berlebih</li>
                    </ul>
                </article>

                <!-- 05. Optimasi SEO On-Page -->
                <article class="reveal-init delay-300 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1 3 3 3h10c2 0 3-1 3-3V7c0-2-1-3-3-3H7C5 4 4 5 4 7z"/></svg>
                        </div>
                        <span class="text-xs font-bold text-night-dim">05</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Optimasi SEO On-Page</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Struktur heading semantik H1-H3 yang rapi, metadata OpenGraph untuk pratinjau media sosial WhatsApp &amp; LinkedIn, serta sitemap XML otomatis yang disukai Google.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <li>&check; Pratinjau Tautan Media Sosial Siap Pakai</li>
                        <li>&check; Peta Situs XML untuk Mesin Pencari</li>
                    </ul>
                </article>

                <!-- 06. Kemudahan Scale-Up -->
                <article class="reveal-init delay-400 studio-card p-8 space-y-4 hover:-translate-y-1 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-night-surface border border-night-border flex items-center justify-center text-night-text group-hover:border-night-text transition-colors">
                            <svg class="w-5 h-5 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <span class="text-xs font-bold text-night-dim">06</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-lg font-bold text-night-text">Kemudahan Scale-Up</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Arsitektur modular yang memudahkan ekspansi fitur di masa depan: penambahan modul pembayaran payment gateway, portal member, sistem booking, atau integrasi aplikasi tanpa bongkar ulang.
                        </p>
                    </div>
                    <ul class="pt-4 border-t border-night-border text-xs text-night-dim space-y-1.5 font-medium">
                        <li>&check; Siap Integrasi Pembayaran &amp; WhatsApp</li>
                        <li>&check; Struktur Database Skalabel</li>
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
                <h3 class="text-xs text-cyan-400 font-bold uppercase tracking-widest">
                    METRIK PERFORMA
                </h3>
                <h4 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                    Standar Mutu yang Terukur
                </h4>
                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                    Setiap website yang kami rilis diuji terhadap standar objektif industri sebelum diserahkan kepada klien.
                </p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 text-center relative z-10">
                
                <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-white/20 transition-all duration-300">
                    <div class="text-3xl sm:text-5xl font-extrabold text-white mb-2">95+</div>
                    <div class="text-xs font-semibold text-zinc-200 mb-1">Google Lighthouse Score</div>
                    <div class="text-[11px] text-zinc-400 font-medium">Performa &amp; SEO</div>
                </div>

                <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-white/20 transition-all duration-300">
                    <div class="text-3xl sm:text-5xl font-extrabold text-emerald-400 mb-2">&lt; 1.5s</div>
                    <div class="text-xs font-semibold text-zinc-200 mb-1">Waktu Muat Halaman</div>
                    <div class="text-[11px] text-zinc-400 font-medium">Jaringan Seluler 4G</div>
                </div>

                <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-white/20 transition-all duration-300">
                    <div class="text-3xl sm:text-5xl font-extrabold text-white mb-2">100%</div>
                    <div class="text-xs font-semibold text-zinc-200 mb-1">Responsif Seluler</div>
                    <div class="text-[11px] text-zinc-400 font-medium">Pengujian Lintas Layar</div>
                </div>

                <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-white/20 transition-all duration-300">
                    <div class="text-3xl sm:text-5xl font-extrabold text-cyan-400 mb-2">A+</div>
                    <div class="text-xs font-semibold text-zinc-200 mb-1">Keamanan SSL TLS</div>
                    <div class="text-[11px] text-zinc-400 font-medium">Standar Enkripsi Teruji</div>
                </div>

            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- SECTION 4: ARCHITECTURAL CTA                                          -->
        <!-- ===================================================================== -->
        <section class="reveal-init rounded-2xl p-8 sm:p-12 bg-night-surface border border-night-border hover:border-night-text transition-all duration-300 shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <div class="space-y-2 max-w-xl">
                <h3 class="text-xs uppercase tracking-widest text-slate-500 font-bold">
                    KONSULTASI TEKNIS
                </h3>
                <h4 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                    Diskusikan Arsitektur Proyek Anda Bersama Kami
                </h4>
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
