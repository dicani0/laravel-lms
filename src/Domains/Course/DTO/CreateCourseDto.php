<?php

namespace Domains\Course\DTO;

use Domains\User\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelData\Attributes\Computed;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CreateCourseDto extends Data
{
    #[Computed]
    public User|null $user;

    public function __construct(
        public string|Optional      $name,
        public string|Optional|null $description,
        public string|Optional      $starts_at,
        public string|Optional|null $ends_at,
    )
    {
        $this->user = Auth::user();
    }
}