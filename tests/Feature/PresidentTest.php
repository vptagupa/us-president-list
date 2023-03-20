<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;

class PresidentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_the_presidents_list_should_return_response(): void
    {
        $response = $this->get('/api/list-of-presidents');

        $response->assertStatus(200)->assertJsonStructure([
            '*' => [
                'name',
                'year_started',
                'year_ended',
            ]
        ]);
    }
}
