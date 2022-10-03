<?php

namespace Src\StagingLayer\Subject\Infrastructure\Services;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

final class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Src\StagingLayer\Subject\Infrastructure\Controllers';

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
        Route::prefix('api/subjects')
        ->namespace($this->namespace)
        ->group(base_path('src/StagingLayer/Subject/Infrastructure/Routes/api.php'));
    }
}
