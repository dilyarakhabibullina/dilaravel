<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MySecondTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_2()
    {
        $response = $this->get('/create');
        $response->assertStatus(200);
        $response->assertRedirectContains('/admin');
    }
}
