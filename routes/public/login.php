<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;

/** @var Illuminate\Support\Facades\Route*/

Route::get('/', DashboardController::class)->name('dashboard')->middleware('guest');