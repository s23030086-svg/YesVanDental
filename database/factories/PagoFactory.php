<?php

namespace Database\Factories;

use App\Models\Pago;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pago>
 */
class PagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'id_cita' => \App\Models\Cita::factory(),
        'monto' => $this->faker->randomFloat(2, 100, 2000),
        'fecha_pago' => $this->faker->date(),
        'metodo_pago' => $this->faker->randomElement(['Efectivo', 'Tarjeta', 'Transferencia']),
        ];
    }
}
