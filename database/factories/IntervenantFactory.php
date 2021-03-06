<?php

namespace Database\Factories;

use App\Models\Intervenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class IntervenantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Intervenant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'year_in' => $this->faker->numberBetween($min="2021", $max="2026"),
        ];
    }
}
