<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Promo;
use Illuminate\Support\Facades\DB;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

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
            'age' => $this->faker->numberBetween($min = 18, $max = 100),
            'year_in' => $this->faker->numberBetween($min="2021", $max="2026"),
            'promo_id' => function () {
                $promos =  DB::table('promos')->get('id');
                
                foreach($promos as $obj => $value){
                    $listId[] = $obj;
                }
                return array_rand($listId);
            }
        ];
    }
}
