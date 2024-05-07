<?php

namespace App\Course\Application;

use App\Course\Domain\Repository\CourseRepositoryContract;
use App\Course\Infrastructure\Persistence\Repository\EloquentCourseRepository;
use Illuminate\Support\ServiceProvider;

class CourseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            CourseRepositoryContract::class,
            EloquentCourseRepository::class
        );
    }
}