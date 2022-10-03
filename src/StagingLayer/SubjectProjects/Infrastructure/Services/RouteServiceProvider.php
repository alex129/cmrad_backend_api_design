<?php

namespace Src\StagingLayer\SubjectProjects\Infrastructure\Services;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

final class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Src\StagingLayer\SubjectProjects\Infrastructure\Controllers';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapRoutes();
    }

    public function mapRoutes() 
    {
        Route::prefix('api')
        ->namespace($this->namespace)
        ->group(base_path('src/StagingLayer/SubjectProjects/Infrastructure/Routes/api.php'));
    }
}
