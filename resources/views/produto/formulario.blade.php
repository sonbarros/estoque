@extends('layout/principal')

@section('conteudo')

<h1>Novo Produto</h1>

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Esse formulario é utilizado tambem pelo metodo editar, a diferença
é que ao ser chamado pelo metodo editar é enviado o objeto $produto --> 

<form  @if(empty($produto))action="adiciona" @else action="salvar" @endif method="post">
    <input type="hidden" name="_token" value=" {{ csrf_token() }}">
    
    @if(!empty($produto)) <input type="hidden" name="id" value=" {{ $produto->id }}">@endif
    
    <div class="form-group">
        <label>Nome produto</label>
        <input class="form-control" name="nome" @if(!empty($produto))value="{{ $produto->nome }}" @elseif(old('nome'))value="{{ old('nome') }}" @endif>
    </div>

    <div class="form-group">
        <label>Valor</label>
        <input class="form-control" name="valor" @if(!empty($produto))value="{{ $produto->valor }}" @elseif(old('valor'))value="{{ old('valor') }}" @endif>
    </div>

    <div class="form-group">
        <label>Quantidade</label>
        <input class="form-control" name="quantidade" @if(!empty($produto))value="{{ $produto->quantidade }}" @elseif(old('quantidade'))value="{{ old('quantidade') }}" @endif>
    </div>

    <div class="form-group">
        <label>Tamanho</label>
        <input class="form-control" name="tamanho" @if(!empty($produto))value="{{ $produto->tamanho }}" @elseif(old('tamanho'))value="{{ old('tamanho') }}" @endif>
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <textarea class="form-control" name="descricao">@if(!empty($produto)) {{ $produto->descricao }} @elseif(old('descricao')) {{ old('descricao') }} @endif</textarea>
    </div>

    <button type="submit" class="btn btn-secondary">@if(!empty($produto)) Atualizar @else Adicionar @endif</button>

</form>
    
@stop