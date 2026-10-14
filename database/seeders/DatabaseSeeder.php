<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Paciente::factory(10)->create();
        \App\Models\Odontologo::factory(5)->create();
        \App\Models\Tratamiento::factory(8)->create();
        \App\Models\Cita::factory(15)->create();
        \App\Models\Pago::factory(15)->create();
        \App\Models\Receta::factory(10)->create();
        \App\Models\Expediente::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
