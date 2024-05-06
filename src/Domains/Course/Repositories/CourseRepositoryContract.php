<?php

namespace Domains\Course\Repositories;

use Domains\Course\Models\Course;

interface CourseRepositoryContract
{
    public function save(Course $course): void;
}