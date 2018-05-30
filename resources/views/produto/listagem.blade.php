@extends('layout/principal')

@section('conteudo')

    <!--
        apresenta uma mensagem de sucesso ao concluir um cadastro
    -->
    @if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!!</strong> O produto {{ old('nome') }} foi adicionado com sucesso!
    </div>

    @elseif(old('atualiza')) 

    <div class="alert alert-success">
        <strong>Sucesso!!</strong> O produto {{old('atualiza')}} foi atualizado com sucesso!
    </div>

    @endif

    <!--
        Lista os produtos
    -->
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
                <td>{{ $value->tamanho }}</td>
                <td><a href='/produtos/detalhes/{{$value->id}},nomeExemplo'><span class="glyphicon glyphicon-search"></span></a></td>
                <td><a href='/produtos/remove/{{$value->id}}'><span class="glyphicon glyphicon-trash"></span></a></td>
                <td><a href='/produtos/editar/{{$value->id}}'><span class="glyphicon glyphicon-pencil"></span></a></td>
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