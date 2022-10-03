<?php

namespace Src\StagingLayer\Repository\Infrastructure\Repositories\Eloquent;

use Src\StagingLayer\Repository\Domain\Contracts\RepositoriesRepositoryContract;

class RepositoriesRepository implements RepositoriesRepositoryContract
{
    protected $model;

    public function __construct()
    {
        $this->model = new Repository;
    }

    public function get($id): ?object
    {
        return $this->model->find($id);
    }

    public function list(): array
    {
        return $this->model->with('projects', 'subjects')->get()->toArray();
    }

    public function store($request): ?object
    {
        return $this->model->create($request);
    }
}
