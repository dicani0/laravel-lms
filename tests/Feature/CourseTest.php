<?php

namespace Tests\Feature;

use Domains\User\Models\User;
use Inertia\Testing\AssertableInertia;
use JetBrains\PhpStorm\NoReturn;
use Tests\TestCase;

class CourseTest extends TestCase
{
    public User $admin;

    public function test_create_course_render(): void
    {
        $response = $this->actingAs($this->admin)->get('/courses/create');

        $response->assertInertia(function (AssertableInertia $page): void {
            $page->component('Course/CreateCourse');
        });

        $response->assertStatus(200);
    }

    public function test_create_course(): void
    {

        $response = $this->actingAs($this->admin)->post('/courses/store', [
            'name' => 'Course Test',
            'description' => 'Description Test',
            'starts_at' => now()->toIso8601String(),
            'ends_at' => now()->addDays(10)->toIso8601String(),
            'published_at' => now()->toIso8601String(),
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('courses', [
            'name' => 'Course Test',
            'description' => 'Description Test',
            'author_id' => $this->admin->id,
            'starts_at' => now()->format('Y-m-d H:i:s'),
            'ends_at' => now()->addDays(10)->format('Y-m-d H:i:s'),
            'published_at' => now()->format('Y-m-d H:i:s'),
        ]);

    }

    #[NoReturn] protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::firstWhere('name', 'Admin');
    }
}
