<?php

namespace Tests\Feature;

use App\Models\ContactInquiry;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OxidLabsFeatureTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    /**
     * Test public landing page loads with projects catalog.
     */
    public function test_landing_page_loads_with_projects(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('OXID');
        $response->assertSee('LABS');
        $response->assertSee('Project Catalog');
        $response->assertSee('Katalis Next-Gen Core');
    }

    /**
     * Test project detail API.
     */
    public function test_project_detail_api(): void
    {
        $response = $this->getJson('/api/projects/katalis-next-gen-core');

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'project' => [
                    'title' => 'Katalis Next-Gen Core',
                    'slug' => 'katalis-next-gen-core',
                ]
            ]);
    }

    /**
     * Test contact inquiry submission.
     */
    public function test_contact_inquiry_submission(): void
    {
        $response = $this->postJson('/contact', [
            'name' => 'Testing Partner',
            'email' => 'partner@example.com',
            'subject' => 'AI Architecture Proposal',
            'message' => 'We want to collaborate on high-frequency data pipelines.',
        ]);

        $response->assertStatus(200)
            ->assertJson(['success' => true]);

        $this->assertDatabaseHas('contact_inquiries', [
            'email' => 'partner@example.com',
            'name' => 'Testing Partner',
        ]);
    }

    /**
     * Test admin login and dashboard access.
     */
    public function test_admin_authentication_and_dashboard(): void
    {
        $loginPage = $this->get('/admin/login');
        $loginPage->assertStatus(200);

        $loginPost = $this->post('/admin/login', [
            'email' => 'admin@oxidlabs.my.id',
            'password' => 'AdminOxid2026!',
        ]);

        $loginPost->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticated();

        $dashboard = $this->get('/admin');
        $dashboard->assertStatus(200);
        $dashboard->assertSee('SYSTEM OVERVIEW');
    }

    /**
     * Test project creation via CMS.
     */
    public function test_admin_can_create_project(): void
    {
        $admin = User::first();

        $response = $this->actingAs($admin)->post('/admin/projects', [
            'title' => 'CyberGrid Sentinel OS',
            'category' => 'Cloud Infrastructure',
            'client_name' => 'Gov Security',
            'year' => '2026',
            'summary' => 'Encrypted node clustering for defense networks.',
            'description' => 'Complete zero-trust network fabric implemented in Rust and Go.',
            'tech_stack_input' => 'Rust, Go, WireGuard, Docker',
            'is_featured' => 1,
            'display_order' => 1,
        ]);

        $response->assertRedirect(route('admin.projects.index'));

        $this->assertDatabaseHas('projects', [
            'title' => 'CyberGrid Sentinel OS',
            'slug' => 'cybergrid-sentinel-os',
            'category' => 'Cloud Infrastructure',
        ]);
    }

    /**
     * Test inquiry status toggle.
     */
    public function test_admin_can_toggle_inquiry(): void
    {
        $admin = User::first();
        $inquiry = ContactInquiry::create([
            'name' => 'Test Lead',
            'email' => 'lead@domain.com',
            'message' => 'Need pricing information.',
            'is_read' => false,
        ]);

        $response = $this->actingAs($admin)->patch("/admin/inquiries/{$inquiry->id}/toggle-read");

        $response->assertRedirect();
        $this->assertTrue($inquiry->fresh()->is_read);
    }

    /**
     * Test products catalog page loads with database records.
     */
    public function test_products_page_loads(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertSee('Software Products');
        $response->assertSee('PawonHPP SaaS');
        $response->assertSee('Katalis Next-Gen Core');
    }

    /**
     * Test services page loads with all 5 disciplines.
     */
    public function test_services_page_loads(): void
    {
        $response = $this->get('/services');

        $response->assertStatus(200);
        $response->assertSee('Engineering & Technical Services', false);
        $response->assertSee('Website & Web Application Development', false);
        $response->assertSee('SaaS Product Development');
        $response->assertSee('Workflow Automation & Systems Integration', false);
    }

    /**
     * Test capabilities page loads with architectural methodology.
     */
    public function test_capabilities_page_loads(): void
    {
        $response = $this->get('/capabilities');

        $response->assertStatus(200);
        $response->assertSee('How We Architect', false);
        $response->assertSee('SYSTEM DELIVERY PIPELINE');
        $response->assertSee('Discovery & Requirements', false);
    }

    /**
     * Test studio page loads with manifesto principles.
     */
    public function test_studio_page_loads(): void
    {
        $response = $this->get('/studio');

        $response->assertStatus(200);
        $response->assertSee('Substance Over Superficial Complexity');
        $response->assertSee('WHY OXID');
        $response->assertSee('Substance Over Spectacle');
    }

    /**
     * Test contact page loads with form.
     */
    public function test_contact_page_loads(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Start a Project Conversation');
        $response->assertSee('Direct Studio Channel');
        $response->assertSee('Name *');
        $response->assertSee('Email Address *');
    }

    /**
     * Test pricing page loads with discount packages.
     */
    public function test_pricing_page_loads(): void
    {
        $response = $this->get('/pricing');

        $response->assertStatus(200);
        $response->assertSee('Katalog Harga Layanan');
        $response->assertSee('Starter Landing Page');
        $response->assertSee('E-Commerce WhatsApp');
        $response->assertSee('PROMO LAUNCHING STUDIO');
    }
}


