<?php

namespace App\Http\Controllers;

use App\Models\Campanha;
use Illuminate\Http\Request;

class CampanhaController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string',
            'orcamento' => 'required|numeric|min:0.01',
            'descricao' => 'nullable|string',
            'data_inicio' => 'required|date',
            'data_termino' => 'required|date|after_or_equal:data_inicio',
        ]);

        $campanha = Campanha::create($validated);
        return response()->json($campanha, 201);
    }

    public function index()
    {
        return response()->json(Campanha::all());
    }
}
