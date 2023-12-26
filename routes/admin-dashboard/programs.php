<?php

use App\Http\Controllers\Dashboard\Programs\ProgramDeleteController;
use App\Http\Controllers\Dashboard\Programs\ProgramsCreateAndEditController;
use App\Http\Controllers\Dashboard\Programs\ProgramsIndexController;
use Illuminate\Support\Facades\Route;

/** @var Illuminate\Support\Facades\Route*/
Route::middleware(['multi.auth:web|community'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/communities/{community_id}')->group(function () {
            Route::prefix('/programs')->group(function () {
                Route::get('', ProgramsIndexController::class)->name('dashboard.programs.index');
                Route::get('/create-and-edit/{id}', ProgramsCreateAndEditController::class)->name('dashboard.programs.create-and-edit');
                Route::get('/{id}/delete', ProgramDeleteController::class)->name('dashboard.program.delete');
            });
        });
    });
});
