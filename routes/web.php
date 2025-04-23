<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'landing-page')->name('home');
Route::view('/education', 'education')->name('education');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('quizzes', QuizController::class)->name('quizzes');
    Volt::route('quizzes/{quiz:slug}', 'quizzes.questions')->name('quizzes.questions');
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
