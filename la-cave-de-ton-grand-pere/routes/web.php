<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\OrderController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/add-to-cart/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/view-cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::get('/checkout', [CartController::class, 'showCheckoutForm'])->name('cart.checkout');
Route::post('/process-order', [CartController::class, 'processOrder'])->name('cart.process');

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::get('/categories', [AdminCategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [AdminCategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [AdminCategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [AdminCategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [AdminCategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [AdminCategoryController::class, 'destroy'])->name('categories.destroy');

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
});
