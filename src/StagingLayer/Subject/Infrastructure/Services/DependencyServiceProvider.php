<?php

namespace Src\StagingLayer\Subject\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;
use Src\StagingLayer\Subject\Domain\Contracts\SubjectRepositoryContract;
use Src\StagingLayer\Subject\Infrastructure\Repositories\Eloquent\SubjectRepository;

final class DependencyServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->bind(SubjectRepositoryContract::class, SubjectRepository::class);
    }
}
