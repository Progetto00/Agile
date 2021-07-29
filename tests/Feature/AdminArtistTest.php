<?php

namespace Tests\Feature;

use App\Models\Artist;
use App\Models\Image;
use App\Models\Kind;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AdminArtistTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_visualizza_pagina_artista()
    {
        // Autenticazione
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();

        $artist = Artist::factory()->create();
        $response = $this->get('/admin/artista-'.$artist->id);

        $response->assertStatus(404);
    }
}

