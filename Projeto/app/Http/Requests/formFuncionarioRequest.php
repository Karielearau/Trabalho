<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formFuncionarioRequest extends FormRequest
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
     function rules()
    {
        return [     
               
            'nome' => 'required',
            'cpf' => 'required|max:11|min:11',
            'datadeNacimento' => 'required|max:10|min:8',
            'telefone'=>'required|max:10|min:8',
            'salario'=>'required|max:6|min:3'
        ];       

        
    }

    function messages() {
        return [
            
        'nome.required' => 'O campo nome é obrigatório',
        'cpf.required' => 'O campo cpf é obrigatório',
        'cpf.max' => 'O campo cpf deve ter no maximo 11 digitos',
        'cpf.min' => 'O campo cpf deve ter no minimo 11 digitos',
        'datadeNacimento.min' => 'O campo data de nacimento deve ter no minimo 10 digitos',
        'datadeNacimento.max' => 'O campo data de nacimento deve ter no maximo 10 digitos',
        'datadeNacimento.required' => 'O campo data de nacimento é obrigatorio',
        'telefone.max' => 'O campo telefone deve ter no maximo 10 digitos',
        'telefone.min' => 'O campo telefone deve ter no minimo 8 digitos',
        'telefone.required' => 'O campo telefone é obrigatorio',
        'salario.required' => 'O campo salário é obrigatório',
        'salario.max' => 'O campo salário deve ter no maximo 6 digitos',
        'salario.min' => 'O campo salário deve ter nominimo 3 digitos'           

        
        ];
        }



}
