<?php

namespace Tests\Feature;

use App\Models\Contattaci;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContattaciTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_viualizza_pagina_contattaci()
    {
        $response = $this->get('/contact-us');

        $response->assertStatus(200);
    }
}