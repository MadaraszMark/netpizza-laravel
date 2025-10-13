<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\Admin\PizzaCrudController;
use App\Http\Controllers\OrderController;

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
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Rólunk
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

// Breeze (auth) útvonalak
require __DIR__.'/auth.php';

// Admin felület
Route::get('/admin', function () {
    return view('layouts.admin');
})->middleware('role:admin')->name('admin');

// Üzenetek 
Route::get('/messages', [MessageController::class, 'index'])
    ->middleware('auth')
    ->name('messages');


Route::get('/chart', [ChartController::class, 'index'])->name('chart');


Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::resource('pizzas', PizzaCrudController::class);
});

// Rendelés
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');






