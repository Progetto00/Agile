<?php

namespace Tests\Feature;

use App\Models\Topic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TopicsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    //se si apre la rotta della views che mostra l'elenco dei topics il test passa
    public function test_pagina_elenco_topics()
    {
        $topics = Topic::factory()->create();

        $response = $this->get('/topics');
        $response->assertStatus(200);
    }
}
