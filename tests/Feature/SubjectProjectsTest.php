<?php

namespace Tests\Feature;

use Database\Seeders\ProjectSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Src\StagingLayer\Subject\Infrastructure\Repositories\Eloquent\Subject;
use Tests\TestCase;

class SubjectProjectsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_asign_project_doesnt_exists_to_subject()
    {
        $response = $this->post('/api/projects/1/subjects/1');

        $response
            ->assertStatus(400)
            ->assertJson([
                'message' => 'Project doesn\'t exists'
            ])
            ->assertJsonStructure([
                'message',
                'status_code'
            ]);
    }

    public function test_asign_project_where_subject_doesnt_exist()
    {
        $this->seed(ProjectSeeder::class);
        $response = $this->post('/api/projects/1/subjects/1');

        $response
            ->assertStatus(400)
            ->assertJson([
                'message' => 'Something went wrong, maybe the subject doesn\'t exists'
            ])
            ->assertJsonStructure([
                'message',
                'status_code'
            ]);
    }

    public function test_asign_project_to_subject()
    {
        Subject::create();
        $this->seed(ProjectSeeder::class);

        $response = $this->post('/api/projects/1/subjects/1');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data',
                'message',
                'status_code'
            ]);
    }
}
