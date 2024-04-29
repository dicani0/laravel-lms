<?php

namespace App\Application\Http\Course\Controllers;

use Domains\Course\DTO\CreateCourseDto;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Inertia\Response;

class CourseController
{
    use AuthorizesRequests;

    public function create(): Response
    {
        return inertia('Course/CreateCourse');
    }

    public function store(CreateCourseDto $dto): Response
    {
        return inertia('Course/CreateCourse');
    }
}
