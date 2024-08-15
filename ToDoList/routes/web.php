<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('auth.home');
});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('/register', function () {return view('auth.register');})->name('register');
Route::post('custom-login', [AuthController::class, 'login'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth'])->group(function(){

    Route::get('/profile', function () {return view('auth.profile');})->name('profile');
    Route::get('/show', [PostController::class, 'show'])->name('show');

    Route::put('/profile', [AuthController::class, 'update'])->name('update');



    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

    Route::resource('posts', \App\Http\Controllers\PostController::class);
});

