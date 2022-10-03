<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Src\StagingLayer\Project\Infrastructure\Repositories\Eloquent\Project;
use Src\StagingLayer\Repository\Infrastructure\Repositories\Eloquent\Repository;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Repository::create();
        Project::create();
    }
}
