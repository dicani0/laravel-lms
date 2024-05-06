<?php

namespace App\Application\Http\Course\Commands;

use Domains\Course\DTO\CreateCourseDto;

class CreateCourseCommand
{
    public function __construct(public CreateCourseDto $data)
    {
    }
}