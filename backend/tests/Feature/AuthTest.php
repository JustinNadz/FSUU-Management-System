<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_with_email_and_password_returns_token_and_user()
    {
        $password = 'secret123';
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => Hash::make($password),
        ]);

        $res = $this->postJson('/api/login', [
            'email' => 'user@example.com',
            'password' => $password,
        ]);

        $res->assertStatus(200)
            ->assertJsonStructure(['token', 'user' => ['id', 'email']]);
    }

    public function test_login_with_invalid_credentials_returns_401()
    {
        $res = $this->postJson('/api/login', [
            'email' => 'nope@example.com',
            'password' => 'bad',
        ]);

        $res->assertStatus(401);
    }
}


