@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Alunos</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('alunos.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Aluno</a>

        @if ($alunos->isEmpty())
            <p>Nenhum aluno cadastrado.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Curso</th>
                    <th>Visualizar</th>
                    <th>Editar</th>
                    <th>Remover</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>{{ $aluno->idade }}</td>
                        <td>{{ $aluno->curso->nome }}</td>
                        <td><a href="{{ route('alunos.show', $aluno) }}" class="btn btn-info">Ver</a></td>
                        <td><a href="{{ route('alunos.edit', $aluno) }}" class="btn btn-warning">Editar</a></td>
                        <td>
                            <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover este aluno?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remover</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
