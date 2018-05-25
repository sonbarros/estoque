@extends('layout/principal')

@section('conteudo')
    <h1>Detalhes do produtos: <?= $p->nome ?></h1>
    <ul>
        <li>Descrição: {{ $p->descricao }} </li>
        <li>Quantidade em estoque: {{ $p->quantidade }} </li>
    </ul>
@stop
