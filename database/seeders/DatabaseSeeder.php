<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Para inserções no banco
use Illuminate\Support\Str; // Para strings aleatórias
use App\Models\Aluno;
use App\Models\Turma;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('turmas')->insert([
            ['nome' => 'Turma A', 'capacidade' => 25, 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Turma B', 'capacidade' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Turma C', 'capacidade' => 20, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('alunos')->insert(
            $this->generateAlunos(50)
        );

    }

    private function generateAlunos($quantidade)
    {
        $alunos = [];
        for ($i = 0; $i < $quantidade; $i++) {
            $alunos[] = [
                'nome' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'data_nascimento' => fake()->date(),
                'turma_id' => rand(1, 3), // Associa a uma turma aleatória
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        return $alunos;
    }
}
