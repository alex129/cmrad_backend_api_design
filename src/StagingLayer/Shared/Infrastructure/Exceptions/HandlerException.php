<?php

namespace Src\StagingLayer\Shared\Infrastructure\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Src\StagingLayer\Shared\Domain\Exceptions\RequestValidationException;
use Throwable;

final class HandlerException extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

   public function register()
   {
        $this->renderable(function(Throwable $e){
            if($e instanceof RequestValidationException){
                return response()->json($e->toException(), $e->getCode());
            }
        });
   }
}
