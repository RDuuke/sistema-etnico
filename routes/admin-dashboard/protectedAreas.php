<?php

use App\Http\Controllers\Dashboard\ProtectedAreas\ProtectedAreaCreateController;
use App\Http\Controllers\Dashboard\ProtectedAreas\ProtectedAreaDeleteController;
use App\Http\Controllers\Dashboard\ProtectedAreas\ProtectedAreaFormCreateController;
use App\Http\Controllers\Dashboard\ProtectedAreas\ProtectedAreaFormUpdateController;
use App\Http\Controllers\Dashboard\ProtectedAreas\ProtectedAreaIndexController;
use App\Http\Controllers\Dashboard\ProtectedAreas\ProtectedAreaUpdateController;
use Illuminate\Support\Facades\Route;

/** @var Illuminate\Support\Facades\Route*/
Route::middleware(['multi.auth:web|community'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/communities/{community_id}')->group(function () {
            Route::prefix('/protected-areas')->group(function () {
                Route::get('', ProtectedAreaIndexController::class)->name('dashboard.protected-areas.index');
                Route::get('/create', ProtectedAreaFormCreateController::class)->name('dashboard.protected-areas.create');
                Route::post('/store', ProtectedAreaCreateController::class)->name('dashboard.protected-areas.store');
                Route::get('/{id}/edit', ProtectedAreaFormUpdateController::class)->name('dashboard.protected-areas.edit');
                Route::put('/{id}/update', ProtectedAreaUpdateController::class)->name('dashboard.protected-areas.update');
                Route::get('/{id}/delete', ProtectedAreaDeleteController::class)->name('dashboard.protected-areas.delete');
            });
        });
    });
});
