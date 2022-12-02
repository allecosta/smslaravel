<?php

namespace App\Http\Controllers;

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
        $products = DB::select("SELECT * FROM products");

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
        $result = DB::select("SELECT * FROM products WHERE id = ?", [$id]);

        if (empty($result)) {
            return "Esse produto não existe";
        }

        return view('product/details')->with('product', $result[0]);
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
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');
        $quantity = $request->input('quantity');

        DB::insert("
            INSERT INTO 
                products (name, price, description, quantity)
            VALUES (?,?,?,?)", [$name, $price, $description, $quantity]
        );

        return view('product/add')->with('name', $name);
    }
}
