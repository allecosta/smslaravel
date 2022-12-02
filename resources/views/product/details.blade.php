@extends("layout/main")

@section("content")
    <h1>Detalhes do Produto: {{ $product->name }} </h1>
    <ul>
        <li>
            <strong>Valor: </strong>R$ {{ $product->price }}
        </li>
        <li>
            <strong>Descrição: </strong> {{ $product->description }} 
        </li>
        <li>
            <strong>Quantidade em estoque: </strong> {{ $product->quantity }} 
        </li>
    </ul>
@stop