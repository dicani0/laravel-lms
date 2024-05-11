<?php

namespace Database\Factories;

use App\Course\Infrastructure\Persistence\Model\CourseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CourseFactory extends Factory
{
    protected $model = CourseModel::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->domainName,
            'description' => $this->faker->text,
            'published_at' => now(),
            'starts_at' => now()->addHours(2),
            'ends_at' => now()->addHours(4),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
