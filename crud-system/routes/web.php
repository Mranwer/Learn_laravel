<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('add-student','add-student');
// Route::view('list-student','list-student');
Route::post('add-student',[StudentController::class,'addData']);
Route::get('/',[StudentController::class,'listData']);
Route::get('delete-student/{id}',[StudentController::class,'deleteData']);
Route::get('edit-student/{id}',[StudentController::class,'editData']);
Route::put('edit-student-record/{id}',[StudentController::class,'editDataRecord']);


