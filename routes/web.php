<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});
Route::get('/connection', [UserController::class,'create']);
Route::post('/store', [UserController::class,'store'])->name('store');