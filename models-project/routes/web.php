<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('employee',[EmployeeController::class,'insertData']);

Route::get('employee-delete',[EmployeeController::class,'deleteData']);

Route::get('employee-update',[EmployeeController::class,'updateData']);

Route::get('employee-show',[EmployeeController::class,'showData']);

