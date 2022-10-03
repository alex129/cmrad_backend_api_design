<?php

namespace Src\StagingLayer\Repository\Infrastructure\Services;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

final class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Src\StagingLayer\Repository\Infrastructure\Controllers';

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
        Route::prefix('api/repositories')
        ->namespace($this->namespace)
        ->group(base_path('src/StagingLayer/Repository/Infrastructure/Routes/api.php'));
    }
}
