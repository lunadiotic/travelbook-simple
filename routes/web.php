<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/package/search', [PackageController::class, 'search'])->name('package.search');
Route::get('/package/{package}', [PackageController::class, 'show'])->name('package.show');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::post('/booking/check', [BookingController::class, 'check'])->name('booking.check');

Route::get('/login', [AuthController::class, 'loginPage'])->name('auth.login');
