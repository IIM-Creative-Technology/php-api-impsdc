<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'note' => $this->faker->numberBetween($min=0, $max=20),
            'student_id' => function () {
                $promos =  DB::table('students')->get('id');
                
                foreach($promos as $obj => $value){
                    $listId[] = $obj;
                }
                return array_rand($listId);
            },
            'cours_id' => function () {
                $promos =  DB::table('cours')->get('id');
                
                foreach($promos as $obj => $value){
                    $listId[] = $obj;
                }
                return array_rand($listId);
            }
        ];
    }
}
