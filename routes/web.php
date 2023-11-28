<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProductController;

// |--------------------------------------------------------------------------

Route::get('/', [HomeController::class, 'index'])->name("home.index");
Route::get('/about', [HomeController::class, 'about'])->name("home.about");

// |--------------------------------------------------------------------------

Route::get('/products', [ProductController::class, 'index'])->name("product.index");
Route::get('/products/{id}', [ProductController::class, 'show'])->name("product.show");



// |---------------------------------- ADMIN ----------------------------------------
Route::get('/admin', [AdminHomeController::class, 'index'])->name("admin.home.index");
Route::get('/admin/products', [AdminProductController::class, 'index'])->name("admin.product.index");
Route::post('/admin/products/store', [AdminProductController::class, 'store'])->name("admin.product.store");
Route::delete('/admin/products/{id}/delete', [AdminProductController::class, 'delete'])->name("admin.product.delete");


