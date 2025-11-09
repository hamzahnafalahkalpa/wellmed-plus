<?php

use Illuminate\Support\Facades\Route;
use Projects\WellmedPlus\Controllers\API\Menu\MenuController;

Route::get('/menu',[MenuController::class,'index'])->name('menu.index');