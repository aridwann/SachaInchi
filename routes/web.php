<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'getTop']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/login', fn () => view('login'));
Route::get('/register', fn () => view('register'));

Route::get('/products/{product}', function (Product $product) {
    return view('detail-product', ['product' => $product]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/update/{id}/{qty}', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/clear', function () {
    session()->forget('cart');
    return response()->json(['success' => true]);
});
Route::post('/cart/remove-selected', [CartController::class, 'removeSelected'])->name('cart.removeSelected');

Route::get('/dashboard', function (){
    $products = Product::latest();

    if(request('query')){
        $products->where('name', 'like', '%'.request('query').'%');
    }

    return view('dashboard', ['products' => $products->paginate(6)->withQueryString()]);
});
// Route untuk menampilkan form edit produk
Route::get('/dashboard/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Route untuk memproses update produk
Route::patch('/dashboard/{product}', [ProductController::class, 'update'])->name('products.update');

// Route hapus
Route::delete('/dashboard/{product}', [ProductController::class, 'destroy'])->name('products.destroy');