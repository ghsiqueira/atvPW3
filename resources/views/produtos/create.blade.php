@extends('layouts.app')

@section('content')
    <h1 class="title">Novo Produto</h1>

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <div class="input-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="input-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection