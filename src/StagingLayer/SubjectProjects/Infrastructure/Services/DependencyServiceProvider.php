<?php

namespace Src\StagingLayer\SubjectProjects\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;
use Src\StagingLayer\SubjectProjects\Domain\Contracts\SubjectProjectsRepositoryContract;
use Src\StagingLayer\SubjectProjects\Infrastructure\Repositories\Eloquent\SubjectProjectsRepository;

final class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->bind(SubjectProjectsRepositoryContract::class, SubjectProjectsRepository::class);
    }
}
