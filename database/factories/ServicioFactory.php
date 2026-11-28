<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Servicio;

class ServicioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => fake()->randomElement([
                'Mantenimiento preventivo',
                'Mantenimiento correctivo',
                'Reparación de motor',
                'Cambio de aceite',
                'Revisión de frenos',
                'Diagnóstico técnico',
            ]),

            'categoria' => fake()->randomElement([
                'Mecánica',
                'Electricidad',
                'Hidráulica',
                'Mantenimiento',
            ]),

            'descripcion' => fake()->sentence(12),
            'precio_base' => fake()->randomFloat(2, 500, 15000),
            'duracion_estimada' => fake()->numberBetween(1, 48),
            'estado' => fake()->randomElement(['Activo', 'Inactivo']),
        ];
    }
}
