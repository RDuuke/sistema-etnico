<?php 

/** @var Illuminate\Support\Facades\Route */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;



Route::get('/', HomeController::class)->name('home');
Route::view('/natives', 'publics.natives')->name('natives');
Route::view('/afrocolombianos', 'publics.afrocolombianos')->name('afrocolombianos');
Route::view('/geographical-portal', 'publics.geographical-portal')->name('geographical-portal');