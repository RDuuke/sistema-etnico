<?php

use App\Http\Controllers\Auth\FormLogInController;
use App\Http\Controllers\Auth\LogInController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\LogoutController;

/** @var Illuminate\Support\Facades\Route*/

Route::get('/login', FormLogInController::class)->name('form-login')->middleware('guest');
Route::post('/login', LogInController::class)->name('login')->middleware('guest');
Route::get('/logout', LogoutController::class)->name('logout');


Route::get('/dashboard', DashboardController::class)->name('dashboard')->middleware('multi.auth:web|community');