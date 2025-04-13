<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfluenciadorController;
use App\Http\Controllers\CampanhaController;
use App\Http\Controllers\CampanhaInfluenciadorController;
// Influenciadores
Route::get('/influenciadores', [InfluenciadorController::class, 'index']);
Route::post('/influenciadores', [InfluenciadorController::class, 'store']);

// Campanhas
Route::get('/campanhas', [CampanhaController::class, 'index']);
Route::post('/campanhas', [CampanhaController::class, 'store']);