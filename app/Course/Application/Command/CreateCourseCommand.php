<?php

namespace App\Course\Application\Command;

class CreateCourseCommand
{
    public function __construct(
        public string $name,
        public string $description,
        public int $author_id,
        public ?string $starts_at,
        public ?string $ends_at,
        public ?string $published_at,
    ) {
    }
}