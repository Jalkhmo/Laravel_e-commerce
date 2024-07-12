<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/add-to-cart/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/view-cart', [CartController::class, 'viewCart'])->name('cart.view');

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/checkout', [CartController::class, 'showCheckoutForm'])->name('cart.checkout');
Route::post('/process-order', [CartController::class, 'processOrder'])->name('cart.process');
