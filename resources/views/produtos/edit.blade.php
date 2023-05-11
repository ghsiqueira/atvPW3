@extends('layouts.app')

@section('content')
    <h1 class="title">Editar Produto</h1>

    <form action="{{ route('produtos.update', $produto['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $produto['nome'] }}">
        </div>
        <div class="input-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao">{{ $produto['descricao'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection