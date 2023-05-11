@extends('layouts.app')

@section('content')
    <h1 class="title">Detalhes do Produto</h1>

    <p><strong>ID:</strong> {{ $produto['id'] }}</p>
    <p><strong>Nome:</strong> {{ $produto['nome'] }}</p>
    <p><strong>Descrição:</strong> {{ $produto['descricao'] }}</p>

    <a href="{{ route('produtos.edit', $produto['id']) }}" class="btn btn-primary">Editar</a>
    <form action="{{ route('produtos.destroy', $produto['id']) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir o produto?')">Excluir</button>
    </form>
</div>
@endsection