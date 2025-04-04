<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BreakoutFilmes extends Model
{
    protected $table = 'breakout_filmes';
    protected $fillable = [
        'codigo',
        'titulo',
        'audio',
        'sinopse',
        'titulo_original',
        'data_lancamento',
        'titulo_alternativo',
        'franquia',
        'genero',
        'tags',
        'diretor',
        'estrelas',
        'estudio',
    ];
}
