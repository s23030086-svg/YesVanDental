<?php

namespace Database\Factories;

use App\Models\Tratamiento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tratamiento>
 */
class TratamientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nombre_tratamiento' => $this->faker->randomElement(['Limpieza dental', 'Extracción', 'Blanqueamiento', 'Ortodoncia']),
        'descripcion' => $this->faker->sentence(),
        'costo' => $this->faker->randomFloat(2, 200, 2000),
        ];
    }
}
