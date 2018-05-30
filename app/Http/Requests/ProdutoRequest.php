<?php

namespace app\Http\Requests;

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
            'nome' => 'required|max:20|min:3',
            'quantidade' => 'required|numeric|max:10',
            'descricao' => 'required|max:40',
            'valor' => 'required|numeric',
            'tamanho' => 'required|max:100'
        ];
    }

    public function messages()
    {
        
        return[
            'nome.required' => 'O campo :attribute está vazio',
            'nome.min' => 'O campo :attribute deve conter mais de 3 caracteres',
            'nome.max' => 'O campo :attribute excedeu o tamanho de 20 caracteres',

            'quantidade.required' => 'O campo :attribute está vazio',
            'quantidade.numeric' => 'O campo :attribute deve ser numerico',
            'quantidade.max' => 'O campo :attribute excedeu o tamanho de 10 caracteres',

            'descricao.required' => 'O campo :attribute está vazio',
            'descricao.max' => 'O campo :attribute não pode ultrapassar 40 caracteres',

            'valor.required' => 'O campo :attribute está vazio',
            'valor.numeric' => 'O campo :attribute deve ser numerico',

            'tamanho.required' => 'O campo :attribute está vazio',
            'tamanho.max' => 'O campo :attribute não pode ultrapassar 100 caracteres',
        ];
        

    }
}
