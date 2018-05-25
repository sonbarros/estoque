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
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/produtos', 'ProdutoController@listar');

Route::get('/produtos/detalhes/{id},{nome}', 'ProdutoController@mostrarDetalhesProduto');

Route::get('/', function(){
    return 'O Senhor é o meu pastor';
});

Route::get('/', function(){
    return 'O Senhor é o meu pastor e nada me faltará';
});

