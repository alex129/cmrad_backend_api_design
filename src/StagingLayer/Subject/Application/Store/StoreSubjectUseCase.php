<?php

namespace Src\StagingLayer\Subject\Application\Store;

use Src\StagingLayer\Subject\Domain\Contracts\SubjectRepositoryContract;

class StoreSubjectUseCase
{
    protected $repository;

    public function __construct(SubjectRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(array $request): ?object
    {
        return $this->repository->store($request);
    }
}
