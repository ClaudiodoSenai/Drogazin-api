<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'contato',
        'cep',
        'inscriçao municipal',
        'país',
        'cnpj',
        'bairro',
        'codigo',
        'cidade',
        'website'

    ];  
}
