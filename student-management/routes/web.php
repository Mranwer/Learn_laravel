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
Route::get('edit-data/{id}',[StudentController::class,'editData']);
Route::put('update-record/{id}',[StudentController::class,'editRecord']);
Route::get('search-data',[StudentController::class,'search']);


