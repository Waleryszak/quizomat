<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', [QuizController::class, 'home'])->name('home');
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/quiz/{id}', [QuizController::class, 'submit'])->name('quiz.submit');

