<?php

namespace Src\StagingLayer\Repository\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;
use Src\StagingLayer\Repository\Domain\Contracts\RepositoriesRepositoryContract;
use Src\StagingLayer\Repository\Infrastructure\Repositories\Eloquent\RepositoriesRepository;

final class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->bind(RepositoriesRepositoryContract::class, RepositoriesRepository::class);
    }
}
