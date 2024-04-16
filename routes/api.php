<?php

use Illuminate\Support\Facades\Route;


Route::get('me', 'AuthController@me');
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::post('logout', 'AuthController@logout');

?>
