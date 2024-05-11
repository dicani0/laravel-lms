<?php

namespace App\Course\Application\Command;

use DateTime;

class CreateCourseCommand
{
    public function __construct(
        public string $name,
        public string $description,
        public int $author_id,
        public DateTime $starts_at,
        public ?DateTime $ends_at,
        public ?DateTime $published_at,
    ) {
    }
}