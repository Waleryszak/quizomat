<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminQuizController;
use App\Http\Controllers\AdminCategoryController;


Route::get('/', [QuizController::class, 'home'])->name('home');
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/quiz/{id}', [QuizController::class, 'submit'])->name('quiz.submit');


Route::get('/admin/login', [AdminAuthController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [AdminQuizController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/questions', [AdminQuizController::class, 'list'])->name('admin.questions');
Route::get('/admin/questions/add', [AdminQuizController::class, 'form'])->name('admin.add');
Route::post('/admin/questions/add', [AdminQuizController::class, 'store'])->name('admin.add.post');
Route::get('/admin/questions/edit/{id}', [AdminQuizController::class, 'edit'])->name('admin.edit');
Route::post('/admin/questions/edit/{id}', [AdminQuizController::class, 'update'])->name('admin.update');
Route::get('/admin/questions/delete/{id}', [AdminQuizController::class, 'delete'])->name('admin.delete');

Route::get('/admin/categories', [AdminCategoryController::class, 'list'])->name('admin.categories');
Route::post('/admin/categories/add', [AdminCategoryController::class, 'store'])->name('admin.categories.store');
Route::delete('/admin/categories/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.category.delete');
