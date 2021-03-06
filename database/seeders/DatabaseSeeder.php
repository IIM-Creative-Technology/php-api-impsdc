<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Promo;
use App\Models\Student;
use App\Models\Intervenant;
use App\Models\Note;
use App\Models\Cours;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::factory(10)->create();

        DB::table('promos')->truncate();
        Promo::factory(5)->create();

        DB::table('students')->truncate();
        Student::factory(50)->create();

        DB::table('intervenants')->truncate();
        Intervenant::factory(10)->create();

        DB::table('cours')->truncate();
        Cours::factory(20)->create();

        DB::table('notes')->truncate();
        Note::factory(100)->create();
        
    }
}
