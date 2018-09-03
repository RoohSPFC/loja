@extends('template.layout')

@section('content')
<h1>Listagem de Marcas</h1>
<a class="btn btn-success" href="/produto/marca/create/0">Adicionar marca</a>
<hr>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Açoes</th>
        </tr>
    </thead>
                
    <tbody>
        <tr>
            <td>1</td>
            <td>LG</td>
            <td>
                <button type="button" class="btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>

                <button type="button" class="btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>

                <button type="button" class="btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </button>
            </td>
        </tr>
    
    </tbody>             
</table>

@endsection