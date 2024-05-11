<?php

namespace App\Course\Application\CommandHandler;

use App\Course\Application\Command\CreateCourseCommand;
use App\Course\Domain\Entity\Course;
use App\Course\Domain\Repository\CourseRepositoryContract;
use Ramsey\Uuid\Uuid;

readonly class CreateCourseHandler
{
    public function __construct(private CourseRepositoryContract $courseRepository)
    {
    }

    public function handle(CreateCourseCommand $command): void
    {
        $course = new Course(
            id: Uuid::uuid4()->toString(),
            name: $command->name,
            description: $command->description,
            authorId: $command->author_id,
            startsAt: $command->starts_at,
            endsAt: $command->ends_at,
            publishedAt: $command->published_at,
        );

        $this->courseRepository->save(course: $course);
    }
}