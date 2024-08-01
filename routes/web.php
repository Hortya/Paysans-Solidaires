<?php

use App\Http\Controllers\Auth\RegisteredUserController as AuthRegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware('role:admin')->group(function (){
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
    Route::get('/role', function () {
        return view('role');
    });
});

Route::get('/admin1', function(){
    return view('admin1');
});
Route::get('/admin2', function(){
    return view('admin2');
});
Route::get('/admin3', function(){
    return view('admin3');
});