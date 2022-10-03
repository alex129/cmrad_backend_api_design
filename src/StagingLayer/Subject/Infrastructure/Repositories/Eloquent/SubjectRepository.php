<?php

namespace Src\StagingLayer\Subject\Infrastructure\Repositories\Eloquent;

use Src\StagingLayer\Subject\Domain\Contracts\SubjectRepositoryContract;

class SubjectRepository implements SubjectRepositoryContract
{
    protected $model;

    public function __construct()
    {
        $this->model = new Subject;
    }

    public function list(): array
    {
        return $this->model->with('projects')->get()->toArray();    
    }

    public function store($request): ?object
    {
        return $this->model->create($request);
    }
}
