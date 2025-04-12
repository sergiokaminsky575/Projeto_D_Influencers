<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Influenciador;

class InfluenciadorController extends Controller
{
    public function index()
    {
        return response()->json(Influenciador::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string',
            'instagram_usuario' => 'required|string|unique:influenciadores,instagram_usuario',
            'seguidores' => 'required|integer|min:1',
            'categoria' => 'required|string',
        ]);

        $influenciador = Influenciador::create($validated);
        return response()->json($influenciador, 201);
    }
}