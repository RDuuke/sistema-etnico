<?php 

/** @var Illuminate\Support\Facades\Route */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\GetCommunityByIdController;



Route::get('/', HomeController::class)->name('home');
Route::view('/natives', 'publics.natives')->name('natives')->middleware(['actualSection:natives']);
Route::view('/afrocolombianos', 'publics.afrocolombianos')->name('afrocolombianos')->middleware(['actualSection:afrocolombianos']);
Route::view('/geographical-portal', 'publics.geographical-portal')->name('geographical-portal')->middleware(['actualSection:geographical']);
Route::view('/village', 'publics.village')->name('village')->middleware(['actualSection:natives']);

Route::get('/community/{id}', GetCommunityByIdController::class)->name('community');
