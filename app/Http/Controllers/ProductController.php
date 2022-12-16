<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    /**
     * método responsavel por listar os produtos disponivel do estoque
     *
     * @return void
     */
    public function list() 
    {   
        $products = Product::all();

        return view('product/list')->with('products', $products);
    }


    /**
     * método responsavel por mostrar um produto especifico 
     *
     * @param [type] $id
     * @return void
     */
    public function display($id) 
    {   
        $product = Product::find($id);

        if (empty($product)) {
            return "Esse produto não existe";
        }

        return view('product/details')->with('product', $product);
    }


    /**
     * método responsavel por retornar a visualização do formulario de adição de novo produto 
     *
     * @return void
     */
    public function new() 
    {
        return view('product/form');
    }

    
    /**
     * método responsavel por recuperar os dados do formulario de adicionar um novo produto na base de dados
     *
     * @param Request $request
     * @return void
     */
    public function add(Request $request) 
    {
        $params = $request->all();
        $product = new Product($params);
        $product->save();

        return redirect()
            ->action('App\Http\Controllers\ProductController@list')
            ->withInput($request->only('name'));

    }

    /**
     * método responsavel por gerar informações no formato JSON
     *
     * @return void
     */
    public function listJson() 
    {
        $products = Product::all();

        return response()->json($products);
    }
}
