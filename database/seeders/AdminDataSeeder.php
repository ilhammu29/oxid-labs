<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminDataSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'CORTEX AI Studio',
                'slug' => 'cortex-ai-studio',
                'category' => 'Artificial Intelligence & SaaS',
                'client_name' => 'OXID Labs Internal',
                'year' => '2026',
                'summary' => 'Enterprise Prompt Playground, Model Arena, and Autonomous Agent Orchestrator for Next-Gen LLM Workflows.',
                'description' => 'CORTEX Studio adalah platform multi-model enterprise yang menggabungkan side-by-side model evaluation arena, prompt playground dengan live token streaming, dan local persistent vault bookmarks.',
                'thumbnail' => '/images/oxid-logo.png',
                'tech_stack' => json_encode(['Next.js', 'TypeScript', 'TailwindCSS', 'SQLite', 'Hermes Engine']),
                'demo_url' => 'https://cortex.oxidlabs.my.id',
                'github_url' => 'https://github.com/ilhammu29/AGENT-MINHAMMU29',
                'is_featured' => 1,
                'display_order' => 1,
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'EduERP Academic Module',
                'slug' => 'eduerp-academic-module',
                'category' => 'Enterprise Software',
                'client_name' => 'Yayasan Pendidikan Nusantara',
                'year' => '2026',
                'summary' => 'Modul Absensi, Kurikulum, dan Rencana Pelaksanaan Pembelajaran (RPP) terintegrasi untuk institusi pendidikan.',
                'description' => 'Sistem ERP akademik berbasis web dengan pencatatan absensi real-time, sinkronisasi Kurikulum Berbasis Cinta (KBC), dan kalkulator distribusi waktu mengajar.',
                'thumbnail' => '/images/oxid-logo.png',
                'tech_stack' => json_encode(['Laravel', 'Livewire', 'TailwindCSS', 'MySQL']),
                'demo_url' => 'https://eduerp.oxidlabs.my.id',
                'github_url' => 'https://github.com/ilhammu29/eduerp',
                'is_featured' => 1,
                'display_order' => 2,
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PawonHPP Financial SaaS',
                'slug' => 'pawonhpp-financial-saas',
                'category' => 'Financial & SaaS',
                'client_name' => 'UMKM Kuliner Nusantara',
                'year' => '2026',
                'summary' => 'Kalkulator Harga Pokok Produksi (HPP) otomatis, manajemen resep, dan pembukuan laba rugi real-time.',
                'description' => 'Sistem pencatatan dan kalkulasi HPP presisi tinggi untuk UMKM kuliner dengan integrasi multi-warehouse dan laporan eksekutif berstandar akuntansi.',
                'thumbnail' => '/images/oxid-logo.png',
                'tech_stack' => json_encode(['Next.js', 'Supabase', 'TailwindCSS', 'PostgreSQL']),
                'demo_url' => 'https://pawonhpp.oxidlabs.my.id',
                'github_url' => 'https://github.com/ilhammu29/HPP-APP',
                'is_featured' => 1,
                'display_order' => 3,
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'OXID Ledger WhatsApp Bot',
                'slug' => 'oxid-ledger-whatsapp-bot',
                'category' => 'Automation & FinTech',
                'client_name' => 'OXID Labs Pilot',
                'year' => '2026',
                'summary' => 'Pencatatan keuangan otomatis berbasis chat WhatsApp dengan ekstraksi AI dan pelaporan buku besar instan.',
                'description' => 'Bot WhatsApp cerdas untuk pencatatan transaksi harian, split bill, rekapitulasi otomatis ke Excel, dan audit trail berbasis perintah natural language.',
                'thumbnail' => '/images/oxid-logo.png',
                'tech_stack' => json_encode(['Node.js', 'WhatsApp Baileys', 'SQLite', 'TailwindCSS']),
                'demo_url' => 'https://ledger.oxidlabs.my.id',
                'github_url' => 'https://github.com/ilhammu29/oxid-wa-ledger',
                'is_featured' => 1,
                'display_order' => 4,
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Velgrim Crimson Blaze Landing Page',
                'slug' => 'velgrim-crimson-blaze',
                'category' => 'Immersive Web & Landing',
                'client_name' => 'OXID Labs Creative',
                'year' => '2026',
                'summary' => 'High-impact cinematic landing page with Framer Motion, dynamic dark theme, and interactive product showcase.',
                'description' => 'Landing page sinematik bertema gaming dan produk digital eksklusif dengan transisi halus, micro-interactions, dan layout modern responsif.',
                'thumbnail' => '/images/oxid-logo.png',
                'tech_stack' => json_encode(['React 19', 'Vite', 'TailwindCSS', 'Motion for React']),
                'demo_url' => 'https://velgrim.oxidlabs.my.id',
                'github_url' => 'https://github.com/ilhammu29/velgrim',
                'is_featured' => 1,
                'display_order' => 5,
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($projects as $proj) {
            DB::table('projects')->updateOrInsert(
                ['slug' => $proj['slug']],
                $proj
            );
        }
    }
}
