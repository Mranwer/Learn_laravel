<?php

use App\Http\Controllers\MailerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list',[SellersController::class
,'list']);

Route::get('many',[SellersController::class
,'manyRel']);

Route::get('many-to-one',[SellersController::class
,'manyToOne']);

Route::view('display-form','mail');
Route::post('send-email',[MailerController::class
,'sendEmail']);