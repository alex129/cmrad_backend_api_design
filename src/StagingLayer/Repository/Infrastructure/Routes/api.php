<?php

use Illuminate\Support\Facades\Route;

Route::post('/{repository_id}/subjects/{subject_id}', StoreSubjectFromRepositoryController::class);
