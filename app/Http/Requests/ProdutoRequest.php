<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'nome' => 'required|max:100',
            'descricao' =>'required|max:255',
            'valor' => 'required|numeric'
        ];
    }

    public function messages() {
        
        /*return ['nome.required' => 'The :attribute field can not be empty.']; //quando quiser mudar uma msg específica*/
        
        return [
            'required' => 'O campo :attribute não pode ser vazio.', 
            'numeric' => 'O campo :attribute deve ser númerico.'
        ];
    }
}
