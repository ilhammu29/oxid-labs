<?php

namespace Tests\Feature;

use App\Models\ContactInquiry;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminConsoleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    /**
     * Security Mandate: Ensure login page never exposes credentials or prefilled inputs.
     */
    public function test_login_page_does_not_contain_hardcoded_credentials_or_prefilled_inputs(): void
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);

        // Official logo asset is present
        $response->assertSee('images/oxid-logo.png');

        // Verify password is never in HTML
        $response->assertDontSee('AdminOxid2026!');
        $response->assertDontSee('Standard Dev Credentials');
        $response->assertDontSee('Standard Dev');

        // Verify email input is NOT prefilled with admin email on fresh GET
        $content = $response->getContent();
        $this->assertDoesNotMatchRegularExpression('/value="admin@oxidlabs\.my\.id"/i', $content);
        $this->assertStringContainsString('name="email"', $content);
        $this->assertStringContainsString('id="togglePassword"', $content);
    }

    /**
     * Test invalid login credentials rejection.
     */
    public function test_invalid_login_credentials_are_rejected(): void
    {
        $response = $this->from('/admin/login')->post('/admin/login', [
            'email' => 'admin@oxidlabs.my.id',
            'password' => 'WrongPassword123!',
        ]);

        $response->assertRedirect('/admin/login');
        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    /**
     * Test rate limiting on consecutive failed logins.
     */
    public function test_rate_limiter_throttles_excessive_failed_logins(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->post('/admin/login', [
                'email' => 'bruteforce@oxidlabs.my.id',
                'password' => 'WrongPassword!',
            ]);
        }

        // 6th attempt should hit rate limiter
        $response = $this->post('/admin/login', [
            'email' => 'bruteforce@oxidlabs.my.id',
            'password' => 'WrongPassword!',
        ]);

        $response->assertSessionHasErrors('email');
        $errors = session('errors')->get('email');
        $this->assertMatchesRegularExpression('/Too many login attempts/i', $errors[0]);
    }

    /**
     * Test authorization: Non-admin users cannot access admin console.
     */
    public function test_non_admin_user_is_denied_admin_access(): void
    {
        $regularUser = User::factory()->create([
            'email' => 'member@example.com',
            'is_admin' => false,
        ]);

        // Attempting to access admin dashboard
        $response = $this->actingAs($regularUser)->get('/admin');

        $response->assertRedirect(route('login'));
        $this->assertGuest(); // Ensure session was invalidated
    }

    /**
     * Test authenticated admin can access dashboard with accurate metrics.
     */
    public function test_admin_dashboard_metrics_and_layout(): void
    {
        $admin = User::first();
        $this->assertTrue($admin->isAdmin());

        $response = $this->actingAs($admin)->get('/admin');

        $response->assertStatus(200);
        $response->assertSee('SYSTEM OVERVIEW');
        $response->assertSee('Total Catalog');
        $response->assertSee('Published Status');
        $response->assertSee('images/oxid-logo.png');
    }

    /**
     * Test Draft isolation: draft projects must NEVER show on public pages or APIs.
     */
    public function test_draft_projects_are_isolated_from_public_showcase(): void
    {
        $draftProject = Project::create([
            'title' => 'Top Secret Quantum Engine',
            'slug' => 'top-secret-quantum-engine',
            'category' => 'Internal R&D',
            'status' => 'draft',
            'summary' => 'Classified experimental algorithm not ready for public eyes.',
            'description' => 'Architecture breakdown.',
            'is_featured' => true,
            'display_order' => 0,
        ]);

        // 1. Must not appear on public home
        $homeResponse = $this->get('/');
        $homeResponse->assertStatus(200);
        $homeResponse->assertDontSee('Top Secret Quantum Engine');

        // 2. Must not appear on public products catalog
        $productsResponse = $this->get('/products');
        $productsResponse->assertStatus(200);
        $productsResponse->assertDontSee('Top Secret Quantum Engine');

        // 3. Must return 404 on public project detail API
        $apiResponse = $this->getJson('/api/projects/top-secret-quantum-engine');
        $apiResponse->assertStatus(404);

        // 4. BUT must be visible in admin console
        $admin = User::first();
        $adminProjectsResponse = $this->actingAs($admin)->get('/admin/projects');
        $adminProjectsResponse->assertStatus(200);
        $adminProjectsResponse->assertSee('Top Secret Quantum Engine');
        $adminProjectsResponse->assertSee('Draft (Hidden)');
    }

    /**
     * Test admin can toggle project status (published <-> draft) and featured.
     */
    public function test_admin_can_toggle_project_status_and_featured(): void
    {
        $admin = User::first();
        $project = Project::create([
            'title' => 'Status Toggle Test Project',
            'category' => 'Infrastructure',
            'status' => 'published',
            'summary' => 'Summary for toggle test.',
            'is_featured' => false,
            'display_order' => 10,
        ]);

        $this->assertEquals('published', $project->status);

        // Toggle to draft
        $response1 = $this->actingAs($admin)->patch("/admin/projects/{$project->id}/toggle-status");
        $response1->assertRedirect();
        $this->assertEquals('draft', $project->fresh()->status);

        // Toggle back to published
        $response2 = $this->actingAs($admin)->patch("/admin/projects/{$project->id}/toggle-status");
        $response2->assertRedirect();
        $this->assertEquals('published', $project->fresh()->status);

        // Toggle featured
        $response3 = $this->actingAs($admin)->patch("/admin/projects/{$project->id}/toggle-featured");
        $response3->assertRedirect();
        $this->assertTrue((bool)$project->fresh()->is_featured);
    }

    /**
     * Test admin can create project with custom status and gallery.
     */
    public function test_admin_can_create_project_with_status_and_gallery(): void
    {
        $admin = User::first();

        $response = $this->actingAs($admin)->post('/admin/projects', [
            'title' => 'HyperPulse Stream Analytics',
            'category' => 'Real-Time Systems',
            'status' => 'draft',
            'client_name' => 'DataFlow Inc',
            'year' => '2026',
            'summary' => 'Ultra-low latency streaming analytics engine.',
            'description' => 'Detailed technical breakdown.',
            'gallery_urls' => "https://images.unsplash.com/photo-1\nhttps://images.unsplash.com/photo-2",
            'video_url' => '/videos/hyperpulse-demo.mp4',
            'tech_stack_input' => 'Kafka, ClickHouse, Go, React',
            'is_featured' => 0,
            'display_order' => 5,
        ]);

        $response->assertRedirect(route('admin.projects.index'));

        $this->assertDatabaseHas('projects', [
            'title' => 'HyperPulse Stream Analytics',
            'status' => 'draft',
            'category' => 'Real-Time Systems',
            'video_url' => '/videos/hyperpulse-demo.mp4',
        ]);

        $created = Project::where('title', 'HyperPulse Stream Analytics')->first();
        $this->assertCount(2, $created->gallery);
        $this->assertCount(4, $created->tech_stack);
    }
}
