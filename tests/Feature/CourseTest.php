<?php

namespace Tests\Feature;

use Domains\User\Models\User;
use Inertia\Testing\AssertableInertia;
use Tests\TestCase;

class CourseTest extends TestCase
{

    public function test_create_course_render(): void
    {
        $response = $this->get('/courses/create');

        $response->assertInertia(function (AssertableInertia $page): void {
            $page->component('Course/CreateCourse');
        });

        $response->assertStatus(200);
    }

    public function test_create_course(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/courses/store', [
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
            'author_id' => $user->id,
            'starts_at' => now()->toString(),
            'ends_at' => now()->addDays(10)->toString(),
            'published_at' => now()->toString(),
        ]);

    }
}
