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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sigla');
            $table->float('total_horas');
            $table->unsignedBigInteger('nivel_id') -> nullable();
            $table->foreign('nivel_id')->references('id')->on('nivels')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('eixo_id') -> nullable();
            $table->foreign('eixo_id')->references('id')->on('eixos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
