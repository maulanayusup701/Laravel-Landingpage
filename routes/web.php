<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QNAController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index');
});

Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login-store', 'loginStore')->name('login-store');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/package', 'package')->name('package');
        Route::post('/logout', 'logout')->name('logout');
    });
    Route::resource('/QNA', QNAController::class);
    Route::resource('/package', PackageController::class);
    
});