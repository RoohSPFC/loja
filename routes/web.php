<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

* informaçoes do Erik
*
* get('rota', 'function'() {})
* post('rota', 'function'() {})
* delete('rota', 'function'() {})
* put('rota', 'function'() {})
* path('rota', 'function'() {})
* options('rota', 'function'() {})
* match(['get', 'post'], 'rota', 'function'() {})
*/
Route::prefix('produto')->group(function () {
    Route::get('/', function () {

        $produtos = [
            
            0 => ['id' => 1,
            'nome' => 'Notebook',
            'marca' => 'Dell',
            'preco' => 2000.00,
            'descricao' => 'Equipamento Usado'
            ],

            1 => [
            'id' => 2,
            'nome' => 'Televisao',
            'marca' => 'Panasonic',
            'preco' => 3500.00,
            'descricao' => 'Produtos mais vendidos'
            ],

           2 => [
            'id' => 3,
            'nome' => 'Tablet',
            'marca' => 'Samsung',
            'preco' => 989.00,
            'descricao' => 'Produtos mais vendidos'
            ],

           3 => [
            'id' => 4,
            'nome' => 'Teclado de computador',
            'marca' => 'HP',
            'preco' => 500.00,
            'descricao' => 'Acessorios de escritorio'
           ]
        ];

        $produtos = json_decode(json_encode($produtos), FALSE);

        return view ('Produto.index', compact('produtos'));
    });

    Route::get('/create/{id}', function () {
        return view('Produto.create');
    });


});


    Route::get('/', function () {
        return view('welcome');
    });