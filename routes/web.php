<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('pages.admin');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource("experiences", ExperienceController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::resource('educations', EducationController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::post('/resume', [ResumeController::class, 'upload'])->name('resume.upload');
});

require __DIR__.'/auth.php';
