<?php

namespace Database\Seeders;

use App\Models\Tarea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Ejecutamos el factory en un total de 10 veces
         Tarea::factory()->count(10)->create();
    }
}
