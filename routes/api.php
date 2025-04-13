<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfluenciadorController;
use App\Http\Controllers\CampanhaController;
use App\Http\Controllers\CampanhaInfluenciadorController;
use App\Http\Controllers\AuthController;

// Rotas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rotas protegidas
Route::middleware('auth:api')->group(function () {

// Influenciadores
Route::get('/influenciadores', [InfluenciadorController::class, 'index']);
Route::post('/influenciadores', [InfluenciadorController::class, 'store']);

// Campanhas
Route::get('/campanhas', [CampanhaController::class, 'index']);
Route::post('/campanhas', [CampanhaController::class, 'store']);



// Relacionamento campanha x influenciadores
Route::post('/campanhas/{id}/influenciadores', [CampanhaInfluenciadorController::class, 'vincularInfluenciadores']);
Route::get('/campanhas-com-influenciadores', [CampanhaInfluenciadorController::class, 'listarCampanhasComInfluenciadores']);
Route::get('/campanhas/{id}/influenciadores', [CampanhaInfluenciadorController::class, 'listarInfluenciadoresPorCampanha']);
});