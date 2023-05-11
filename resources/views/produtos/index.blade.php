@extends('layouts.app')

@section('content')
    <h1 class="title">Lista de Produtos</h1>

    <a href="{{ route('produtos.create') }}" class="btn btn-primary">Novo Produto</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto['id'] }}</td>
                <td>{{ $produto['nome'] }}</td>
                <td>{{ $produto['descricao'] }}</td>
                <td>
                    <a href="{{ route('produtos.show', $produto['id']) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('produtos.edit', $produto['id']) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('produtos.destroy', $produto['id']) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir o produto?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection