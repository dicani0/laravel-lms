<?php

namespace App\Course\Domain\Repository;

use App\Course\Domain\Entity\Course;
use Illuminate\Support\Collection;

interface CourseRepositoryContract
{
    public function save(Course $course): void;

    public function findById(int $id): ?Course;

    public function findAll(): Collection;
}