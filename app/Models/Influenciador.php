<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Influenciador extends Model
{
    protected $table = 'influenciadores'; // nome da tabela no banco
    protected $fillable = ['nome', 'instagram_usuario', 'seguidores', 'categoria'];
}