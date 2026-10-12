@extends('layouts.app')

@section('title', 'Studio & Prinsip Kami — OXID LABS')
@section('meta_description', 'Mengenal OXID Labs: studio produk digital independen yang berfokus pada pembangunan website konversi tinggi, platform SaaS, dan sistem aplikasi yang tahan lama.')

@section('content')
    <div class="max-w-5xl mx-auto px-6 sm:px-8 py-16 sm:py-20">
        
        <!-- Page Header -->
        <div class="max-w-3xl mb-16">
            <span class="inline-block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-3">
                WHY OXID &bull; TENTANG STUDIO &amp; PRINSIP
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-night-text tracking-tight mb-4">
                Substance Over Superficial Complexity
            </h1>
            <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                OXID Labs adalah studio produk digital independen yang memprioritaskan Substance Over Spectacle: berfokus membangun landing page berkonversi tinggi, platform web, dan sistem aplikasi yang dirancang untuk hasil nyata.
            </p>
        </div>

        <div class="space-y-12">
            
            <!-- Origin of the Name -->
            <section class="studio-card p-8 sm:p-10 space-y-4">
                <span class="text-xs font-mono text-slate-500 font-bold uppercase tracking-wider">FILOSOFI OXID</span>
                <h2 class="text-xl sm:text-2xl font-bold text-night-text">Prinsip Ketahanan &amp; Perlindungan Alami</h2>
                <div class="space-y-4 text-xs sm:text-sm text-night-muted leading-relaxed">
                    <p>
                        Dalam ilmu material, oksidasi terkendali membentuk lapisan pasif mikroskopis di permukaan logam yang menghentikan korosi dan melindungi bagian inti dari kerusakan lingkungan luar.
                    </p>
                    <p>
                        Kami mendirikan OXID Labs atas prinsip yang sama: bisnis modern membutuhkan website dan sistem digital yang kuat, cepat, dan terlindungi. Bukannya template berat yang rentan error dan lambat dibuka, kami merekayasa website yang stabil, memuat cepat di ponsel, dan mudah dikembangkan seiring pertumbuhan usaha Anda.
                    </p>
                </div>
            </section>

            <!-- Three Working Principles -->
            <section class="space-y-6">
                <span class="block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold">
                    PRINSIP KERJA UTAMA
                </span>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="studio-card p-7 space-y-3">
                        <span class="text-xs font-mono text-slate-500 font-bold">PRINSIP 01</span>
                        <h3 class="text-base font-bold text-night-text">Fokus pada Hasil Nyata</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Kami menolak fitur rumit yang tidak dibutuhkan. Setiap tombol, kata, dan tata letak dirancang untuk satu tujuan: mempermudah calon pelanggan memahami produk dan melakukan transaksi.
                        </p>
                    </div>

                    <div class="studio-card p-7 space-y-3">
                        <span class="text-xs font-mono text-slate-500 font-bold">PRINSIP 02</span>
                        <h3 class="text-base font-bold text-night-text">Kecepatan &amp; Kode Bersih</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Kami membangun dengan pondasi teknologi teruji: kode yang rapi, ringan, dan efisien. Website Anda memuat instan di browser dan tidak membebani kuota data pengunjung.
                        </p>
                    </div>

                    <div class="studio-card p-7 space-y-3">
                        <span class="text-xs font-mono text-slate-500 font-bold">PRINSIP 03</span>
                        <h3 class="text-base font-bold text-night-text">Kepemilikan Penuh Klien</h3>
                        <p class="text-xs text-night-muted leading-relaxed">
                            Anda memiliki 100% kontrol atas aset digital, domain, dan konten website Anda. Tidak ada biaya langganan tersembunyi atau sistem terkunci yang merugikan bisnis Anda.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Current Stage & Honest Ambitions -->
            <section class="studio-card p-8 sm:p-10 space-y-4">
                <span class="text-xs font-mono text-slate-500 font-bold uppercase tracking-wider">STRUKTUR OPERASIONAL</span>
                <h2 class="text-xl sm:text-2xl font-bold text-night-text">Studio Ramping, Senior-Led &amp; Efisien</h2>
                <div class="space-y-4 text-xs sm:text-sm text-night-muted leading-relaxed">
                    <p>
                        OXID Labs beroperasi secara efisien dengan tim inti berbasis di Jakarta dan melayani klien secara daring. Anda berkomunikasi langsung dengan tim teknis yang membangun proyek Anda, memastikan tidak ada pesan yang terdistorsi oleh birokrasi berbelit.
                    </p>
                    <p>
                        Setiap proyek dikerjakan dengan komitmen penuh, mulai dari tahap brief, pengujian responsivitas seluler, hingga website tayang online secara sempurna.
                    </p>
                </div>
            </section>

            <!-- Bottom CTA -->
            <div class="rounded-2xl p-8 sm:p-12 bg-slate-900 text-white flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl">
                <div class="space-y-2">
                    <h3 class="text-xl sm:text-2xl font-bold">Siap Bekerja Sama dengan Kami?</h3>
                    <p class="text-xs sm:text-sm text-slate-400 max-w-lg">
                        Mulai konsultasi gratis untuk merancang landing page atau platform web yang tepat untuk bisnis Anda.
                    </p>
                </div>
                <a href="{{ route('contact') }}" class="px-7 py-3.5 text-xs sm:text-sm font-semibold btn-pill-white flex-shrink-0">
                    Mulai Konsultasi &rarr;
                </a>
            </div>

        </div>

    </div>
@endsection
