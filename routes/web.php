<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReserveController;

Route::get('/', function () {
    return view('home');
    
});


Route::resource('Home', HomeController::class);
Route::resource('Reserve', ReserveController::class);