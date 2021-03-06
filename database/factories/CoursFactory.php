<?php

namespace Database\Factories;

use App\Models\Cours;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CoursFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cours::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start = $this->faker->dateTimeBetween('now', '+1 years')->format('Y-m-d');
        return [
            'name' => $this->faker->jobTitle,
            'start' => $start,
            'end' => date('Y-m-d', strtotime($start. '+5 days')),
            'intervenant_id' => function () {
                $promos =  DB::table('intervenants')->get('id');
                
                foreach($promos as $obj => $value){
                    $listId[] = $obj;
                }
                return array_rand($listId);
            },
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
