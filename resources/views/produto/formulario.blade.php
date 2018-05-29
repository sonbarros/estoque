@extends('layout/principal')

@section('conteudo')

<!-- Esse formulario é utilizado tambem pelo metodo editar, a diferença
é que ao ser chamado pelo metodo editar é enviado o objeto $produto --> 

<form  @if(empty($produto))action="adiciona" @else action="salvar" @endif method="post">
    <input type="hidden" name="_token" value=" {{ csrf_token() }}">
    
    @if(!empty($produto)) <input type="hidden" name="id" value=" {{ $produto->id }}">@endif
    
    <div class="form-group">
        <label>Nome produto</label>
        <input class="form-control" name="nome" @if(!empty($produto))value="{{ $produto->nome }}"@endif>
    </div>

    <div class="form-group">
        <label>Valor</label>
        <input class="form-control" name="valor">
    </div>

    <div class="form-group">
        <label>Quantidade</label>
        <input class="form-control" name="quantidade" @if(!empty($produto))value="{{ $produto->quantidade }}"@endif>
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <textarea class="form-control" name="descricao">@if(!empty($produto)) {{ $produto->descricao }} @endif</textarea>
    </div>

    <button type="submit" class="btn btn-secondary">@if(!empty($produto)) Atualizar @else Adicionar @endif</button>

</form>
    
@stop