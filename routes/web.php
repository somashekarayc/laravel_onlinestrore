<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// |--------------------------------------------------------------------------

Route::get('/', [HomeController::class, 'index'])->name("home.index");
Route::get('/about', [HomeController::class, 'about'])->name("home.about");

// |--------------------------------------------------------------------------

Route::get('/products', [ProductController::class, 'index'])->name("product.index");
Route::get('/products/{id}', [ProductController::class, 'show'])->name("product.show");
