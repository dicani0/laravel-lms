<?php

namespace App\Application\Http\Course\Controllers;

use App\Application\Http\Course\Requests\CourseRequest;
use App\Application\Http\Course\Resources\CourseResource;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Domains\Course\Models\Course;

class CourseController
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Course::class);

        return CourseResource::collection(Course::all());
    }

    public function store(CourseRequest $request)
    {
        $this->authorize('create', Course::class);

        return new CourseResource(Course::create($request->validated()));
    }

    public function show(Course $course)
    {
        $this->authorize('view', $course);

        return new CourseResource($course);
    }

    public function update(CourseRequest $request, Course $course)
    {
        $this->authorize('update', $course);

        $course->update($request->validated());

        return new CourseResource($course);
    }

    public function destroy(Course $course)
    {
        $this->authorize('delete', $course);

        $course->delete();

        return response()->json();
    }
}
