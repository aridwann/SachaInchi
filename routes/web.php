<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'getTop']);
Route::get('/products', [ProductController::class, 'get']);
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/products/{product}', function (Product $product) {
    return view('detail-product', ['product' => $product]);
});
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

// routes/web.php
Route::get('/products', [ProductController::class, 'index'])->name('products.index');