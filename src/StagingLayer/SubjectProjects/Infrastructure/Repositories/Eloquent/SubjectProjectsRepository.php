<?php

namespace Src\StagingLayer\SubjectProjects\Infrastructure\Repositories\Eloquent;

use Src\StagingLayer\Project\Infrastructure\Repositories\Eloquent\Project;
use Src\StagingLayer\Shared\Domain\Exceptions\RequestValidationException;
use Src\StagingLayer\SubjectProjects\Domain\Contracts\SubjectProjectsRepositoryContract;

class SubjectProjectsRepository implements SubjectProjectsRepositoryContract
{
    protected $model;

    public function __construct()
    {
        $this->model = new Project;
    }

    public function get($projectId, $subjectId): ?object
    {
        return $this->model->where('id', $projectId)
        ->whereHas('subjects', function($q) use($subjectId){
            $q->where('subjects.id', $subjectId);
        })->first();
    }

    public function store($projectId, $subjectId): ?object
    {
        $project = $this->model->find($projectId);
        if ($project) {
            try{
                return $this->model->find($projectId)->subjects()->attach($subjectId);
            }catch(\Exception $ex){
                throw new RequestValidationException('Something went wrong, maybe the subject doesn\'t exist', 400);
            }
        } else {
            throw new RequestValidationException('Project doesn\'t exists', 400);
        }
    }
}
