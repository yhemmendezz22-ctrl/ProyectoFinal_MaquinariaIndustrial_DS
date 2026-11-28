<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
use App\Models\Maquinaria;
use App\Models\Paquete;
use App\Models\OrdenTrabajo;


class OrdenTrabajoFactory extends Factory
{
    public function definition(): array
    {
        $fecha = fake()->dateTimeBetween('-1 year', 'now');

        return [
            'cliente_id' => Cliente::factory(),
            'maquinaria_id' => Maquinaria::factory(),
            'paquete_id' => Paquete::factory(),
            'numero_orden' => fake()->unique()->bothify('OT-####'),
            'fecha_solicitud' => $fecha->format('Y-m-d'),
            'fecha_programada' => fake()->dateTimeBetween($fecha, '+2 months')->format('Y-m-d'),
            'fecha_finalizacion' => null,
            'tipo_mantenimiento' => fake()->randomElement([
                'Preventivo',
                'Correctivo',
                'Predictivo',
            ]),
            'descripcion_problema' => fake()->paragraph(),
            'diagnostico' => fake()->optional()->paragraph(),
            'presupuesto_total' => fake()->randomFloat(2, 1000, 50000),
            'estado' => fake()->randomElement([
                'Pendiente',
                'Programada',
                'En proceso',
                'Finalizada',
                'Cancelada',
            ]),
        ];
    }
}
