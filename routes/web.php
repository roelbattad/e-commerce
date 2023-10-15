<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('product/{id}', [App\Http\Controllers\ProductController::class, 'index']);
