<?php

use Illuminate\Support\Facades\Route;

// Kezdőlap
Route::get('/', function () {
    return view('layouts.app');
})->name('home');

// Menü
Route::get('/menu', function () {
    return view('layouts.menu');
})->name('menu');

// Szolgáltatások
Route::get('/services', function () {
    return view('layouts.services');
})->name('services');

// Kapcsolat
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');

// Rólunk
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

// Bejelentkezés / Regisztráció (a blog helyett)
Route::view('/login', 'layouts.login')->name('login');

// Breeze (auth) útvonalak
require __DIR__.'/auth.php';


