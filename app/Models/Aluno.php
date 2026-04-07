<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'aluno';
    protected $filllable = [ //colunas da tabela
        'nome',
        'email',
        'telefone'
    ];

}
