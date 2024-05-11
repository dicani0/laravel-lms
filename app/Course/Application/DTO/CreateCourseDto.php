<?php

namespace App\Course\Application\DTO;

use DateTime;
use Domains\User\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelData\Attributes\Computed;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\DateTimeInterfaceCast;
use Spatie\LaravelData\Data;

class CreateCourseDto extends Data
{
    #[Computed]
    public User|null $author;

    public function __construct(
        public string $name,
        public string|null $description,
        #[WithCast(DateTimeInterfaceCast::class)]
        public DateTime $starts_at,
        #[WithCast(DateTimeInterfaceCast::class)]
        public DateTime|null $ends_at,
        #[WithCast(DateTimeInterfaceCast::class)]
        public DateTime|null $published_at,
    ) {
        $this->author = Auth::user();
    }

    public static function authorize(): bool
    {
        return Auth::user()?->can('create_course') ?? false;
    }
}