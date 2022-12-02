<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Método responsavel por inserir dados na tabela produtos
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO products (name, price, quantity, description) 
            VALUES (?,?,?,?)", ['Iphone', 3900, 15, 'Novo produto da gigante Apple.']);
        
        DB::insert("INSERT INTO products (name, price, quantity, description) 
            VALUES (?,?,?,?)", ['Ryzen 7000', 1300, 10, 'AMD Ryzen Série 7000.']);

        DB::insert("INSERT INTO products (name, price, quantity, description) 
        VALUES (?,?,?,?)", ['Notebbok HP', 2600, 8, 'Novo produto da gigante HP.']);
    }
}
