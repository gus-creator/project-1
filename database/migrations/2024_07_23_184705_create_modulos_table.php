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
        Schema::create('modulos', function (Blueprint $table) {
            $table->id('id_modulo');
            $table->string('cod_modulo');
            $table->string('denominativo');
            $table->string('nombre_modulo');
            $table->integer('horas_academicas');
            $table->string('semestre');
            $table->unsignedBigInteger('id_programa');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_programa')->references('id_programa')->on('programas')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};
