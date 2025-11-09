<?php

use Illuminate\Support\Facades\Route;
use Projects\WellmedPlus\Controllers\API\Navigation\Auth\UpdatePasswordController;

Route::apiResource('update-password',UpdatePasswordController::class)->only('store');