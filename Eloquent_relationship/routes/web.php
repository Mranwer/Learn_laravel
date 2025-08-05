<?php

use App\Http\Controllers\SellersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('one-to-one',[SellersController::class,'oneToOne']);

Route::get('one-to-many',[SellersController::class,'oneToMany']);

Route::get('many-to-one',[SellersController::class,'manyToOne']);
