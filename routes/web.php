<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [LandingPageController::class, 'index'])->name('home');

Route::prefix('/menu')->group(function () {
    Route::view('/', 'welcome.menu')->name('menu');
    Route::view('/solar-system', 'welcome.solar-system')->name('solar-system');
    Route::view('/phenomena', 'welcome.menu.phenomena')->name('menu.phenomena');
});

Route::view('dashboard', 'dashboard')
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

require __DIR__.'/auth.php';
