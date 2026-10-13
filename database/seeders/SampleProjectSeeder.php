<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class SampleProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'PawonHPP SaaS',
                'slug' => 'pawonhpp-saas',
                'category' => 'Digital Products & SaaS',
                'client_name' => 'Internal Venture (Active MVP)',
                'year' => '2026',
                'summary' => 'Engine kalkulasi HPP dan margin menu kuliner berbasis batch & resep pintar untuk UMKM.',
                'description' => "PawonHPP adalah aplikasi SaaS modern yang membantu pemilik usaha kuliner menghitung harga pokok produksi (HPP) secara presisi, mengelola multi-resep dinamis, memantau fluktuasi harga bahan baku, dan menyimulasikan margin laba kotor.\n\nDibangun dengan arsitektur multi-tenant, isolasi Row-Level Security, ekspor laporan real-time (.xlsx & PDF), serta antarmuka mobile-first yang dioptimalkan untuk operasional dapur harian.",
                'thumbnail' => 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1200&q=80',
                'gallery' => null,
                'video_url' => null,
                'tech_stack' => ['Laravel 11', 'Next.js', 'Tailwind CSS', 'PostgreSQL / SQLite', 'Supabase RLS'],
                'demo_url' => 'https://oxidlabs.my.id',
                'github_url' => null,
                'is_featured' => true,
                'display_order' => 1,
            ],
            [
                'title' => 'Katalis Next-Gen Core',
                'slug' => 'katalis-next-gen-core',
                'category' => 'Software Engineering',
                'client_name' => 'Laboratory Infrastructure',
                'year' => '2026',
                'summary' => 'High-throughput microservices backend dan distributed cache orchestration engine.',
                'description' => "Katalis adalah engine komputasi backend modular yang dirancang untuk memproses aliran data streaming berlatensi rendah. Dilengkapi arsitektur event-driven, pipeline otentikasi zero-trust, serta dasbor telemetri real-time dengan latency sub-milidetik.",
                'thumbnail' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=1200&q=80',
                'gallery' => null,
                'video_url' => '/videos/katalis-demo.mp4',
                'tech_stack' => ['Laravel 11', 'Go', 'Redis Cluster', 'PostgreSQL', 'Docker'],
                'demo_url' => 'https://oxidlabs.my.id',
                'github_url' => 'https://github.com/oxidlabs/katalis-core',
                'is_featured' => true,
                'display_order' => 2,
            ],
            [
                'title' => 'Veloce Settlement Gateway',
                'slug' => 'veloce-settlement-gateway',
                'category' => 'Digital Products & SaaS',
                'client_name' => 'Fintech Prototype',
                'year' => '2026',
                'summary' => 'Platform gateway multi-currency dengan verifikasi transaksi instan dan audit telemetri.',
                'description' => "Sistem pemrosesan pembayaran dan settlement terdistribusi yang menggabungkan audit otomatis transaksi, kalkulator likuiditas real-time, dan webhook reliable delivery dengan zero-packet drop.",
                'thumbnail' => 'https://images.unsplash.com/photo-1639762681485-074b7f938ba0?auto=format&fit=crop&w=1200&q=80',
                'gallery' => null,
                'video_url' => null,
                'tech_stack' => ['Laravel', 'Vue 3', 'Tailwind CSS', 'Redis', 'PostgreSQL'],
                'demo_url' => 'https://oxidlabs.my.id',
                'github_url' => null,
                'is_featured' => true,
                'display_order' => 3,
            ],
            [
                'title' => 'Aetheria Workflow Orchestrator',
                'slug' => 'aetheria-workflow-orchestrator',
                'category' => 'Intelligent Workflows',
                'client_name' => 'Internal Studio Lab',
                'year' => '2025',
                'summary' => 'Orkestrasi alur kerja terotomatisasi untuk pipeline pengolahan data dan inferensi dokumen.',
                'description' => "Aetheria mengintegrasikan pipeline ETL modern dengan model reasoning untuk mengekstrak, memvalidasi, dan mengarahkan data bisnis tak terstruktur ke dalam sistem enterprise tanpa intervensi manual.",
                'thumbnail' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80',
                'gallery' => null,
                'video_url' => null,
                'tech_stack' => ['Python', 'FastMCP', 'Laravel API', 'PostgreSQL', 'Redis'],
                'demo_url' => 'https://oxidlabs.my.id',
                'github_url' => 'https://github.com/oxidlabs/aetheria-grid',
                'is_featured' => false,
                'display_order' => 4,
            ],
            [
                'title' => 'Apex Infrastructure Telemetry',
                'slug' => 'apex-infrastructure-telemetry',
                'category' => 'Software Engineering',
                'client_name' => 'Studio Engineering',
                'year' => '2025',
                'summary' => 'Monitoring telemetri server edge dan health checks terdistribusi dengan visualisasi real-time.',
                'description' => "Apex memantau ketersediaan node server, latensi DNS, dan penggunaan resource sistem secara simultan dengan sistem notifikasi peringatan dini otomatis.",
                'thumbnail' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=80',
                'gallery' => null,
                'video_url' => null,
                'tech_stack' => ['Laravel', 'TimescaleDB', 'Tailwind CSS', 'Docker', 'WebSockets'],
                'demo_url' => null,
                'github_url' => null,
                'is_featured' => false,
                'display_order' => 5,
            ]
        ];

        foreach ($projects as $item) {
            Project::updateOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }
    }
}
