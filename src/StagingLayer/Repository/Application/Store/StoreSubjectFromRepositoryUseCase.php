<?php

namespace Src\StagingLayer\Repository\Application\Store;

use Src\StagingLayer\Repository\Domain\Contracts\RepositoriesRepositoryContract;
use Src\StagingLayer\Shared\Domain\Exceptions\RequestValidationException;
use Src\StagingLayer\Subject\Application\Store\StoreSubjectUseCase;

final class StoreSubjectFromRepositoryUseCase
{
    protected $repository;
    protected $storeSubjectUseCase;

    public function __construct(RepositoriesRepositoryContract $repository, StoreSubjectUseCase $storeSubjectUseCase)
    {
        $this->repository = $repository;
        $this->storeSubjectUseCase = $storeSubjectUseCase;
    }

    public function __invoke($repositoryId, array $data = null): ?object
    {
        $repository = $this->repository->get($repositoryId);
        if($repository){
            return $this->storeSubjectUseCase->__invoke(['repository_id' => $repository->id]);
        }else{
            throw new RequestValidationException('Repository doesn\'t exists', 400);
        }
    }
}
