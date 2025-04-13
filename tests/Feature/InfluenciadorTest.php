<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;

class InfluenciadorTest extends TestCase
{
    use RefreshDatabase;
    protected function setUp(): void
    {
        parent::setUp();
    
        // 🔧 Garante que o guard api está usando JWT no ambiente de teste
        config(['auth.guards.api.driver' => 'jwt']);
    }
    public function test_usuario_autenticado_pode_listar_influenciadores()
    {
        try {
            // Cria um usuário
            $user = User::factory()->create();
            
            // Verifica se o usuário foi criado com sucesso no banco de dados
            $this->assertDatabaseHas('users', [
                'email' => $user->email,  // Pode ser ajustado conforme o campo que você usa para identificar o usuário
            ]);

            JWTAuth::factory()->setTTL(60); // Evita TTL zerado
            
            // Gera token JWT para o usuário
            $token = JWTAuth::fromUser($user);

            // Faz a requisição com o token
            $response = $this->withHeaders([
                'Authorization' => "Bearer $token",
            ])->get('/api/influenciadores');

            // Verifica se a resposta é 200 OK
            $response->assertStatus(200);
        } catch (\Exception $e) {
            Log::error('Erro ao criar usuário ou realizar requisição: ' . $e->getMessage());
            throw $e;  // Re-lança a exceção para garantir que o teste falhe
        }
    }

    public function test_usuario_nao_autenticado_nao_pode_listar_influenciadores()
{
    $response = $this->getJson('/api/influenciadores'); // Requisição sem token
    $response->assertStatus(401); // Verifica se o código de status é 401
    $response->assertJson([
        'message' => 'Unauthenticated.', // Mensagem correta retornada pela API
    ]);
}
}
