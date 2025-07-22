<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('student',[StudentController::class,'insertData']);

Route::get('studentDelete',[StudentController::class,'deleteData']);

Route::get('studentUpdate',[StudentController::class,'updateData']);


