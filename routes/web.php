<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/packages/{package}', [PackageController::class, 'show'])->name('packages.show');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
