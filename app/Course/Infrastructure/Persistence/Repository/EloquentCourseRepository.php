<?php

namespace App\Course\Infrastructure\Persistence\Repository;

use App\Course\Domain\Entity\Course;
use App\Course\Domain\Repository\CourseRepositoryContract;
use App\Course\Infrastructure\Persistence\Model\CourseModel as CourseModel;
use Illuminate\Support\Collection;
use Ramsey\Uuid\Uuid;

readonly class EloquentCourseRepository implements CourseRepositoryContract
{
    public function __construct(
        private CourseModel $model
    ) {
    }

    public function save(Course $course): void
    {
        $courseRecord = $this->model->find(id: $course->getId()) ?? new CourseModel();
        $courseRecord->id = $course->getId() ?? Uuid::uuid4()->toString();
        $courseRecord->name = $course->getName();
        $courseRecord->description = $course->getDescription();
        $courseRecord->author_id = $course->getAuthorId();
        $courseRecord->starts_at = $course->getStartsAt();
        $courseRecord->ends_at = $course->getEndsAt();
        $courseRecord->published_at = $course->getPublishedAt();

        $courseRecord->save();
    }

    public function findById(int $id): ?Course
    {
        $courseRecord = $this->model->find(id: $id);

        if ($courseRecord === null) {
            return null;
        }

        return new Course(
            id: $courseRecord->id,
            name: $courseRecord->name,
            description: $courseRecord->description,
            authorId: $courseRecord->author_id,
            startsAt: $courseRecord->starts_at,
            endsAt: $courseRecord->ends_at,
            publishedAt: $courseRecord->published_at,
        );
    }

    public function findAll(): Collection
    {
        return $this->model->get()->map(callback: function (CourseModel $courseRecord) {
            return new Course(
                id: $courseRecord->id,
                name: $courseRecord->name,
                description: $courseRecord->description,
                authorId: $courseRecord->author_id,
                startsAt: $courseRecord->starts_at,
                endsAt: $courseRecord->ends_at,
                publishedAt: $courseRecord->published_at,
            );
        });
    }
}