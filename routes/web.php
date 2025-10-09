<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

// Kapcsolat
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');

// Rólunk
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

// 🔹 A régi login route-ot töröltük, mert Breeze kezeli!
// require __DIR__.'/auth.php' marad alul, ez hozza be a Breeze útvonalakat

// Breeze (auth) útvonalak
require __DIR__.'/auth.php';

// Admin felület – csak admin láthatja
Route::get('/admin', function () {
    return view('layouts.admin');
})->middleware('role:admin')->name('admin');

// Üzenetek – csak bejelentkezett (registered vagy admin) felhasználóknak
Route::get('/messages', function () {
    return view('layouts.messages');
})->middleware(['auth'])->name('messages');





