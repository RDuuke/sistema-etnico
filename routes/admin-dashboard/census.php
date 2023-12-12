<?php

use App\Http\Controllers\Dashboard\Census\CensusCreateController;
use App\Http\Controllers\Dashboard\Census\CensusDeleteController;
use App\Http\Controllers\Dashboard\Census\CensusFormCreateController;
use App\Http\Controllers\Dashboard\Census\CensusFormUpdateController;
use App\Http\Controllers\Dashboard\Census\CensusIndexController;
use App\Http\Controllers\Dashboard\Census\CensusUpdateController;
use Illuminate\Support\Facades\Route;

/** @var Illuminate\Support\Facades\Route*/
Route::middleware(['multi.auth:web|community'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/communities/{community_id}')->group(function () {
            Route::prefix('/census')->group(function () {
                Route::get('', CensusIndexController::class)->name('dashboard.census.index');
                Route::get('/create', CensusFormCreateController::class)->name('dashboard.census.create');
                Route::post('/store', CensusCreateController::class)->name('dashboard.census.store');
                Route::get('/{id}/edit', CensusFormUpdateController::class)->name('dashboard.census.edit');
                Route::put('/{id}/update', CensusUpdateController::class)->name('dashboard.census.update');
                Route::get('/{id}/delete', CensusDeleteController::class)->name('dashboard.census.delete');
            });
        });
    });
});
