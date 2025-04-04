<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trashflix extends Model
{
    protected $table = 'trashflix';
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
