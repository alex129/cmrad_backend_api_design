<?php

namespace Src\StagingLayer\Repository\Infrastructure\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Src\StagingLayer\Project\Infrastructure\Repositories\Eloquent\Project;
use Src\StagingLayer\Subject\Infrastructure\Repositories\Eloquent\Subject;

class Repository extends Model
{
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
