<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

class ClienteFactory extends Factory
{
    public function definition(): array
    {
        $tipo = fake()->randomElement(['Persona', 'Empresa']);

        return [
            'nombre' => fake()->name(),
            'tipo_cliente' => $tipo,
            'identidad' => fake()->unique()->numerify('###########'),
            'telefono' => fake()->numerify('########'),
            'correo_electronico' => fake()->unique()->safeEmail(),
            'direccion' => fake()->address(),
            'nombre_empresa' => $tipo == 'Empresa' ? fake()->company() : null,
            'estado' => fake()->randomElement(['Activo', 'Inactivo']),
        ];
    }
}
