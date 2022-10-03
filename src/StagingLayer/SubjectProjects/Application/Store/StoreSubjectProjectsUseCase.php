<?php

namespace Src\StagingLayer\SubjectProjects\Application\Store;

use Src\StagingLayer\Shared\Domain\Exceptions\RequestValidationException;
use Src\StagingLayer\SubjectProjects\Domain\Contracts\SubjectProjectsRepositoryContract;

class StoreSubjectProjectsUseCase
{
    protected $repository;

    public function __construct(SubjectProjectsRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($projectId, $subjectId): ?object
    {
        if(!$this->repository->get($projectId, $subjectId)){
            return $this->repository->store($projectId, $subjectId);
        }else{
            throw new RequestValidationException('This subject is already enrolled in this project', 400);
        }
    }
}
