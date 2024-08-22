<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExhibitController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\AudioFileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Middleware\CheckApiKey;

Route::prefix('api')->middleware(CheckApiKey::class)->group(function () {
    Route::apiResource('exhibits', ExhibitController::class);
    Route::apiResource('languages', LanguageController::class);
    Route::apiResource('translations', TranslationController::class);
    Route::apiResource('audio-files', AudioFileController::class);
    Route::apiResource('feedback', FeedbackController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
