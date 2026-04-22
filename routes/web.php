<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public_blog_home');
});

Route::get('/login', function () {
    return view('admin_login');
});


Route::get('/dashboard', function () {
    return view('admin_dashboard');
});


Route::get('/create', function () {
    return view('create_article');
});

Route::get('/edit', function () {
    return view('edit_article');
});


Route::get('/article', function () {
    return view('article_detail');
});

