@extends('layouts.app')

@section('title', 'Hubungi Kami & Konsultasi Website — OXID LABS')
@section('meta_description', 'Hubungi tim OXID Labs untuk konsultasi gratis pembuatan landing page, website profil bisnis, e-commerce, atau sistem web custom.')

@section('content')
    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-20">
        
        <!-- Page Header -->
        <div class="max-w-3xl mb-16">
            <span class="inline-block text-xs font-mono uppercase tracking-[0.2em] text-slate-500 font-bold mb-3">
                HUBUNGI KAMI &amp; KONSULTASI &bull; DIRECT STUDIO CHANNEL
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-night-text tracking-tight mb-4">
                Start a Project Conversation
            </h1>
            <p class="text-sm sm:text-base text-night-muted leading-relaxed">
                Ceritakan kebutuhan bisnis Anda. Tim OXID Labs siap memberikan saran teknis, estimasi pengerjaan, dan penawaran terbaik tanpa komitmen di awal.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Info & WhatsApp Quick Connect -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Quick WhatsApp Card -->
                <div class="studio-card p-7 sm:p-8 space-y-4 border-2 border-emerald-500/30 bg-emerald-50/30 dark:bg-emerald-950/10">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500 text-white flex items-center justify-center flex-shrink-0 shadow-md">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.288.043.088.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.353.101.173.45 0.743.966 1.202.664.592 1.224.776 1.397.863.173.086.274.072.376-.043.101-.116.433-.506.549-.679.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-night-text">Chat Langsung via WhatsApp</h3>
                            <p class="text-xs text-night-muted">Respon cepat dalam hitungan menit</p>
                        </div>
                    </div>
                    <p class="text-xs text-night-muted leading-relaxed">
                        Ingin konsultasi langsung tanpa mengisi formulir panjang? Tim kami siap menjawab pertanyaan Anda di WhatsApp.
                    </p>
                    <a href="https://wa.me/6281234567890?text=Halo%20OXID%20Labs,%20saya%20ingin%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener noreferrer" class="w-full py-3 text-xs font-semibold rounded-full bg-emerald-600 hover:bg-emerald-700 text-white flex items-center justify-center gap-2 shadow-sm transition-all">
                        <span>Buka Chat WhatsApp</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>

                <!-- Studio Channels & Details -->
                <div class="studio-card p-7 space-y-4 font-mono text-xs">
                    <div class="space-y-1 pb-3 border-b border-night-border">
                        <span class="text-night-dim block text-[10px] uppercase">Direct Studio Channel</span>
                        <a href="mailto:hello@oxid-labs.id" class="text-night-text font-bold hover:underline">hello@oxid-labs.id</a>
                    </div>

                    <div class="space-y-1 pb-3 border-b border-night-border">
                        <span class="text-night-dim block text-[10px] uppercase">LOKASI &amp; WAKTU OPERASIONAL</span>
                        <span class="text-night-text font-semibold">Jakarta &bull; Senin &ndash; Sabtu, 08.00 &ndash; 20.00 WIB</span>
                    </div>

                    <div class="space-y-1 pb-3 border-b border-night-border">
                        <span class="text-night-dim block text-[10px] uppercase">ESTIMASI RESPON FORM</span>
                        <span class="text-emerald-600 dark:text-emerald-400 font-bold">Maksimal 1 x 24 Jam Kerja</span>
                    </div>

                    <div class="space-y-1">
                        <span class="text-night-dim block text-[10px] uppercase">KEAMANAN DATA</span>
                        <span class="text-night-muted font-normal">Data Anda aman &bull; Proteksi Anti-Spam</span>
                    </div>
                </div>

            </div>

            <!-- Right Functional Contact Form -->
            <div class="lg:col-span-7">
                <div class="studio-card p-8 sm:p-10">
                    
                    @if(session('success'))
                        <div class="p-4 mb-6 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-700 dark:text-emerald-300 text-xs font-semibold flex items-center gap-3">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    @if($errors->has('contact'))
                        <div class="p-4 mb-6 rounded-xl bg-rose-500/10 border border-rose-500/30 text-rose-700 dark:text-rose-300 text-xs font-semibold">
                            {{ $errors->first('contact') }}
                        </div>
                    @endif

                    <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Anti-spam Honeypot Field -->
                        <div style="position: absolute; left: -9999px; top: -9999px; opacity: 0; pointer-events: none;" aria-hidden="true">
                            <input type="text" name="website" tabindex="-1" autocomplete="off" value="">
                        </div>

                        <!-- Name and Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="space-y-1.5">
                                <label for="name" class="block text-xs font-bold text-night-text uppercase tracking-wider">Name * / Nama Lengkap</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Contoh: Budi Santoso" class="w-full bg-night-base border border-night-border rounded-xl px-4 py-3 text-sm text-night-text placeholder-night-dim focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10 transition-all font-sans">
                                @error('name') <span class="text-rose-500 text-[11px]">{{ $message }}</span> @enderror
                            </div>

                            <div class="space-y-1.5">
                                <label for="email" class="block text-xs font-bold text-night-text uppercase tracking-wider">Email Address * / Alamat Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="budi@perusahaan.com" class="w-full bg-night-base border border-night-border rounded-xl px-4 py-3 text-sm text-night-text placeholder-night-dim focus:outline-none focus:border-slate-900 dark:focus:border-white focus:ring-1 focus:ring-slate-900/10 transition-all font-sans">
                                @error('email') <span class="text-rose-500 text-[11px]">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <!-- Package Selection -->
                        @php
                            $selectedPackage = request('package', old('project_type', 'business'));
                        @endphp
                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-night-text uppercase tracking-wider">Pilihan Paket / Layanan</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <label class="relative flex items-center p-3 rounded-xl border border-night-border bg-night-base cursor-pointer hover:border-slate-800 dark:hover:border-white transition-all">
                                    <input type="radio" name="project_type" value="Paket Basic (Rp 500k)" {{ $selectedPackage == 'basic' || $selectedPackage == 'Paket Basic (Rp 500k)' ? 'checked' : '' }} class="text-black focus:ring-black">
                                    <div class="ml-2.5">
                                        <div class="text-xs font-bold text-night-text">Paket Basic</div>
                                        <div class="text-[10px] text-night-dim">Rp 500.000 (1 Halaman)</div>
                                    </div>
                                </label>

                                <label class="relative flex items-center p-3 rounded-xl border border-night-border bg-night-base cursor-pointer hover:border-slate-800 dark:hover:border-white transition-all">
                                    <input type="radio" name="project_type" value="Paket Business (Rp 1jt)" {{ $selectedPackage == 'business' || $selectedPackage == 'Paket Business (Rp 1jt)' || empty($selectedPackage) ? 'checked' : '' }} class="text-black focus:ring-black">
                                    <div class="ml-2.5">
                                        <div class="text-xs font-bold text-night-text">Paket Business</div>
                                        <div class="text-[10px] text-night-dim">Rp 1.000.000 (Multi Halaman)</div>
                                    </div>
                                </label>

                                <label class="relative flex items-center p-3 rounded-xl border border-night-border bg-night-base cursor-pointer hover:border-slate-800 dark:hover:border-white transition-all">
                                    <input type="radio" name="project_type" value="Paket Pro (Rp 1.5jt)" {{ $selectedPackage == 'pro' || $selectedPackage == 'Paket Pro (Rp 1.5jt)' ? 'checked' : '' }} class="text-black focus:ring-black">
                                    <div class="ml-2.5">
                                        <div class="text-xs font-bold text-night-text">Paket Pro</div>
                                        <div class="text-[10px] text-night-dim">Rp 1.500.000 (E-Commerce)</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Target Timeline -->
                        <div class="space-y-1.5">
                            <label for="timeline" class="block text-xs font-bold text-night-text uppercase tracking-wider">Target Waktu Pengerjaan</label>
                            <select id="timeline" name="timeline" class="w-full bg-night-base border border-night-border rounded-xl px-4 py-3 text-xs text-night-text focus:outline-none focus:border-slate-800 dark:focus:border-white transition-all font-sans">
                                <option value="Secepatnya (1 - 3 Hari Kerja)">Secepatnya (1 &ndash; 3 Hari Kerja)</option>
                                <option value="Standar (3 - 7 Hari Kerja)" selected>Standar (3 &ndash; 7 Hari Kerja)</option>
                                <option value="Fleksibel (1 - 2 Minggu)">Fleksibel (1 &ndash; 2 Minggu)</option>
                                <option value="Eksplorasi Ide / Diskusi Awal Saja">Eksplorasi Ide / Diskusi Awal Saja</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div class="space-y-1.5">
                            <label for="message" class="block text-xs font-bold text-night-text uppercase tracking-wider">Deskripsi Singkat Bisnis &amp; Kebutuhan *</label>
                            <textarea id="message" name="message" rows="4" required placeholder="Contoh: Kami memiliki usaha kuliner yang ingin membuat landing page untuk promosi menu baru dan pemesanan via WhatsApp..." class="w-full bg-night-base border border-night-border rounded-xl p-4 text-xs text-night-text placeholder-night-dim focus:outline-none focus:border-slate-800 dark:focus:border-white transition-all font-sans leading-relaxed">{{ old('message') }}</textarea>
                            @error('message') <span class="text-rose-500 text-[11px]">{{ $message }}</span> @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="submit-btn" class="w-full py-4 text-xs sm:text-sm font-semibold btn-pill-primary shadow-md">
                            <span>Kirim Formulir Konsultasi</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </form>

                </div>
            </div>

        </div>

    </div>
@endsection
