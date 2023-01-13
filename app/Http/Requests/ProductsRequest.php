<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
     * Método responsavel por validar os dados inseridos no formulario de cadastro de Novo Produto.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'quantity' =>'required',
            'description' => 'required|max:255'
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => 'Favor preencher o campo Nome',
            'price.required' => 'Favor preencher o campo Valor',
            'quantity.required' => 'Favor preencher o campo Quantidade',
            'description.required' => 'Favor preencher o campo Descrição',
        ];
    }
}
