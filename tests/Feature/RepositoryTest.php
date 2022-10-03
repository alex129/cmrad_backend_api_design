<?php

namespace Tests\Feature;

use Database\Seeders\DatabaseSeeder;
use Database\Seeders\ProjectSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RepositoryTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_store_subject_from_repository_where_repo_doesnt_exist()
    {
        $response = $this->post('/api/repositories/1/subjects/1');

        $response
            ->assertStatus(400)
            ->assertJsonStructure([
                'message',
                'status_code'
            ]);
    }

    public function test_store_subject_from_repository()
    {
        $this->seed();
        $response = $this->post('/api/repositories/1/subjects/1');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [],
                'message',
                'status_code'
            ]);
    }
}
