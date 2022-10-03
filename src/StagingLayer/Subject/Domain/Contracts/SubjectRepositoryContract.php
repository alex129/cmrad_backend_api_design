<?php 

namespace Src\StagingLayer\Subject\Domain\Contracts;


interface SubjectRepositoryContract 
{
    public function list(): array;

    public function store($request): ?object;
}