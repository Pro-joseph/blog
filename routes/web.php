<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public_blog_home');
})->name('home');

Route::get('/login', function () {
    return view('admin_login');
})->name('login');

Route::post('/login', function () {
    return redirect()->route('dashboard');
})->name('login.submit');

Route::get('/dashboard', function () {
    return view('admin_dashboard');
})->name('dashboard');

Route::get('/create', function () {
    return view('create_article');
})->name('create');

Route::get('/edit', function () {
    return view('edit_article');
})->name('edit');

Route::get('/article', function () {
    return view('article_detail');
})->name('article');