<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController as AuthRegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    $user =  User::find(Auth::id());
    return view('dashboard', $user);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware('role:admin')->group(function (){
    Route::get('/admin', [AdminController::class, 'display'])->name('admin');
    Route::get('/admin-{id}', [AdminController::class, 'show'])->name('admin-id');
    Route::post('/admin-edit', [AdminController::class, 'edit'])->name('admin-edit');
    Route::get('/admin-role-{id}', [AdminController::class, 'show-role'])->name('role-id');
});

