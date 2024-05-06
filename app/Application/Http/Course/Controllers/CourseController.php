<?php

namespace App\Application\Http\Course\Controllers;

use App\Application\Http\Course\Commands\CreateCourseCommand;
use App\Application\Http\Course\Handlers\CreateCourseHandler;
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

    public function store(CreateCourseDto $dto, CreateCourseHandler $handler): Response
    {
        $command = new CreateCourseCommand(data: $dto);
        $handler->handle(command: $command);

        return inertia(component: 'Course/CreateCourse');
    }
}
