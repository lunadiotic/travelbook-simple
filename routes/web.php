<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/packages/{package}', [PackageController::class, 'show'])->name('packages.show');
