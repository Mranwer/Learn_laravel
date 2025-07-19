<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('students-record',[StudentController::class,'insertData']);

Route::get('students-data',[StudentController::class,'dataShow']);
