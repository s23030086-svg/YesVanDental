<?php

namespace Database\Factories;

use App\Models\Expediente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Expediente>
 */
class ExpedienteFactory extends Factory
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
        'antecedentes_medicos' => $this->faker->sentence(8),
        'alergias' => $this->faker->word(),
        ];
    }
}
