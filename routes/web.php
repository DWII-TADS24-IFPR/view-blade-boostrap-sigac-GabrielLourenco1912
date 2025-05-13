<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');

Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');

Route::get('/alunos/{aluno}/show', [AlunoController::class, 'show'])->name('alunos.show');

Route::get ('/alunos/{aluno}/edit', [AlunoController::class, 'edit'])->name('alunos.edit');

Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');

Route::put('/alunos/{aluno}', [AlunoController::class, 'update'])->name('alunos.update');

Route::delete('/alunos/{aluno}', [AlunoController::class, 'destroy'])->name('alunos.destroy');
