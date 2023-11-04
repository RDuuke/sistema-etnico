<?php

use App\Http\Controllers\Dashboard\CommunityUsers\{
    Community_UserCreateController,
    Community_UserDeleteController,
    Community_UserFormCreateController,
    Community_UserFormUpdateController,
    Community_UserIndexController,
    Community_UserUpdateController,
};

use Illuminate\Support\Facades\Route;

/** @var Illuminate\Support\Facades\Route*/

Route::middleware(['auth'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/community-users')->group(function () {
            Route::get('', Community_UserIndexController::class)->name('dashboard.community-users.index')->middleware('can:community-users.index');
            Route::get('/create', Community_UserFormCreateController::class)->name('dashboard.community-users.create')->middleware('can:community-users.create');
            Route::post('/store', Community_UserCreateController::class)->name('dashboard.community-users.store')->middleware('can:community-users.store');
            Route::get('/{id}/edit', Community_UserFormUpdateController::class)->name('dashboard.community-users.edit')->middleware('can:community-users.edit');
            Route::put('/{id}/update', Community_UserUpdateController::class)->name('dashboard.community-users.update')->middleware('can:community-users.update');
            Route::get('/{id}/delete', Community_UserDeleteController::class)->name('dashboard.community-users.delete')->middleware('can:community-users.delete');
        });
    });
});
