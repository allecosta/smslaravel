@extends('layout.main')

@section('content')
    <h1>Novo Produto</h1>
    <form action="/products/add">
        <div class=""row mb-3">
            <label class="col-sm-2 col-form-label">
                Nome
                <input type="text" name="name">
            </label>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">
                Valor
                <input type="text" name="price">
            </label>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">
                Quantidade
                <input type="number" name="quantity">
            </label>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">
                Descrição
                <textarea name="description" cols="30" rows="5"></textarea>
            </label>
        </div>
        
        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
@stop