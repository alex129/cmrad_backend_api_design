<?php 

namespace Src\StagingLayer\Repository\Domain\Contracts;


interface RepositoriesRepositoryContract 
{
    public function get($id): ?object;
    public function list(): array;
    public function store($request): ?object;
}