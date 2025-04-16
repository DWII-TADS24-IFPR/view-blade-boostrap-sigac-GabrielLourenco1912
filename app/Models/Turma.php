<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    Use SoftDeletes;

    private $table = 'turma';

    protected $fillable = [
        'curso_id',
        'ano'
    ];

    public function curso() {
        return $this->belongsTo(Curso::class);
    }

    public function alunos() {
        return $this->hasMany(Aluno::class);
    }
}


