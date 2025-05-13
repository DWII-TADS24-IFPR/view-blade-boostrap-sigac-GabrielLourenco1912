@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Aluno</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $aluno->nome) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $aluno->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" name="idade" id="idade" class="form-control" value="{{ old('idade', $aluno->idade) }}" required>
            </div>

            <div class="mb-3">
                <label for="curso_id" class="form-label">Curso</label>
                <select name="curso_id" id="curso_id" class="form-select" required>
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->id }}" {{ $aluno->curso_id == $curso->id ? 'selected' : '' }}>{{ $curso->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="turma_id" class="form-label">Turma</label>
                <select name="turma_id" id="turma_id" class="form-select" required>
                    @foreach($turmas as $turma)
                        <option value="{{ $turma->id }}" {{ $aluno->turma_id == $turma->id ? 'selected' : '' }}>{{ $turma->nome }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
