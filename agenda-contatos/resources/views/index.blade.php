@extends('layouts.app')

@section('content')
    <a href="{{ route('contatos.create') }}">Novo Contato</a>
    <table>
        <tr>
            <th>Nome</th><th>Email</th><th>Telefone</th><th>Nascimento</th><th>Ações</th>
        </tr>
        @foreach ($contatos as $contato)
            <tr>
                <td>{{ $contato->nome }}</td>
                <td>{{ $contato->email }}</td>
                <td>{{ $contato->telefone }}</td>
                <td>{{ $contato->nascimento }}</td>
                <td>
                    <a href="{{ route('contatos.edit', $contato) }}">Editar</a>
                    <form action="{{ route('contatos.destroy', $contato) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection