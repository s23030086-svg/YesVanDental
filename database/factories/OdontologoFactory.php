<?php

namespace Database\Factories;

use App\Models\Odontologo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Odontologo>
 */
class OdontologoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nombre' => $this->faker->firstName(),
        'apellido' => $this->faker->lastName(),
        'cedula_profesional' => $this->faker->numerify('AB12345'),
        'especialidad' => $this->faker->randomElement(['Ortodoncia', 'Endodoncia', 'Odontopediatría', 'Periodoncia']),
        'telefono' => $this->faker->phoneNumber(),
        'correo' => $this->faker->unique()->safeEmail(),  
        ];
    }
}
