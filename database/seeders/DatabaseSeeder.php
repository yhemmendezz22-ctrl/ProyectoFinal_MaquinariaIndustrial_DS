<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Maquinaria;
use App\Models\Paquete;
use App\Models\Servicio;
use App\Models\OrdenTrabajo;
use App\Models\Pago;
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
          $this->call([
            ClienteSeeder::class,
            ServicioSeeder::class,
            PaqueteSeeder::class,
            MaquinariaSeeder::class,
            OrdenTrabajoSeeder::class,
            PagoSeeder::class,
        ]);
    }
}
