<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       // if($this->tipo == 'Física'){
        return [
            'nome' = 'required',
            'telefone' = 'required',
            'cidade' = 'required',
            'estado' = 'required|email',
            'tipo' = 'required',
            'documento' = 'required|unique|cpf'
        ];
       /* }
        else{
            return [
            'nome' = 'required',
            'telefone' = 'required',
            'cidade' = 'required',
            'estado' = 'required|email',
            'tipo' = 'required',
            'documento' = 'required|unique|cnpj'
        ];
        } */
    }
}
