<?php 

namespace Src\StagingLayer\Subject\Domain\Contracts;


interface SubjectRepositoryContract 
{
    public function store($request) : ?object;
}