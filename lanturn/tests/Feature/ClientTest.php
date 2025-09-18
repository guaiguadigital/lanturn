<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Client;

class ClientTest extends TestCase
{
    use RefreshDatabase;

    public function test_client_index_page_loads()
    {
        $response = $this->get('/clients');
        $response->assertStatus(200);
        $response->assertSee('Clientes');
    }

    public function test_can_create_client()
    {
        $response = $this->post('/clients', [
            'name' => 'Maria',
            'email' => 'maria@example.com',
            'phone' => '987654321',
            'address' => 'Rua Nova, 456'
        ]);

        $response->assertRedirect('/clients');
        $this->assertDatabaseHas('clients', ['email' => 'maria@example.com']);
    }

    public function test_can_update_client()
    {
        $client = Client::create([
            'name' => 'Carlos',
            'email' => 'carlos@example.com',
            'phone' => '111222333',
            'address' => 'Rua Velha, 789'
        ]);

        $response = $this->put("/clients/{$client->id}", [
            'name' => 'Carlos Atualizado',
            'email' => 'carlos@example.com',
            'phone' => '111222333',
            'address' => 'Rua Velha, 789'
        ]);

        $response->assertRedirect('/clients');
        $this->assertDatabaseHas('clients', ['name' => 'Carlos Atualizado']);
    }

    public function test_can_delete_client()
    {
        $client = Client::create([
            'name' => 'Ana',
            'email' => 'ana@example.com',
            'phone' => '444555666',
            'address' => 'Rua Teste, 101'
        ]);

        $response = $this->delete("/clients/{$client->id}");
        $response->assertRedirect('/clients');
        $this->assertDatabaseMissing('clients', ['email' => 'ana@example.com']);
    }
}
