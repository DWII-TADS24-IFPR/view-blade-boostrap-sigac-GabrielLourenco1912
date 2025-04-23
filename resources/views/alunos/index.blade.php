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
            <table class="tabelaAlunos">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
