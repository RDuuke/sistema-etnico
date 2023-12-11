<?php

use App\Http\Controllers\Dashboard\Census\CensusCreateController;
use App\Http\Controllers\Dashboard\Census\CensusIndexController;
use Illuminate\Support\Facades\Route;

/** @var Illuminate\Support\Facades\Route*/
Route::middleware(['multi.auth:web|community'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/communities/{community_id}')->group(function () {
            Route::prefix('/census')->group(function () {
                Route::get('', CensusIndexController::class)->name('dashboard.census.index');
                Route::post('/create', CensusCreateController::class)->name('dashboard.census.create');
            });
        });
    });
});
