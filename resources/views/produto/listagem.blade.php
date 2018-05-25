@extends('layout/principal')

@section('conteudo')
    @if(empty($produtos))
    <div class='alert alert-danger' role='alert'>Você não tem nenhum produto cadastrado.</div>

    @else
        <h1>Listagem de produtos</h1>
        <table class='table table-hover'>
            @foreach($produtos as $value)
            <tr class='{{ $value->quantidade<=1 ? 'alert alert-danger' : '' }}'>
                <td>{{ $value->nome }}</td>
                <td>{{ $value->descricao }}</td>
                <td>{{ $value->quantidade }}</td>
                <td><a href='/produtos/detalhes/{{ $value->id }} ,nomeExemplo'>Visualizar</a></td>
            </tr>
            @endforeach
        </table>
    @endif

    <h4>
        <span class="badge badge-danger">
            Um ou menos itens no estoque
        </span>
    </h4>
@stop