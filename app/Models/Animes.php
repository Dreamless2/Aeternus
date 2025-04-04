<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animes extends Model
{
    protected $table = 'animes';
    protected $fillable = [
        'codigo',
        'titulo',
        'audio',
        'sinopse',
        'titulo_original',
        'data_lancamento',
        'titulo_alternativo',
        'franquia',
        'pais_origem',
        'idioma_original',
        'anime',
        'autores',
        'genero',
        'tags',
        'diretor',
        'estrelas',
        'estudio',
    ];
}
