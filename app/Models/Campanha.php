<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $table = 'campanhas';

    protected $fillable = [
        'nome',
        'orcamento',
        'descricao',
        'data_inicio',
        'data_termino',
    ];

    public function influenciadores()
{
    return $this->belongsToMany(Influenciador::class, 'campanha_influenciador');
}
}
