<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Maquinaria;

class MaquinariaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cliente_id' => \App\Models\Cliente::factory(),
            'codigo' => fake()->unique()->bothify('MAQ-####'),
            'nombre' => fake()->randomElement([
                'Excavadora',
                'Tractor',
                'Retroexcavadora',
                'Montacargas',
                'Generador industrial',
                'Compresor',
            ]),
            'tipo' => fake()->randomElement([
                'Construcción',
                'Agrícola',
                'Industrial',
            ]),
            'marca' => fake()->randomElement([
                'Caterpillar',
                'Komatsu',
                'John Deere',
                'Volvo',
                'JCB',
            ]),
            'modelo' => fake()->bothify('MOD-####'),
            'numero_serie' => fake()->unique()->bothify('SER-########'),
            'ubicacion' => fake()->city(),
            'fecha_adquisicion' => fake()->optional()->date(),
            'estado' => fake()->randomElement([
                'Operativa',
                'En mantenimiento',
                'Fuera de servicio',
            ]),
        ];
    }
}
