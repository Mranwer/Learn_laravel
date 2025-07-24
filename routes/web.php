<?php

use App\Http\Controllers\DisplayController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::view('form','upload');
Route::post('upload',[DisplayController::class,'fileUpload']);
