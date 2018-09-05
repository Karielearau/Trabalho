<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formCaminhaoRequest extends FormRequest
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
        return [
            
            'placa' => 'required|max:7|min:7|',
            'modelo' => 'required|max:20',
            'cor' => 'required|max:20',
            'ano'=>'required|max:4|min:4',
            'renavan'=>'required|max:11|min:11'
        ];        
    }


    function messages() {
        return [
            
        'placa.required' => 'O campo palca é obrigatório',
        'placa.max' => 'O campo placa deve ter no maximo 7 digitos',
        'placa.min' => 'O campo placa deve ter no minimo 7 digitos',
        'modelo.required' => 'O campo modelo é obrigatório',
        'modelo.max' => 'O campo modelo deve ter no maximo 20 digitos',
        'cor.required' => 'O campo cor é obrigatório',
        'cor.max' => 'O campo cor deve ter no maximo 20 digitos',
        'ano.required' => 'O campo ano é obrigatório',
        'ano.max' => 'O campo ano deve ter no maximo 4 digitos',
        'ano.min' => 'O campo ano deve ter no minimo 4 digitos',
        'renavan.required' => 'O campo renavan é obrigatório',
        'renava.max' => 'O campo renavan deve ter no maximo 11 digitos',
        'renavan.min' => 'O campo renavan deve ter no minimo 11 digitos',            

        
        ];
        }
    
}
