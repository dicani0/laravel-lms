<?php

namespace App\Application\Http\Course\Controllers;


use App\Course\Application\Command\CreateCourseCommand;
use App\Course\Application\CommandHandler\CreateCourseHandler;
use App\Course\Application\DTO\CreateCourseDto;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Inertia\Response;

class CourseController
{
    use AuthorizesRequests;

    public function __construct(private CreateCourseHandler $handler)
    {
    }

    public function create(): Response
    {
        $this->authorize('create_course');
        return inertia('Course/CreateCourse');
    }

    public function store(CreateCourseDto $dto): Response
    {
        $command = new CreateCourseCommand(
            name: $dto->name,
            description: $dto->description,
            author_id: $dto->author->id,
            starts_at: $dto->starts_at,
            ends_at: $dto->ends_at,
            published_at: $dto->published_at,
        );

        $this->handler->handle(command: $command);

        return inertia(component: 'Course/CreateCourse');
    }
}
