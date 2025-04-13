<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campanha;

class CampanhaInfluenciadorController extends Controller
{
    public function vincularInfluenciadores(Request $request, $id)
    {
        $request->validate([
            'influenciadores' => 'required|array',
            'influenciadores.*' => 'exists:influenciadores,id',
        ]);

        $campanha = Campanha::findOrFail($id);
        $campanha->influenciadores()->syncWithoutDetaching($request->influenciadores);

        return response()->json(['mensagem' => 'Influenciadores vinculados com sucesso.']);
    }

    public function listarCampanhasComInfluenciadores()
    {
        $campanhas = Campanha::with('influenciadores')->get();

        return response()->json($campanhas);
    }

    public function listarInfluenciadoresPorCampanha($id)
    {
        $campanha = Campanha::with('influenciadores')->findOrFail($id);

        return response()->json([
            'campanha' => $campanha->nome,
            'influenciadores' => $campanha->influenciadores
        ]);
    }
}
