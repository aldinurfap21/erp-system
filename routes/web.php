<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Halaman utama
Route::get('/', function () {
    return view('welcome'); // resources/views/web.blade.php
});

// Resourceful route untuk produk
Route::resource('products', ProductController::class);
