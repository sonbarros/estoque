@extends('layout/principal')

@section('conteudo')

<form action="adiciona" method="post">
    <input type="hidden" name="_token" value=" {{ csrf_token() }}">
    
    <div class="form-group">
        <label>Nome produto</label>
        <input class="form-control" name="nome">
    </div>

    <div class="form-group">
        <label>Valor</label>
        <input class="form-control" name="valor">
    </div>

    <div class="form-group">
        <label>Quantidade</label>
        <input class="form-control" name="quantidade">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <textarea class="form-control" name="descricao"></textarea>
    </div>

    <button type="submit" class="btn btn-secondary">Adicionar</button>

</form>
    
@stop