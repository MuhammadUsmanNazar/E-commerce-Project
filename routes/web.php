<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/login', function () {
    return view('components.auth.login');
})->name('login');
Route::get('/signup', function () {
    return view('components.auth.signup');
})->name('register');