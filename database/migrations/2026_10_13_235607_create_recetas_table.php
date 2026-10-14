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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id('id_receta');
            $table->unsignedBigInteger('id_cita');
            $table->text('medicamentos');
            $table->text('indicaciones');
            $table->timestamps();

            $table->foreign('id_cita')->references('id_cita')->on('citas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
