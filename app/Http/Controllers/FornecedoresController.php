<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedoresRequest;
use App\Models\Fornecedores;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function store(FornecedoresRequest $request){
        $fornecedores = Fornecedores::create([
            'nome' => $request ->nome,
            'cpf' => $request ->cpf,
            'email' => $request ->email,
            'contato' => $request ->contato,
            'cep' => $request ->cep,
            'inscriçao_municipal' => $request ->inscriçao_municipal,
            'país' => $request ->país,
            'cnpj' => $request ->cnpj,
            'bairro' => $request ->bairro,
            'codigo' => $request ->codigo,
            'cidade' => $request ->cidade,
            'website' => $request ->website

        ]); 
        return response()->json([
            "success" => true, 
            "message" => "Fornecedores cadastrado com sucesso",
            "data" => $fornecedores
        ], 200);
    }
}
