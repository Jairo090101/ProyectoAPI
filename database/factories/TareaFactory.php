<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Generamos datos fake para realización de pruebas
        return [
            'titulo' => $this->faker->sentence,
            'descripcion' => $this->faker->paragraph,
            'estado' => $this->faker->randomElement(['pendiente', 'en_progreso', 'completada']),
            'fecha_limite' => $this->faker->date(),
        ];
    }
}
