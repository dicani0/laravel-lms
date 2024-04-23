<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Domains\Course\Models\Course;
use Domains\User\Models\User;

class CoursePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Course $course): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Course $course): bool
    {
        return true;
    }

    public function delete(User $user, Course $course): bool
    {
        return true;
    }

    public function restore(User $user, Course $course): bool
    {
        return true;
    }

    public function forceDelete(User $user, Course $course): bool
    {
        return true;
    }
}
