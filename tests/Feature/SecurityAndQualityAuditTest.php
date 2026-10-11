<?php

namespace Tests\Feature;

use App\Models\ContactInquiry;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;

class SecurityAndQualityAuditTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
        RateLimiter::clear('contact-submission|127.0.0.1');
    }

    /**
     * 1. Test unauthenticated guest is completely blocked from all admin mutation routes.
     */
    public function test_unauthenticated_guest_cannot_access_any_admin_mutation_endpoints(): void
    {
        $project = Project::first();
        $inquiry = ContactInquiry::create([
            'name' => 'Security Audit Probe',
            'email' => 'probe@oxidlabs.test',
            'message' => 'Testing unauthorized access.',
        ]);

        // Attempt project create
        $this->post('/admin/projects', ['title' => 'Unauthorized'])
            ->assertRedirect(route('login'));

        // Attempt project update
        $this->put("/admin/projects/{$project->id}", ['title' => 'Tampered'])
            ->assertRedirect(route('login'));

        // Attempt project delete
        $this->delete("/admin/projects/{$project->id}")
            ->assertRedirect(route('login'));

        // Attempt toggle status
        $this->patch("/admin/projects/{$project->id}/toggle-status")
            ->assertRedirect(route('login'));

        // Attempt toggle featured
        $this->patch("/admin/projects/{$project->id}/toggle-featured")
            ->assertRedirect(route('login'));

        // Attempt toggle read inquiry
        $this->patch("/admin/inquiries/{$inquiry->id}/toggle-read")
            ->assertRedirect(route('login'));

        // Attempt delete inquiry
        $this->delete("/admin/inquiries/{$inquiry->id}")
            ->assertRedirect(route('login'));

        // Attempt logout when not logged in
        $this->post('/admin/logout')
            ->assertRedirect(route('login'));
    }

    /**
     * 2. Test authenticated admin can safely logout.
     */
    public function test_authenticated_admin_can_logout_and_session_is_terminated(): void
    {
        $admin = User::first();

        $response = $this->actingAs($admin)->post('/admin/logout');

        $response->assertRedirect(route('login'));
        $this->assertGuest();
    }

    /**
     * 3. Test admin response sets cache prevention headers to protect against browser back-button leakage.
     */
    public function test_admin_console_sets_no_cache_headers(): void
    {
        $admin = User::first();

        $response = $this->actingAs($admin)->get('/admin');

        $response->assertStatus(200);
        $cacheControl = $response->headers->get('Cache-Control');
        $this->assertNotNull($cacheControl);
        $this->assertStringContainsString('no-store', $cacheControl);
        $this->assertStringContainsString('no-cache', $cacheControl);
    }

    /**
     * 4. Test global HTTP security headers are present on responses.
     */
    public function test_http_security_headers_are_present_on_responses(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $this->assertEquals('SAMEORIGIN', $response->headers->get('X-Frame-Options'));
        $this->assertEquals('nosniff', $response->headers->get('X-Content-Type-Options'));
        $this->assertEquals('strict-origin-when-cross-origin', $response->headers->get('Referrer-Policy'));
    }

    /**
     * 5. Test contact form honeypot silently drops or rejects bot spam.
     */
    public function test_contact_form_rejects_honeypot_bot_submissions(): void
    {
        $initialCount = ContactInquiry::count();

        $response = $this->post('/contact', [
            'name' => 'Bot Spammer',
            'email' => 'spammer@botnet.test',
            'message' => 'Buy cheap links now!',
            'website' => 'https://spam-payload.test', // Honeypot field filled by bot
        ]);

        // Must reject or return error and NOT insert to database
        $this->assertEquals($initialCount, ContactInquiry::count());
    }

    /**
     * 6. Test contact form rate limiting throttles excessive requests.
     */
    public function test_contact_form_rate_limiter_throttles_excessive_submissions(): void
    {
        // 5 valid submissions
        for ($i = 0; $i < 5; $i++) {
            $this->post('/contact', [
                'name' => "Legitimate User {$i}",
                'email' => "user{$i}@example.com",
                'message' => "Message number {$i}",
                'website' => '',
            ]);
        }

        // 6th submission from same IP should be throttled
        $response = $this->post('/contact', [
            'name' => 'Too Many Submissions',
            'email' => 'throttled@example.com',
            'message' => 'Should be rate limited.',
            'website' => '',
        ]);

        $response->assertSessionHasErrors('contact');
    }

    /**
     * 7. Test project update auto-resolves slug collisions cleanly without 500 error.
     */
    public function test_project_update_auto_resolves_slug_collisions(): void
    {
        $admin = User::first();
        $projectA = Project::where('slug', 'pawonhpp-saas')->first();

        // Create Project B
        $projectB = Project::create([
            'title' => 'Project B Independent',
            'slug' => 'project-b-independent',
            'category' => 'Engineering',
            'summary' => 'Initial summary for Project B.',
            'status' => 'published',
            'display_order' => 10,
        ]);

        // Admin updates Project B to have the same title as Project A, but leaves slug empty
        $response = $this->actingAs($admin)->put("/admin/projects/{$projectB->id}", [
            'title' => 'PawonHPP SaaS',
            'slug' => '', // blank -> auto-generate
            'category' => 'Engineering',
            'summary' => 'Updated summary for Project B.',
            'status' => 'published',
        ]);

        $response->assertRedirect(route('admin.projects.index'));

        $projectB->refresh();
        $this->assertNotEquals('pawonhpp-saas', $projectB->slug);
        $this->assertStringStartsWith('pawonhpp-saas-', $projectB->slug);
    }

    /**
     * 8. Test admin views safely handle names and titles containing apostrophes without syntax errors.
     */
    public function test_admin_views_render_safely_with_apostrophes_in_titles_and_names(): void
    {
        $admin = User::first();

        $project = Project::create([
            'title' => "O'Reilly & McDonald's Cloud Systems",
            'category' => 'Engineering',
            'summary' => 'Apostrophe test project.',
            'status' => 'published',
            'display_order' => 20,
        ]);

        $inquiry = ContactInquiry::create([
            'name' => "Shaquille O'Neal",
            'email' => 'shaq@example.test',
            'subject' => "Inquiry regarding McDonald's platform",
            'message' => "Testing apostrophe escaping in confirmations.",
        ]);

        // Projects index
        $projectIndex = $this->actingAs($admin)->get('/admin/projects');
        $projectIndex->assertStatus(200);
        // Ensure no unsafe unescaped JS syntax like 'Confirm permanent deletion of O'Reilly...'
        $this->assertDoesNotMatchRegularExpression("/return confirm\('[^']*'[^']*'\)/", $projectIndex->getContent());

        // Inquiries index
        $inquiryIndex = $this->actingAs($admin)->get('/admin/inquiries');
        $inquiryIndex->assertStatus(200);
        $this->assertDoesNotMatchRegularExpression("/return confirm\('[^']*'[^']*'\)/", $inquiryIndex->getContent());
    }

    /**
     * 7. Test storage fallback route serves valid files and denies path traversal or unsafe file types.
     */
    public function test_storage_fallback_route_serves_valid_files_and_blocks_traversal(): void
    {
        $testDir = storage_path('app/public/test-audit');
        if (!is_dir($testDir)) {
            mkdir($testDir, 0755, true);
        }
        $testFile = $testDir . '/sample.png';
        file_put_contents($testFile, base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg=='));

        try {
            // Valid storage file serving
            $response = $this->get('/storage/test-audit/sample.png');
            $response->assertStatus(200);

            // Path traversal protection
            $this->get('/storage/../.env')->assertStatus(404);
            $this->get('/storage/test-audit/../../etc/passwd')->assertStatus(404);

            // Disallowed file extension protection
            $this->get('/storage/test-audit/test.php')->assertStatus(404);

            // Non-existent file
            $this->get('/storage/test-audit/nonexistent.png')->assertStatus(404);
        } finally {
            if (file_exists($testFile)) {
                @unlink($testFile);
            }
            if (is_dir($testDir)) {
                @rmdir($testDir);
            }
            $mirroredFile = public_path('storage/test-audit/sample.png');
            if (file_exists($mirroredFile)) {
                @unlink($mirroredFile);
                @rmdir(dirname($mirroredFile));
            }
        }
    }
}
