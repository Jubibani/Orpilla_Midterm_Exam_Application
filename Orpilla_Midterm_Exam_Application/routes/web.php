<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Add this route for the root URL
Route::get('/', function () {
    return redirect('/products');
});

Route::get('/products', [ProductController::class, 'index']);
