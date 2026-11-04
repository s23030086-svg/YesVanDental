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
        Schema::create('odontologos', function (Blueprint $table) {
            $table->id('id_odontologo');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('cedula_profesional', 20);
            $table->string('especialidad', 50);
            $table->string('telefono', 20);
            $table->string('correo', 80);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odontologos');
    }
};
