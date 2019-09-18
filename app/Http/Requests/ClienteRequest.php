<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'cliente.nome' => ['required'],
            'documentos.rg.numero' => ['required'],
            'documentos.cpf.numero' => ['required']
        ];
    }

    public function messages() {
        return [
            'required' => 'Este campo é obrigatório!'
        ];
    }
}
