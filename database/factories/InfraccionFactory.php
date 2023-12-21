<?php

namespace Database\Factories;

use App\Models\Auto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Infraccion>
 */
class InfraccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "auto_id"=>Auto::inRandomOrder()->first()->id,
            "fecha"=>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            "descripcion"=>$this->faker->text,
            "tipo"=>$this->faker->randomElement(['alta velocidad', 'doble fila','alcoholemia','falta de documentacion'])
        ];
    }
}
