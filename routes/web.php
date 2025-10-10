<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;

// Kezdőlap
Route::get('/', function () {
    return view('layouts.app');
})->name('home');

// Menü

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// Szolgáltatások
Route::get('/services', function () {
    return view('layouts.services');
})->name('services');

// Kapcsolat (GET = megjelenítés, POST = mentés)
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Rólunk
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

// Breeze (auth) útvonalak
require __DIR__.'/auth.php';

// Admin felület – csak admin láthatja
Route::get('/admin', function () {
    return view('layouts.admin');
})->middleware('role:admin')->name('admin');

// Üzenetek – csak bejelentkezett (registered vagy admin) felhasználóknak
Route::get('/messages', [MessageController::class, 'index'])
    ->middleware('auth')
    ->name('messages');





