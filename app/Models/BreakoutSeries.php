<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BreakoutSeries extends Model
{
    protected $table = 'breakout_series';
    protected $fillable = [
        'codigo',
        'titulo',
        'audio',
        'sinopse',
        'titulo_original',
        'data_lancamento',
        'titulo_alternativo',
        'pais_origem',
        'idioma_original',
        'serie',
        'autores',
        'criadores',
        'obra_original',
        'genero',
        'tags',
        'diretor',
        'estrelas',
        'estudio',
        'mcu',
    ];
}
