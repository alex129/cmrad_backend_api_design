<?php 

namespace Src\StagingLayer\Repository\Infrastructure\Controllers;

use Illuminate\Http\Request;
use Src\StagingLayer\Repository\Application\Store\StoreSubjectFromRepositoryUseCase;
use Src\StagingLayer\Shared\Infrastructure\Controllers\BaseController;

class StoreSubjectFromRepositoryController extends BaseController
{
    protected $storeUseCase;

    public function __construct(StoreSubjectFromRepositoryUseCase $storeUseCase)
    {
        $this->storeUseCase = $storeUseCase;
    }

    public function __invoke($repositoryId)
    {
        return $this->respondWithData('', $this->storeUseCase->__invoke($repositoryId));
    }
}