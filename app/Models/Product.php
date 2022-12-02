<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // caso a propriedade não seja especificada, o laravel irá considerá o nome da classe como sendo o nome da tabela
    protected $table = "products";
}
