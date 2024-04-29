<?php

namespace Domains\Course\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CreateCourseDto extends Data
{
    public function __construct(
        public string|Optional $name,
        public string|Optional $description,
        public string|Optional $starts_at,
        public string|Optional $ends_at,
    )
    {
    }
}