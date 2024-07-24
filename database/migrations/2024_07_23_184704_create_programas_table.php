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
        Schema::create('programas', function (Blueprint $table) {
            $table->id('id_programa');
            $table->string('cod_programa');
            $table->string('nombre_programa');
            $table->date('gestion_ini');
            $table->date('gestion_fin');
            $table->string('version_programa');
            $table->string('estado_programa');
            $table->integer('horas');
            $table->string('creditos');
            $table->string('resolucion_ministerial');
            $table->string('tipo_programa');
            $table->string('ruta_imagen');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};
