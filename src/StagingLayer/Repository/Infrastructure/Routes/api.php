<?php

use Illuminate\Support\Facades\Route;

Route::post('/{repository_id}/subjects', StoreSubjectFromRepositoryController::class);
