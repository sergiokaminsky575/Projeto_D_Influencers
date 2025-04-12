<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfluenciadorController;

Route::get('/influenciadores', [InfluenciadorController::class, 'index']);
Route::post('/influenciadores', [InfluenciadorController::class, 'store']);