<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable =[
        'nome',
        'email',
        'estado_civil',
        'data_nascimento',
        'cidade',
        'estado',
        'endereco',
        'cep',
        'password'

    ];
}
