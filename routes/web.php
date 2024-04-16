<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::apiResource('products', 'ProductController');
Route::apiResource('products/{product}/reviews', 'ReviewController')
    ->only('store', 'update', 'destroy');
