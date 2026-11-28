<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pago;
use App\Models\OrdenTrabajo;

class PagoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'orden_trabajo_id' => OrdenTrabajo::factory(),
            'fecha_pago' => fake()->date(),
            'monto' => fake()->randomFloat(2, 500, 50000),
            'metodo_pago' => fake()->randomElement([
                'Efectivo',
                'Transferencia',
                'Tarjeta',
                'Cheque',
            ]),
            'referencia' => fake()->optional()->bothify('REF-########'),
            'observacion' => fake()->optional()->sentence(),
        ];
    }
}
