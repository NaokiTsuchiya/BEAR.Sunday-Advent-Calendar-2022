<?php

namespace Tests\Feature;

use Tests\TestCase;

class GreetingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/greeting');

        $response->assertStatus(200);
        $response->assertJson(['greeting' => 'Hello other'], true);
        $response->assertHeader('content-type', 'application/json');
    }
}
