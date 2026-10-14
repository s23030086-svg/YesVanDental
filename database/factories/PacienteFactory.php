<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Paciente>
 */
class PacienteFactory extends Factory
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
        'fecha_nacimiento' => $this->faker->date(),
        'sexo' => $this->faker->randomElement(['M', 'F']),
        'telefono' => $this->faker->phoneNumber(),
        'correo' => $this->faker->unique()->safeEmail(),
        'direccion' => $this->faker->address(),
        ];
    }
}
