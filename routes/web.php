<?php

use App\Application\Http\Course\Controllers\CourseController;
use App\Application\Http\User\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
//        'courses' => CourseModel::paginate(9),
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('courses')->group(function () {
    Route::get('create', [CourseController::class, 'create'])
        ->name('courses.create');
    Route::post('store', [CourseController::class, 'store'])
        ->name('courses.store');
});

require __DIR__.'/auth.php';
