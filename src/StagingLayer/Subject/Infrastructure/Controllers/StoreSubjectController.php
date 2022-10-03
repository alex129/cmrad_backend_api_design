<?php 

namespace Src\StagingLayer\Subject\Infrastructure\Controllers;

use Illuminate\Http\Request;
use Src\StagingLayer\Shared\Infrastructure\Controllers\BaseController;
use Src\StagingLayer\Subject\Application\Store\StoreSubjectUseCase;

class StoreSubjectController extends BaseController
{
    protected $storeUseCase;

    public function __construct(StoreSubjectUseCase $storeUseCase)
    {
        $this->storeUseCase = $storeUseCase;
    }

    public function __invoke(Request $request)
    {
        return $this->respondWithData('', $this->storeUseCase->__invoke($request->all()));
    }
}