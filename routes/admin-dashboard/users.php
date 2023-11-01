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

Route::prefix('/dashboard')->group(function () {

    Route::prefix('/users')->group(function () {
        Route::get('', UsersIndexController::class)->name('dashboard.users.index');
        Route::get('/create', UserFormCreateController::class)->name('dashboard.users.create');
        Route::post('/store', UserCreateController::class)->name('dashboard.users.store');
        Route::get('/{id}/edit', UserFormUpdateController::class)->name('dashboard.users.edit');
        Route::put('/{id}/update', UserUpdateController::class)->name('dashboard.users.update');
        Route::get('/{id}/delete', UserDeleteController::class)->name('dashboard.users.delete');
    });
});
