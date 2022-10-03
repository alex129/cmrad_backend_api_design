<?php 

namespace Src\StagingLayer\Subject\Infrastructure\Controllers;

use Src\StagingLayer\Shared\Infrastructure\Controllers\BaseController;
use Src\StagingLayer\Subject\Application\Lists\ListSubjectUseCase;

class ListSubjectController extends BaseController
{
    protected $listSubjectUseCase;

    public function __construct(ListSubjectUseCase $listSubjectUseCase)
    {
        $this->listSubjectUseCase = $listSubjectUseCase;
    }

    public function __invoke()
    {
        return $this->respondWithData('', $this->listSubjectUseCase->__invoke());
    }
}