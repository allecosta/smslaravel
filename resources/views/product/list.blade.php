@extends("layout/main")

@section("content")
    @if (empty($products))
        <div class="alert alert-danger">
            Não há nenhum produto cadastrado!
        </div>    
    @else
        <h1>Listagem de Produtos</h1>  
        <table class="table table-striped table-hover">
            <tr style="text-align: center;">
                <th>Produto</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Quantidade</th>
            </tr>
            @foreach ($products as $product)
                <tr class="{{ $product->quantity <= 1 ? 'alert alert-danger' : '' }}">
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                </tr>
                <tr>
                    <td>
                        <a href="/products/display/{{$product->id}}">
                            Visualizar
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif 

    @if (old('name'))
        <div class="alert alert-success">
            O produto <strong>{{ old('name') }}</strong> foi adicionado com sucesso!
        </div>
    @endif
@stop