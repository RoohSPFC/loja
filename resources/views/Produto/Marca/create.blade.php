@extends('template.layout')

@section('content')

<div class="container">

<h1>Cadastrar Marcas</h1>

<hr>
    <div class="row">
        <div class="col-md-12 col-lg-12 form-group">
            <label for="nom_marc">Nome</label>
            <input class="form-control" type="text" name="nom_marc" id="nom_marc">
        <br>
            <button class="btn btn-success" href="/produto/marca/" type="submit">Salvar</button>
      
    </div>
</div>
