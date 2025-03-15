<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Home Page
Route::get('/', function () {
    return view('welcome');
});

// About Page
Route::get('/about', function () {
    return view('about-us');
});

// Resourceful routes for products (Automatically includes index, show, create, store, edit, update, destroy)
Route::resource('products', ProductController::class);
