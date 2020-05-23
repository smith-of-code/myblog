<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testNews()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
    }

    public function testCategory()
    {
        $response = $this->get('/category');

        $response->assertStatus(200);
    }

    public function testAdmin()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }

    public function testFeedback()
    {
        $response = $this->get('/feedback');

        $response->assertStatus(200);
    }
}
