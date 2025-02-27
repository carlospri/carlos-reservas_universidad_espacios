<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('home');
    
});


Route::resource('Home', HomeController::class);
Route::resource('Reserve', ReserveController::class);
Route::resource('Products', ProductsController::class);