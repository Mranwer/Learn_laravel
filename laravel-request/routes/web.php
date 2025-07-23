<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('user-form','user-form');

// Route::post('create-user',[UserController::class,'abc']);
Route::view('profile','profile');

Route::post('users',[UserController::class,'login']);
Route::get('users-logout',[UserController::class,'logout']);
