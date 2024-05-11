<?php

namespace Database\Seeders;

use App\Course\Infrastructure\Persistence\Model\CourseModel;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CourseModel::factory()
            ->count(30)
            ->create();
    }
}
