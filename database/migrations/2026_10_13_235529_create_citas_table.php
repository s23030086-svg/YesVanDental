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
        Schema::create('citas', function (Blueprint $table) {
            $table->id('id_cita');
            $table->unsignedBigInteger('id_paciente');
            $table->unsignedBigInteger('id_odontologo');
            $table->unsignedBigInteger('id_tratamiento');
            $table->time('hora');
            $table->string('motivo', 100);
            $table->enum('estado', ['Pendiente', 'Atendida', 'Cancelada'])->default('Pendiente');
            $table->timestamps();

            $table->foreign('id_paciente')->references('id_paciente')->on('pacientes');
            $table->foreign('id_odontologo')->references('id_odontologo')->on('odontologos');
            $table->foreign('id_tratamiento')->references('id_tratamiento')->on('tratamientos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
