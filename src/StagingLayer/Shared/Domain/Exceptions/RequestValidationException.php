<?php

namespace Src\StagingLayer\Shared\Domain\Exceptions;

final class RequestValidationException extends \Exception
{
    public function toException(): array
    {
        $classTemporaly = new \ReflectionClass(get_class($this));
        $class = explode('\\', $classTemporaly->getName());
        return [
            'message' => $this->getMessage(),
            'success' => false,
            'class' => end($class),
            'status_code' => $this->getCode()
        ];
    }
}
