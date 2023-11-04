<?php

use App\Http\Controllers\Dashboard\Users\{
    UsersIndexController,
    UserFormCreateController,
    UserCreateController,
    UserFormUpdateController,
    UserUpdateController,
    UserDeleteController,
};
use Illuminate\Support\Facades\Route;


/** @var Illuminate\Support\Facades\Route*/

Route::middleware(['auth'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::prefix('/users')->group(function () {
            Route::get('', UsersIndexController::class)->name('dashboard.users.index')->middleware('can:users.index');
            Route::get('/create', UserFormCreateController::class)->name('dashboard.users.create')->middleware('can:users.create');
            Route::post('/store', UserCreateController::class)->name('dashboard.users.store')->middleware('can:users.store');
            Route::get('/{id}/edit', UserFormUpdateController::class)->name('dashboard.users.edit')->middleware('can:users.edit');
            Route::put('/{id}/update', UserUpdateController::class)->name('dashboard.users.update')->middleware('can:users.update');
            Route::get('/{id}/delete', UserDeleteController::class)->name('dashboard.users.delete')->middleware('can:users.delete');
        });
    });
});
