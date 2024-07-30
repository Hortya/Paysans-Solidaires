<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});
Route::get('/create', [UserController::class,'create'])->name('create');
Route::get('/connexion', [UserController::class,'connexion'])->name('connexion');
Route::post('/store', [UserController::class,'store'])->name('store');
Route::post('/login', [UserController::class,'login'])->name('login');
