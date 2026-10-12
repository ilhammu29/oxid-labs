@extends('layouts.app')

@section('title', 'Layanan Pembuatan Website & Solusi Digital — OXID LABS')
@section('meta_description', 'Layanan lengkap pembuatan landing page, website profil perusahaan, e-commerce, web application, dan maintenance sistem oleh OXID Labs.')

@section('content')
    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-20">
        
        <!-- Page Header -->
        <div class="max-w-3xl mb-16">
            <span class="inline-block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-3">
                Engineering & Technical Services
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-night-text tracking-tight mb-4">
                Solusi Website &amp; Digital untuk Bisnis Anda
            </h1>
            <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                Kami merancang dan membangun sistem digital yang disesuaikan secara presisi dengan kebutuhan bisnis nyata: cepat, konversi tinggi, aman, dan mudah dikembangkan.
            </p>
        </div>

        <!-- 6 Detailed Services Breakdown -->
        <div class="space-y-8 mb-20">
            
            <!-- Service 1: Landing Page -->
            <article class="studio-card p-8 sm:p-10">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-slate-500 font-bold uppercase tracking-wider">01 &bull; Konversi &amp; Promosi</span>
                        <h2 class="text-xl sm:text-2xl font-bold text-night-text">Website & Web Application Development</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'Landing Page']) }}" class="px-6 py-3 text-xs font-semibold btn-pill-primary self-start">
                        Pesan Landing Page &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-6 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Tantangan Bisnis</span>
                        <p class="text-night-muted leading-relaxed">
                            Iklan berjalan tetapi pengunjung tidak melakukan transaksi karena landing page lambat, berantakan di HP, atau pesan promosi tidak jelas.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Target Pengguna</span>
                        <p class="text-night-muted leading-relaxed">
                            UMKM, pengiklan Meta/Google Ads, pemilik brand fashion, produk digital, creator, dan bisnis yang merilis penawaran khusus.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Lingkup Pekerjaan</span>
                        <p class="text-night-muted leading-relaxed">
                            Copywriting layout terarah, integrasi tombol WhatsApp/Formulir, optimasi kecepatan sub-1.5 detik, dan tracking analitik piksel.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Hasil Akhir</span>
                        <p class="text-night-muted leading-relaxed">
                            Landing page responsif live dengan skor performa 95+, domain setup siap pakai, dan dokumentasi panduan mudah.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Service 2: Website Company Profile -->
            <article class="studio-card p-8 sm:p-10">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-slate-500 font-bold uppercase tracking-wider">02 &bull; Kredibilitas &amp; Korporat</span>
                        <h2 class="text-xl sm:text-2xl font-bold text-night-text">Website Company Profile &amp; Lembaga</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'Company Profile']) }}" class="px-6 py-3 text-xs font-semibold btn-pill-primary self-start">
                        Pesan Company Profile &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-6 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Tantangan Bisnis</span>
                        <p class="text-night-muted leading-relaxed">
                            Calon klien atau mitra ragu bermitra karena website perusahaan terlihat kuno, lambat, atau belum memiliki situs resmi yang kredibel.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Target Pengguna</span>
                        <p class="text-night-muted leading-relaxed">
                            Perusahaan B2B, konsultan, agensi, kantor hukum, studio kreatif, kontraktor, dan lembaga profesional.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Lingkup Pekerjaan</span>
                        <p class="text-night-muted leading-relaxed">
                            Struktur multi-halaman (Home, About, Services, Portofolio, Kontak), email bisnis (@perusahaan.com), dan SEO dasar.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Hasil Akhir</span>
                        <p class="text-night-muted leading-relaxed">
                            Situs profil perusahaan modern, sertifikat SSL HTTPS aktif, dan formulir inquiry yang langsung terhubung ke email Anda.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Service 3: E-Commerce Website -->
            <article class="studio-card p-8 sm:p-10">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-slate-500 font-bold uppercase tracking-wider">03 &bull; Penjualan &amp; Transaksi</span>
                        <h2 class="text-xl sm:text-2xl font-bold text-night-text">Toko Online (E-Commerce) &amp; Katalog Produk</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'E-Commerce']) }}" class="px-6 py-3 text-xs font-semibold btn-pill-primary self-start">
                        Pesan E-Commerce &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-6 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Tantangan Bisnis</span>
                        <p class="text-night-muted leading-relaxed">
                            Ketergantungan penuh pada marketplace pihak ketiga dengan potongan komisi tinggi dan ketiadaan database pelanggan mandiri.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Target Pengguna</span>
                        <p class="text-night-muted leading-relaxed">
                            Brand D2C (Direct to Consumer), distributor ritel, penjual produk digital, dan toko busana/lifestyle.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Lingkup Pekerjaan</span>
                        <p class="text-night-muted leading-relaxed">
                            Katalog varian produk, keranjang belanja, integrasi payment gateway otomatis (Midtrans / QRIS / VA), dan manajemen pesanan.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Hasil Akhir</span>
                        <p class="text-night-muted leading-relaxed">
                            Toko online siap pakai, dashboard admin kelola stok &amp; harga, serta notifikasi pesanan otomatis via WhatsApp/Email.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Service 4: Web Application & Custom SaaS -->
            <article class="studio-card p-8 sm:p-10">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-slate-500 font-bold uppercase tracking-wider">04 &bull; Operasional &amp; SaaS</span>
                        <h2 class="text-xl sm:text-2xl font-bold text-night-text">SaaS Product Development &amp; Aplikasi Web Custom</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'Web Application']) }}" class="px-6 py-3 text-xs font-semibold btn-pill-primary self-start">
                        Pesan Web App &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-6 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Tantangan Bisnis</span>
                        <p class="text-night-muted leading-relaxed">
                            Pencatatan manual di spreadsheet yang rentan salah rumus, data terpecah, dan alur kerja antar staf yang tidak tersinkronisasi.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Target Pengguna</span>
                        <p class="text-night-muted leading-relaxed">
                            Bisnis F&B (perhitungan HPP &amp; resep), manajemen stok pergudangan, sistem booking, dan founder yang membangun produk SaaS.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Lingkup Pekerjaan</span>
                        <p class="text-night-muted leading-relaxed">
                            Database relasional (MySQL / PostgreSQL), otentikasi multi-user dengan hak akses berbeda, dan kalkulasi otomatis.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Hasil Akhir</span>
                        <p class="text-night-muted leading-relaxed">
                            Aplikasi web secure, ekspor data Excel/PDF, log riwayat transaksi, dan garansi kestabilan performa.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Service 5: Website Redesign -->
            <article class="studio-card p-8 sm:p-10">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-slate-500 font-bold uppercase tracking-wider">05 &bull; Pembaruan &amp; Performa</span>
                        <h2 class="text-xl sm:text-2xl font-bold text-night-text">Redesain &amp; Modernisasi Website Lama</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'Website Redesign']) }}" class="px-6 py-3 text-xs font-semibold btn-pill-primary self-start">
                        Pesan Redesain &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-6 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Tantangan Bisnis</span>
                        <p class="text-night-muted leading-relaxed">
                            Website lama sulit diedit, lambat diakses, tampilan tidak menarik di smartphone, dan ranking pencarian Google terus turun.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Target Pengguna</span>
                        <p class="text-night-muted leading-relaxed">
                            Bisnis yang ingin memperbarui identitas visual (rebranding), meningkatkan kecepatan, dan memperkuat konversi pelanggan.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Lingkup Pekerjaan</span>
                        <p class="text-night-muted leading-relaxed">
                            Penyusunan ulang UI/UX, migrasi konten tanpa merusak URL SEO lama, dan penulisan ulang kode agar bersih dan ringan.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Hasil Akhir</span>
                        <p class="text-night-muted leading-relaxed">
                            Tampilan baru yang segar dan profesional, kecepatan loading meningkat hingga 3x lipat, dan pengalaman pengguna optimal.
                        </p>
                    </div>
                </div>
            </article>

            <!-- Service 6: Maintenance & SEO -->
            <article class="studio-card p-8 sm:p-10">
                <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-6 pb-6 border-b border-night-border">
                    <div class="space-y-2">
                        <span class="text-xs font-mono text-slate-500 font-bold uppercase tracking-wider">06 &bull; Keamanan &amp; Perawatan</span>
                        <h2 class="text-xl sm:text-2xl font-bold text-night-text">Workflow Automation & Systems Integration</h2>
                    </div>
                    <a href="{{ route('contact', ['scope' => 'Maintenance & Support']) }}" class="px-6 py-3 text-xs font-semibold btn-pill-primary self-start">
                        Pesan Maintenance &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-6 text-xs">
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Tantangan Bisnis</span>
                        <p class="text-night-muted leading-relaxed">
                            Tidak memiliki staf teknis internal untuk mengurus backup server, mengatasi error, pembaruan keamanan, atau update konten rutin.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Target Pengguna</span>
                        <p class="text-night-muted leading-relaxed">
                            Pemilik bisnis yang ingin fokus pada operasional dan penjualan tanpa pusing memikirkan masalah teknis server.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Lingkup Pekerjaan</span>
                        <p class="text-night-muted leading-relaxed">
                            Backup berkala, update plugin/framework, monitoring uptime 24/7, pemulihan darurat, dan audit kata kunci SEO.
                        </p>
                    </div>
                    <div class="space-y-1.5">
                        <span class="font-mono text-night-dim uppercase tracking-wider font-semibold">Hasil Akhir</span>
                        <p class="text-night-muted leading-relaxed">
                            Website selalu online, aman dari malware atau serangan bot, serta performa pencarian lokal yang terus meningkat.
                        </p>
                    </div>
                </div>
            </article>

        </div>

        <!-- Quick Package Navigation CTA -->
        <div class="rounded-2xl p-8 sm:p-12 bg-slate-900 text-white flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
            <div class="space-y-2">
                <h3 class="text-xl sm:text-2xl font-bold">Tertarik Memulai Proyek Website Anda?</h3>
                <p class="text-xs sm:text-sm text-slate-400 max-w-lg">
                    Lihat detail paket harga kami atau diskusikan kebutuhan kustom langsung dengan tim engineering OXID Labs.
                </p>
            </div>
            <div class="flex items-center gap-3 flex-shrink-0">
                <a href="{{ route('home') }}#pricing" class="px-6 py-3 text-xs sm:text-sm font-semibold btn-pill-white">
                    Lihat Paket Harga
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-3 text-xs sm:text-sm font-semibold rounded-full border border-white/20 bg-white/5 hover:bg-white/10 text-white transition-colors">
                    Kontak Langsung
                </a>
            </div>
        </div>

    </div>
@endsection
