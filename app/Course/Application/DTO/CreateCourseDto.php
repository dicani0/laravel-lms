<?php

namespace App\Course\Application\DTO;

use Domains\User\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelData\Attributes\Computed;
use Spatie\LaravelData\Data;

class CreateCourseDto extends Data
{
    #[Computed]
    public User|null $author;

    public function __construct(
        public string $name,
        public string|null $description,
        public string $starts_at,
        public string|null $ends_at,
        public string|null $published_at,
    ) {
        $this->author = Auth::user();
    }
}