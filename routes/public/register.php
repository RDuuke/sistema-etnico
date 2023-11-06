<?php

/** @var Illuminate\Support\Facades\Route*/

use App\Http\Controllers\Public\PublicCommunityUserCreateController;
use App\Http\Controllers\Public\RegisterUserFormController;
use Illuminate\Support\Facades\Route;

Route::get('register-community', RegisterUserFormController::class)->name('form-register')
->middleware('guest');

Route::post('register', PublicCommunityUserCreateController::class)->name('register')
->middleware('guest');