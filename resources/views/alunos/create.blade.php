@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar Aluno</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Erro!</strong> Verifique os campos abaixo:<br><br>
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('alunos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" name="idade" id="idade" class="form-control" value="{{ old('idade') }}" required>
            </div>

            <div class="mb-3">
                <label for="curso" class="form-label">Curso</label>
                <input type="text" name="curso" id="curso" class="form-control" value="{{ old('curso') }}" required>
            </div>

            <div class="mb-3">
                <label for="turma" class="form-label">Turma</label>
                <input type="text" name="turma" id="turma" class="form-control" value="{{ old('turma') }}" required>
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="senha_confirmation" class="form-label">Confirme a Senha</label>
                <input type="password" name="senha_confirmation" id="senha_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
