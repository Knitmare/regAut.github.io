<?php

namespace Database\Factories;

use App\Models\Titular;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auto>
 */
class AutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            "titular_id" =>Titular::inRandomOrder()->first()->id, /*$this->create(app\Titular::class)->id,*/
            "marca" => $this->faker->text(100),
            "patente" => $this->faker->numerify('######'),
            "tipo" => $this->faker->randomElement(['standar', 'suv', 'camioneta', 'camion']),
            "modelo"=>$this->faker->date("Y")
        ];
    }
}
