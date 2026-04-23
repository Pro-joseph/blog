<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AuthController;

Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('/categories/{category}', [CategoriesController::class, 'show'])->name('categories.show');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit')->middleware('guest');

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');

Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

Route::get('/verify-email', [AuthController::class, 'showEmailVerificationNotice'])->name('verification.notice');
Route::get('/verify-email/{id}/{hash}', [AuthController::class, 'verifyEmail'])->name('verification.verify');

Route::get('/confirm-password', [AuthController::class, 'showConfirmPasswordForm'])->name('password.confirm');
Route::post('/confirm-password', [AuthController::class, 'confirmPassword'])->name('password.confirm.submit');

Route::get('/dashboard', function () {
    $articles = \App\Models\Article::latest()->get();
    return view('admin_dashboard', compact('articles'));
})->name('dashboard')->middleware('auth');

Route::get('/create', [ArticleController::class, 'create'])->name('create')->middleware('auth');
Route::post('/articles/autosave', [ArticleController::class, 'autosave'])->name('articles.autosave')->middleware('auth');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store')->middleware('auth');

Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/article/{article}', [ArticleController::class, 'update'])->name('article.update')->middleware('auth');
Route::delete('/article/{article}', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('auth');