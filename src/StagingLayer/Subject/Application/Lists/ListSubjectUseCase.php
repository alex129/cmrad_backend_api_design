<?php

namespace Src\StagingLayer\Subject\Application\Lists;

use Src\StagingLayer\Subject\Domain\Contracts\SubjectRepositoryContract;

class ListSubjectUseCase
{
    protected $repository;

    public function __construct(SubjectRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): array
    {
        return $this->repository->list();
    }
}
