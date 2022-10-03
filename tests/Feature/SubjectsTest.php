<?php

namespace Tests\Feature;

use Database\Seeders\ProjectSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubjectsTest extends TestCase
{

    use DatabaseMigrations;


    protected $seeder = ProjectSeeder::class;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_store_subject()
    {
        $response = $this->post('/api/subjects');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data',
                'message',
                'status_code'
            ]);
    }

    public function test_get_list_subjects()
    {
        $response = $this->get('/api/subjects');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [],
                'message',
                'status_code'
            ]);
    }
}
