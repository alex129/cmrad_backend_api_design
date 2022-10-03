<?php 

namespace Src\StagingLayer\SubjectProjects\Domain\Contracts;


interface SubjectProjectsRepositoryContract 
{
    public function get($projectId, $subjectId) : ?object;

    public function store($projectId, $subjectId): ?object;
}