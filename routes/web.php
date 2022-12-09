<?php

use Illuminate\Support\Facades\Route;


// rota para a URL products, do método list() referente a classe ProductController 
Route::get('products', 'App\Http\Controllers\ProductController@list');

// rota para a URL products/display, do método display() referente a classe ProductController 
Route::get(
    '/products/display/{id?}', 
    'App\Http\Controllers\ProductController@display'
)->where('id', '[0-9]+');

// rota para a URL products/new, do método new() referente a classe ProductController 
Route::get('/products/new', 'App\Http\Controllers\ProductController@new');

// rota para a URL products/add, do método add() referente a classe ProductController 
Route::post('products/add', 'App\Http\Controllers\ProductController@add');

