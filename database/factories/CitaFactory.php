<?php

namespace Database\Factories;

use App\Models\Cita;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cita>
 */
class CitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'id_paciente' => \App\Models\Paciente::factory(),
        'id_odontologo' => \App\Models\Odontologo::factory(),
        'id_tratamiento' => \App\Models\Tratamiento::factory(),
        'hora' => $this->faker->time(),
        'motivo' => $this->faker->sentence(4),
        'estado' => $this->faker->randomElement(['Pendiente', 'Atendida', 'Cancelada']),  
        ];
    }
}
