<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Home & About
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Plant catalog (was "menu")
Route::get('/plants', [PlantController::class, 'index'])->name('plants');
Route::get('/plants/{id}', [PlantController::class, 'show'])->name('plants.show');
Route::get('/plants/{id}/reviews', [PlantController::class, 'reviews'])->name('plants.reviews');

// Cart
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
