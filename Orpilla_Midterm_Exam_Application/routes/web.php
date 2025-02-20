<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
