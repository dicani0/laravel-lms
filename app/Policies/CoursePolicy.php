<?php

namespace App\Policies;

use App\Course\Infrastructure\Persistence\Model\CourseModel;
use Domains\User\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, CourseModel $course): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user?->can('create_course') ?? false;
    }

    public function store(User $user): bool
    {
        return $user?->can('create_course') ?? false;
    }

    public function update(User $user, CourseModel $course): bool
    {
        return true;
    }

    public function delete(User $user, CourseModel $course): bool
    {
        return true;
    }

    public function restore(User $user, CourseModel $course): bool
    {
        return true;
    }

    public function forceDelete(User $user, CourseModel $course): bool
    {
        return true;
    }
}
