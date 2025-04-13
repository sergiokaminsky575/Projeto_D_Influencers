<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User; // Certifique-se de importar o User
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_usuario_pode_se_registrar()
    {
        $response = $this->postJson('/api/register', [
            'name' => 'sergio',
            'email' => 'sergio@email.com',
            'password' => '123456',
        ]);

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'token',
                 ]);
    }

    public function test_usuario_pode_fazer_login()
{
    $user = User::factory()->create([
        'password' => bcrypt('123456'), // Garante que o hash bate com o valor do teste
    ]);

    $response = $this->postJson('/api/login', [
        'email' => $user->email,
        'password' => '123456',
    ]);

    $response->assertStatus(200)
             ->assertJsonStructure([
                 'token',
             ]);
}


    public function test_usuario_nao_pode_fazer_login_com_senha_incorreta()
    {
        $user = User::factory()->create();

        $response = $this->postJson('/api/login', [
            'email' => $user->email,
            'password' => 'senhaerrada',
        ]);

        $response->assertStatus(401)
                 ->assertJson([
                     'error' => 'Credenciais inválidas',
                 ]);
    }
}

