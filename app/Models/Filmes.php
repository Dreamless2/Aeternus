<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $table = 'filmes';
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
        'mcu',
    ];
}
