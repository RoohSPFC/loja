@extends('template.layout')

@section('content')

<h1>Cadastro de Produtos</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 form-group">
            <label for="product">Nome do Produto</label>
            <input class="form-control" type="text" name="product" id="product">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-lg-6 form-group">
            <label for="marca">Marca</label>
            <input class="form-control" type="text" name="marca" id="marca">
        </div>

        <div class="col-md-6 col-lg-6 form-group">
            <label for="preco">Preço</label>
            <input class="form-control" type="number" name="preco" id="preco">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 form-group">
            <label for="description">Descrição</label>
            <input class="form-control" type="text" name="description" id="description">
        </div>
    </div>

    <button class="btn btn-success" href="/produto/create/0" type="submit">Salvar</button>


</div>

@endsection