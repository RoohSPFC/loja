@extends('template.layout')

@section('content')
<h1>Listagem de Produto</h1>
<a class="btn btn-success" href="/produto/create/0">Adicionar produto</a>
<hr>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome do produto</th>
        <th>Marca</th>
        <th>Descrição</th>
        <th>Preço</th>
                </tr>
            </thead>
                
                <tbody>
                @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->marca }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->preco }} </td>
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
                @endforeach

            
            </tbody>
                
                
            </table>

@endsection


    
