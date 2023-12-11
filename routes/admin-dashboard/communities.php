<?php

use App\Http\Controllers\Dashboard\Communities\{
    CommunityDeleteController,
    CommunityIndexController,
    CommunityManageController,
};

use Illuminate\Support\Facades\Route;

/** @var Illuminate\Support\Facades\Route*/
Route::middleware(['multi.auth:web|community'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/communities')->group(function () {
            Route::get('', CommunityIndexController::class)->name('dashboard.communities.index');
            Route::get('/{id}/delete', CommunityDeleteController::class)->name('dashboard.communities.delete');
            Route::get('/{id}/manage', CommunityManageController::class)->name('dashboard.communities.manage');

        });
    });
});