<?php

use App\Http\Controllers\Dashboard\CommunityUsers\{
    Community_DisabledUserController,
    Community_EnableUserController,
    Community_UserCreateController,
    Community_UserDeleteController,
    Community_UserFormCreateController,
    Community_UserFormUpdateController,
    Community_UserIndexController,
    Community_UserUpdateController,
};

use Illuminate\Support\Facades\Route;

/** @var Illuminate\Support\Facades\Route*/
Route::middleware(['multi.auth:web|community'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/community-users')->group(function () {
            Route::get('', Community_UserIndexController::class)->name('dashboard.community-users.index');
            Route::get('/create', Community_UserFormCreateController::class)->name('dashboard.community-users.create');
            Route::post('/store', Community_UserCreateController::class)->name('dashboard.community-users.store');
            Route::get('/{id}/edit', Community_UserFormUpdateController::class)->name('dashboard.community-users.edit');
            Route::put('/{id}/update', Community_UserUpdateController::class)->name('dashboard.community-users.update');
            Route::get('/{id}/delete', Community_UserDeleteController::class)->name('dashboard.community-users.delete');
            Route::get('/{id}/enable', Community_EnableUserController::class)->name('dashboard.community-users.enable');
            Route::get('/{id}/disabled', Community_DisabledUserController::class)->name('dashboard.community-users.disabled');
        });
    });
});