<?php

namespace Src\StagingLayer\Project\Infrastructure\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Src\StagingLayer\Subject\Infrastructure\Repositories\Eloquent\Subject;

class Project extends Model
{
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_projects');
    }
}
