<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maquinaria;

class MaquinariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Maquinaria::factory(5)->create();
    }
}
