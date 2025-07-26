<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('student-list');
// });
Route::view('student-add','student-add');
Route::get('/',[StudentController::class,'showdata']);
Route::post('add-data',[StudentController::class,'addData']);
Route::get('delete-data/{id}',[StudentController::class,'deleteData']);


