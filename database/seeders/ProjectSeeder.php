<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Src\StagingLayer\Project\Infrastructure\Repositories\Eloquent\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create();
    }
}
