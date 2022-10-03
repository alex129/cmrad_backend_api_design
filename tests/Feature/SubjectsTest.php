<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubjectsTest extends TestCase
{
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
}
