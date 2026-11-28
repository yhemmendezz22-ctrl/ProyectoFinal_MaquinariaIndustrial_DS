<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Paquete;

class PaqueteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => fake()->randomElement([
                'Paquete Básico',
                'Paquete Premium',
                'Paquete Empresarial',
                'Paquete Completo',
                'Paquete Industrial',
            ]),
            'descripcion' => fake()->sentence(15),
            'precio' => fake()->randomFloat(2, 1000, 30000),
            'duracion' => fake()->numberBetween(1, 72),
            'estado' => fake()->randomElement(['Activo', 'Inactivo']),
        ];
    }
}
