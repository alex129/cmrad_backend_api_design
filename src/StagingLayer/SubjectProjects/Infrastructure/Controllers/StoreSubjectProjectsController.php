<?php 

namespace Src\StagingLayer\SubjectProjects\Infrastructure\Controllers;

use Src\StagingLayer\Shared\Infrastructure\Controllers\BaseController;
use Src\StagingLayer\SubjectProjects\Application\Store\StoreSubjectProjectsUseCase;

class StoreSubjectProjectsController extends BaseController
{
    protected $storeUseCase;

    public function __construct(StoreSubjectProjectsUseCase $storeUseCase)
    {
        $this->storeUseCase = $storeUseCase;
    }

    public function __invoke($projectId, $subjectId)
    {
        return $this->respondWithData('', $this->storeUseCase->__invoke($projectId, $subjectId));
    }
}