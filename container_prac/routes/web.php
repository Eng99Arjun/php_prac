<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/order', function () {
    return view('welcome');
});

Route::get('/order', [OrderController::class, 'store']);
