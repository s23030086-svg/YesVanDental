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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago');
            $table->unsignedBigInteger('id_cita');
            $table->decimal('monto', 10, 2);
            $table->date('fecha_pago');
            $table->enum('metodo_pago', ['Efectivo', 'Tarjeta', 'Transferencia']);
            $table->timestamps();

            $table->foreign('id_cita')->references('id_cita')->on('citas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagoss');
    }
};
