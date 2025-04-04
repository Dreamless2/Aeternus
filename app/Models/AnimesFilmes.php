<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimesFilmes extends Model
{
    protected $table = 'animes_filmes';
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
