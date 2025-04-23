<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('email') -> Unique();
            $table->string('senha');
            $table->unsignedBigInteger('user_id')-> nullable();
            $table->foreign('user_id')->references('id')->on('users')->OnDelete('cascade')->OnUpdate('cascade');
            $table->unsignedBigInteger('curso_id')-> nullable();
            $table->foreign('curso_id')->references('id')->on('cursos')->OnDelete('cascade')->OnUpdate('cascade');
            $table->unsignedBigInteger('turma_id')-> nullable();
            $table->foreign('turma_id')->references('id')->on('turmas')->OnDelete('cascade')->OnUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
