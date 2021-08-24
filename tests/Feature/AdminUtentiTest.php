<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminUtentiTest extends TestCase {

    use RefreshDatabase;

    public function test_carica_pagina() {

        // Autenticazione
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();

        $response = $this->get('/admin/gestione-utenti');
        $response->assertStatus(200);
    }

    public function test_crea_admin() {

        // Autenticazione
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();

        $response = $this->post('/admin/gestione-utenti', [
            "action" => "insertAdmin",
            "user" => 1,
        ]);

        $response->assertStatus(200);
    }

    public function test_elimina_admin() {

        // Autenticazione
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();

        $response = $this->post('/admin/gestione-utenti', [
            "action" => "deleteAdmin",
            "user" => 1,
        ]);

        $response->assertStatus(200);
    }


}
