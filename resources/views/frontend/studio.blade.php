@extends('layouts.app')

@section('title', 'Studio & Prinsip Kami — OXID LABS')
@section('meta_description', 'Mengenal OXID Labs: studio produk digital independen yang berfokus pada pembangunan website konversi tinggi, platform SaaS, dan sistem aplikasi yang tahan lama.')

@section('content')
    <!-- ========================================================================= -->
    <!-- HERO SECTION: STUDIO MANIFESTO (Seamlessly integrated with header)        -->
    <!-- ========================================================================= -->
    <section id="dark-hero-section" class="relative w-full pt-28 sm:pt-36 pb-16 sm:pb-24 bg-[#0E0E10] text-white border-b border-white/10 overflow-hidden select-none">
        <!-- Atmospheric Ambient Diffuse Glows -->
        <div class="absolute -top-32 -right-20 w-[550px] lg:w-[750px] h-[550px] lg:h-[750px] rounded-full bg-gradient-to-bl from-amber-500/10 via-orange-500/5 to-transparent blur-[130px] pointer-events-none z-0"></div>
        <div class="absolute -bottom-32 -left-20 w-[450px] lg:w-[650px] h-[450px] lg:h-[650px] rounded-full bg-gradient-to-tr from-emerald-500/15 via-teal-500/5 to-transparent blur-[120px] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 relative z-10">
            <div class="max-w-3xl">
                <!-- Typographic Eyebrow (Contains 'WHY OXID' for test assertion, No badges) -->
                <div class="flex items-center gap-2.5 mb-6 font-mono text-[11px] tracking-[0.25em] text-zinc-400 uppercase">
                    <span class="w-1.5 h-1.5 bg-emerald-400"></span>
                    <span>WHY OXID &bull; INDEPENDENT DIGITAL STUDIO &amp; MANIFESTO</span>
                </div>

                <!-- Main Headline (Contains 'Substance Over Superficial Complexity' for test assertion) -->
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight leading-[1.12] mb-6">
                    Substance Over <br>
                    <span class="bg-gradient-to-b from-white via-white to-zinc-400 bg-clip-text text-transparent">
                        Superficial Complexity
                    </span>
                </h1>

                <!-- Subtitle (Contains 'Substance Over Spectacle' for test assertion) -->
                <p class="text-sm sm:text-base md:text-lg text-zinc-400 leading-relaxed font-normal mb-8 max-w-2xl">
                    OXID Labs adalah studio produk digital independen yang memprioritaskan Substance Over Spectacle: berfokus membangun landing page berkonversi tinggi, platform web, dan sistem aplikasi yang dirancang untuk hasil nyata tanpa beban gimik visual berlebihan.
                </p>

                <!-- Value Proposition Trust Bar (Clean Architectural Grid, No Badges) -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2 font-mono text-xs text-zinc-300">
                    <div class="p-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-[10px] text-zinc-400 mb-0.5">// ETHOS</div>
                        <div class="font-bold text-white">Substance First</div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-[10px] text-zinc-400 mb-0.5">// ACCESS</div>
                        <div class="font-bold text-white">Direct Senior Dev</div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-[10px] text-zinc-400 mb-0.5">// SOVEREIGNTY</div>
                        <div class="font-bold text-white">100% Client Owned</div>
                    </div>
                    <div class="p-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-white/25 transition-colors">
                        <div class="text-[10px] text-zinc-400 mb-0.5">// RESILIENCE</div>
                        <div class="font-bold text-white">Zero Vendor Lock</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- MAIN STUDIO CONTENT CONTAINER                                             -->
    <!-- ========================================================================= -->
    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-24 space-y-24">

        <!-- ===================================================================== -->
        <!-- SECTION 1: ORIGIN & PHILOSOPHY OF OXID                                -->
        <!-- ===================================================================== -->
        <section class="reveal-init studio-card p-8 sm:p-12 border border-night-border relative overflow-hidden">
            <!-- Background Decorative Grid Lines -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-white/5 to-transparent rounded-bl-full pointer-events-none"></div>

            <div class="max-w-3xl space-y-6 relative z-10">
                <div class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-500 font-semibold">
                    // FILOSOFI OXID
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                    Prinsip Ketahanan &amp; Perlindungan Alami
                </h2>
                
                <div class="space-y-4 text-sm sm:text-base text-night-muted leading-relaxed">
                    <p>
                        Dalam ilmu material, oksidasi terkendali membentuk lapisan pasif mikroskopis di permukaan logam yang menghentikan korosi dan melindungi bagian inti dari kerusakan lingkungan luar.
                    </p>
                    <p>
                        Kami mendirikan OXID Labs atas prinsip yang sama: bisnis modern membutuhkan website dan sistem digital yang kuat, cepat, dan terlindungi. Bukannya template berat yang rentan error dan lambat dibuka, kami merekayasa website yang stabil, memuat cepat di ponsel, dan mudah dikembangkan seiring pertumbuhan usaha Anda.
                    </p>
                </div>

                <!-- 3 Pillars of Oxidation Metaphor -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-6 border-t border-night-border font-mono text-xs">
                    <div class="space-y-1">
                        <div class="text-emerald-500 font-bold">01 // PASSIVE LAYER</div>
                        <p class="text-night-dim text-[11px] leading-relaxed">
                            Arsitektur keamanan bawaan yang melindungi dari kerentanan dan malware tanpa menambah beban server.
                        </p>
                    </div>
                    <div class="space-y-1">
                        <div class="text-sky-500 font-bold">02 // LEAN CORE</div>
                        <p class="text-night-dim text-[11px] leading-relaxed">
                            Kode inti yang bersih dan esensial, bebas sampah plugin demi kecepatan muat instan di koneksi seluler.
                        </p>
                    </div>
                    <div class="space-y-1">
                        <div class="text-indigo-500 font-bold">03 // LONGEVITY</div>
                        <p class="text-night-dim text-[11px] leading-relaxed">
                            Dibangun di atas standar terbuka universal yang tetap berjalan andal hingga bertahun-tahun mendatang.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- SECTION 2: THREE WORKING PRINCIPLES (Prinsip 01, 02, 03)             -->
        <!-- ===================================================================== -->
        <section class="reveal-init space-y-10">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-6 border-b border-night-border">
                <div class="max-w-2xl space-y-2">
                    <div class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-500 font-semibold">
                        // PRINSIP KERJA UTAMA
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                        Tiga Komitmen Fondasional Pengerjaan Proyek
                    </h2>
                </div>
                <p class="text-xs sm:text-sm text-night-muted max-w-md leading-relaxed">
                    Pedoman operasional yang kami pegang teguh dalam setiap baris kode, arsitektur database, dan interaksi bersama klien.
                </p>
            </div>

            <!-- Principles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Prinsip 01: Fokus pada Hasil Nyata -->
                <div class="reveal-init delay-100 studio-card p-8 flex flex-col justify-between space-y-6 hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between font-mono text-xs text-night-dim">
                            <span class="font-bold text-night-text">PRINSIP 01</span>
                            <span>COMMERCIAL CLARITY</span>
                        </div>
                        <h3 class="text-lg font-bold text-night-text">Fokus pada Hasil Nyata</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Kami menolak fitur rumit yang tidak dibutuhkan. Setiap tombol, kata, dan tata letak dirancang untuk satu tujuan: mempermudah calon pelanggan memahami produk dan melakukan transaksi.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-night-border font-mono text-[11px] text-night-dim space-y-1">
                        <div>&mdash; Mengutamakan konversi calon pembeli</div>
                        <div>&mdash; Mengeliminasi distraksi visual tak bermakna</div>
                    </div>
                </div>

                <!-- Prinsip 02: Kecepatan & Kode Bersih -->
                <div class="reveal-init delay-200 studio-card p-8 flex flex-col justify-between space-y-6 hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between font-mono text-xs text-night-dim">
                            <span class="font-bold text-night-text">PRINSIP 02</span>
                            <span>ENGINEERING PURITY</span>
                        </div>
                        <h3 class="text-lg font-bold text-night-text">Kecepatan &amp; Kode Bersih</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Kami membangun dengan pondasi teknologi teruji: kode yang rapi, ringan, dan efisien. Website Anda memuat instan di browser dan tidak membebani kuota data pengunjung.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-night-border font-mono text-[11px] text-night-dim space-y-1">
                        <div>&mdash; Standar kecepatan Core Web Vitals</div>
                        <div>&mdash; Bebas ketergantungan CMS rapuh</div>
                    </div>
                </div>

                <!-- Prinsip 03: Kepemilikan Penuh Klien -->
                <div class="reveal-init delay-300 studio-card p-8 flex flex-col justify-between space-y-6 hover:-translate-y-1 transition-all duration-300">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between font-mono text-xs text-night-dim">
                            <span class="font-bold text-night-text">PRINSIP 03</span>
                            <span>ASSET SOVEREIGNTY</span>
                        </div>
                        <h3 class="text-lg font-bold text-night-text">Kepemilikan Penuh Klien</h3>
                        <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                            Anda memiliki 100% kontrol atas aset digital, domain, dan konten website Anda. Tidak ada biaya langganan tersembunyi atau sistem terkunci yang merugikan bisnis Anda.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-night-border font-mono text-[11px] text-night-dim space-y-1">
                        <div>&mdash; Source code dan repositori diserahkan utuh</div>
                        <div>&mdash; Bebas dipindahkan ke server mana saja</div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- SECTION 3: OPERATIONAL STRUCTURE (Senior-Led & Direct Model)          -->
        <!-- ===================================================================== -->
        <section class="reveal-init studio-card p-8 sm:p-12 border border-night-border space-y-8">
            <div class="max-w-3xl space-y-4">
                <div class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-500 font-semibold">
                    // STRUKTUR OPERASIONAL
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                    Studio Ramping, Senior-Led &amp; Efisien
                </h2>
                <div class="space-y-4 text-sm sm:text-base text-night-muted leading-relaxed">
                    <p>
                        OXID Labs beroperasi secara efisien dengan tim inti berbasis di Jakarta dan melayani klien secara daring. Anda berkomunikasi langsung dengan tim teknis yang membangun proyek Anda, memastikan tidak ada pesan yang terdistorsi oleh birokrasi berbelit.
                    </p>
                    <p>
                        Setiap proyek dikerjakan dengan komitmen penuh, mulai dari tahap brief, pengujian responsivitas seluler, hingga website tayang online secara sempurna.
                    </p>
                </div>
            </div>

            <!-- Workflow Direct Comparison -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-6 border-t border-night-border">
                
                <div class="p-6 rounded-xl bg-night-surface border border-night-border space-y-3">
                    <div class="font-mono text-xs font-bold text-night-dim uppercase tracking-wider">
                        AGENCY CONVENTIONAL MODEL
                    </div>
                    <div class="font-mono text-xs text-night-dim space-y-2">
                        <div class="flex items-center gap-2">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Klien &rarr; Account Exec &rarr; PM &rarr; Outsourced Dev</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Banyak distorsi brief dan waktu tunggu revisi berhari-hari</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Biaya markup operasional kantor agensi yang membebani invoice</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-xl bg-emerald-500/5 border border-emerald-500/20 space-y-3">
                    <div class="font-mono text-xs font-bold text-emerald-600 dark:text-emerald-400 uppercase tracking-wider">
                        OXID LABS DIRECT MODEL
                    </div>
                    <div class="font-mono text-xs text-night-text space-y-2">
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-500 font-bold">&check;</span>
                            <span>Klien &rarr; Senior Engineer / Technical Architect</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-500 font-bold">&check;</span>
                            <span>Solusi teknis langsung tereksekusi tanpa perantara</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-500 font-bold">&check;</span>
                            <span>Harga rasional, transparan, dan terfokus murni pada mutu produk</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- SECTION 4: STUDIO VS CONVENTIONAL COMPARISON MATRIX                   -->
        <!-- ===================================================================== -->
        <section class="reveal-init space-y-8">
            <div class="max-w-2xl space-y-2">
                <div class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-500 font-semibold">
                    // KOMPARASI PENDEKATAN
                </div>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-night-text tracking-tight">
                    Mengapa Pendekatan Studio Berbeda?
                </h3>
                <p class="text-xs sm:text-sm text-night-muted leading-relaxed">
                    Perbandingan langsung antara pendekatan rekayasa mandiri OXID Labs versus model agensi konvensional atau website builder instan.
                </p>
            </div>

            <div class="overflow-x-auto rounded-xl border border-night-border bg-night-surface">
                <table class="w-full text-left text-xs sm:text-sm">
                    <thead>
                        <tr class="border-b border-night-border bg-night-base/50 font-mono text-xs uppercase tracking-wider text-night-dim">
                            <th class="py-4 px-6">Dimensi Evaluasi</th>
                            <th class="py-4 px-6 text-night-dim">Agensi Konvensional / Builder</th>
                            <th class="py-4 px-6 text-emerald-600 dark:text-emerald-400 font-bold">OXID Labs Studio</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-night-border text-night-muted">
                        <tr>
                            <td class="py-4 px-6 font-semibold text-night-text">Hak Milik Kode Sumber</td>
                            <td class="py-4 px-6">Terkunci platform / Sewa bulanan berkelanjutan</td>
                            <td class="py-4 px-6 text-night-text font-semibold">100% Milik Klien, Repositori Diserahkan</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 font-semibold text-night-text">Kecepatan &amp; Performa</td>
                            <td class="py-4 px-6">4 &ndash; 8 detik (Terbebani puluhan plugin berat)</td>
                            <td class="py-4 px-6 text-night-text font-semibold">Sub-1.5 detik (Arsitektur ringan teroptimasi)</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 font-semibold text-night-text">Jalur Komunikasi</td>
                            <td class="py-4 px-6">Perantara sales / account executive</td>
                            <td class="py-4 px-6 text-night-text font-semibold">Langsung dengan praktisi pembuat sistem</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 font-semibold text-night-text">Skalabilitas Sistem</td>
                            <td class="py-4 px-6">Kaku, sulit ditambah custom payment / sistem</td>
                            <td class="py-4 px-6 text-night-text font-semibold">Modular &amp; mudah dikembangkan tanpa batas</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 font-semibold text-night-text">Transparansi Biaya</td>
                            <td class="py-4 px-6">Biaya lisensi tahunan &amp; markup tersembunyi</td>
                            <td class="py-4 px-6 text-night-text font-semibold">Transparan, sekali bayar, tanpa biaya kejutan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- SECTION 5: STUDIO CTA (Zero badges)                                   -->
        <!-- ===================================================================== -->
        <section class="reveal-init rounded-2xl p-8 sm:p-12 bg-[#0E0E10] text-white border border-white/10 shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <!-- Ambient Glow -->
            <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-emerald-500/10 blur-[100px] pointer-events-none"></div>

            <div class="space-y-3 max-w-xl relative z-10">
                <div class="font-mono text-xs uppercase tracking-widest text-emerald-400 font-semibold">
                    // MULAI KOLABORASI PROYEK
                </div>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                    Siap Bekerja Sama dengan Kami?
                </h3>
                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                    Mulai konsultasi gratis untuk merancang landing page atau platform web yang tepat untuk bisnis Anda tanpa komitmen di awal.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 w-full sm:w-auto flex-shrink-0 relative z-10">
                <a href="https://wa.me/6289516885651?text=Halo%20OXID%20Labs,%20saya%20ingin%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener noreferrer" class="px-6 py-3.5 text-xs font-semibold rounded-full bg-emerald-600 hover:bg-emerald-700 text-white text-center shadow-sm transition-all duration-200 flex items-center justify-center gap-2">
                    <span>Chat WhatsApp (0895-1688-5651)</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-3.5 text-xs font-semibold rounded-full bg-white/10 hover:bg-white/20 text-white border border-white/15 text-center transition-all duration-200">
                    Formulir Kontak
                </a>
            </div>
        </section>

    </div>
@endsection
