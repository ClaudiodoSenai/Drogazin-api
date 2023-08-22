<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FornecedoresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|max:80|min:1',
            'cpf' => 'required|max:11|min:11|unique:fornecedores,cpf',
            'contato' => 'required|max:15|min:9',
            'email' => 'required|email|unique:fornecedores,email',
            'cep' => 'required|max:8|min:8',
            'inscriçao_municipal' => 'required|max:11|min:8|unique:fornecedores,inscriçao_municipal',
            'país' => 'required|max:50',
            'cnpj' => 'required|max:14|unique:fornecedores,cnpj',
            'bairro' =>'required|max:40|min:1',
            'codigo' => 'required|max:12|unique:fornecedores,codigo',
            'cidade' =>'required|max:60|min:1',
            'website' => 'required|max:100|unique:fornecedores,website',

        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'nome.required' => "O campo nome é obrigatorio",
            'nome.max' => 'o campo nome deve conter no máximo 80 caracteres',
            'nome.min' => 'o campo nome deve conter no minimo 5 caracteres',
            'cpf.required' => 'CPF obrigatório',
            'cpf.max' => 'CPF deve conter no máximo 11 caracteres',
            'cpf.min' => 'CPF deve conter no mínimo 11 caracteres',
            'cpf.unique' => 'Cpf Já cadastrado no sistema',
            'contato.required' => 'contato obrigatorio',
            'contato.max' => 'contato deve conter no maximo 15 caracteres',
            'contato.min' => 'contato deve conter no minimo 10 caracteres',
            'email.required' => 'Email obrigatorio',
            'email.email' => 'formato de email invalido',
            'email.unique' => 'E-mail já cadastrado',
            'cep.required' => "O campo cep é obrigatorio",
            'cep.max' => 'o campo cep deve conter no máximo 80 caracteres',
            'cep.min' => 'o campo cep deve conteCPFr no minimo 5 caracteres',
            'inscriçao_municipal.required' => 'inscriçao municipal obrigatório',
            'inscriçao_municipal.max' => 'inscriçao municipal deve conter no máximo 11 caracteres',
            'inscriçao_municipal.min' => 'inscriçao municipal deve conter no mínimo 11 caracteres',
            'inscriçao_municipal.unique' => 'inscriçao municipal Já cadastrado no sistema',
            'país.required' => 'Pais obrigatório',
            'país.max' => 'Pais deve conter no máximo 11 caracteres',
            'cnpj.required' => 'cnpj obrigatório',
            'cnpj.max' => 'cnpj deve conter no máximo 11 caracteres',
            'cnpj.min' => 'cnpj deve conter no mínimo 11 caracteres',
            'cnpj.unique' => 'cnpj Já cadastrado no sistema',
            'bairro.required' => "O campo bairro é obrigatorio",
            'bairro.max' => 'o campo bairro deve conter no máximo 80 caracteres',
            'codigo.required' => 'codigo obrigatório',
            'codigo.max' => 'codigo deve conter no máximo 11 caracteres',
            'codigo.min' => 'codigo deve conter no mínimo 11 caracteres',
            'codigo.unique' => 'codigo Já cadastrado no sistema',
            'cidade.required' => "O campo cidade é obrigatorio",
            'cidade.max' => 'o campo cidade deve conter no máximo 80 caracteres',
            'cidade.min' => 'o campo cidade deve conter no minimo 5 caracteres',
            'website.required' => 'website obrigatório',
            'website.max' => 'website deve conter no máximo 11 caracteres',
            'website.min' => 'website deve conter no mínimo 11 caracteres',
            'website.unique' => 'website Já cadastrado no sistema',
        ];
    }
}
