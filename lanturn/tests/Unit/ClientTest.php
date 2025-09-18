<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Client;

class ClientTest extends TestCase
{
    public function test_client_has_name_email_phone_address()
    {
        $client = new Client([
            'name' => 'João',
            'email' => 'joao@example.com',
            'phone' => '123456789',
            'address' => 'Rua Exemplo, 123'
        ]);

        $this->assertEquals('João', $client->name);
        $this->assertEquals('joao@example.com', $client->email);
        $this->assertEquals('123456789', $client->phone);
        $this->assertEquals('Rua Exemplo, 123', $client->address);
    }
}
