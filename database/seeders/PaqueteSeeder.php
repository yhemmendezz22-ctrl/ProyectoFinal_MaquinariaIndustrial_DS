<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paquete;

class PaqueteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Paquete::factory(5)->create();
    }
}
