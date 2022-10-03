<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ListSubjectController::class);
Route::post('/', StoreSubjectController::class);
