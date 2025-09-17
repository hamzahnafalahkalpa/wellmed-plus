<?php

use Illuminate\Support\Facades\Route;
use Projects\Klinik\Controllers\API\Navigation\Profile\ProfileController;
use Projects\Klinik\Controllers\API\Navigation\Profile\ProfilePhotoController;

Route::apiResource('profile',ProfileController::class)
    ->only(['store','show'])->parameters(['profile' => 'uuid']);
    
Route::apiResource('profile-photo',ProfilePhotoController::class)
    ->only('store','show')->parameters(['profile-photo' => 'uuid']);