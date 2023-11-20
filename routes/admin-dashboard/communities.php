<?php

use App\Http\Controllers\Dashboard\Communities\{
    CommunityIndexController,
};

use Illuminate\Support\Facades\Route;

/** @var Illuminate\Support\Facades\Route*/
Route::middleware(['multi.auth:web|community'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/communities')->group(function () {
            Route::get('', CommunityIndexController::class)->name('dashboard.communities.index');
        });
    });
});