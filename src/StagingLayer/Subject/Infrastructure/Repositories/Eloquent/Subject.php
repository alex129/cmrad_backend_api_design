<?php

namespace Src\StagingLayer\Subject\Infrastructure\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Src\StagingLayer\Project\Infrastructure\Repositories\Eloquent\Project;

class Subject extends Model
{

    protected $fillable = ["repository_id"];
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'subject_projects');
    }
}
