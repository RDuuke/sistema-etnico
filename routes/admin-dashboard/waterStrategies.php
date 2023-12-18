<?php

use App\Http\Controllers\Dashboard\WaterStrategies\WaterStrategyIndexController;
use Illuminate\Support\Facades\Route;

/** @var Illuminate\Support\Facades\Route*/
Route::middleware(['multi.auth:web|community'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/communities/{community_id}')->group(function () {
            Route::prefix('/water-strategies')->group(function () {
                Route::get('', WaterStrategyIndexController::class)->name('dashboard.water.index');
            });
        });
    });
});
