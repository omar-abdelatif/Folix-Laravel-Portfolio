<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//! Site Routes
Route::middleware('guest')->group(function () {
    Route::view('/', 'frontend.site');
    // Route::get();
});

Auth::routes();
//! Dashboard Routes
Route::group(['prefix' => 'admin/'], function () {
    Route::middleware('auth')->group(function () {
        // Route::view('login', 'auth.login')->name('login');
        Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::view('about', 'about')->name('about');
        Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
        Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
        Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    });
});
