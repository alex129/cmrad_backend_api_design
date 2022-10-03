<?php

use Illuminate\Support\Facades\Route;

Route::post('/projects/{project_id}/subjects/{subject_id}', StoreSubjectProjectsController::class);
