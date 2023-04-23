<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grades')->insert([
            ['symbol' => '3', 'educational_level' => 'Inical', 'description' => '3 años'],
            ['symbol' => '4', 'educational_level' => 'Inical', 'description' => '4 años'],
            ['symbol' => '5', 'educational_level' => 'Inical', 'description' => '5 años'],

            ['symbol' => '1°', 'educational_level' => 'Primaria', 'description' => 'Primer grado'],
            ['symbol' => '2°', 'educational_level' => 'Primaria', 'description' => 'Segundo grado'],
            ['symbol' => '3°', 'educational_level' => 'Primaria', 'description' => 'Tercer grado'],
            ['symbol' => '4°', 'educational_level' => 'Primaria', 'description' => 'Cuarto grado'],
            ['symbol' => '5°', 'educational_level' => 'Primaria', 'description' => 'Quinto grado'],
            ['symbol' => '6°', 'educational_level' => 'Primaria', 'description' => 'Sexto grado'],

            ['symbol' => '1°', 'educational_level' => 'Secundaria', 'description' => 'Primer grado'],
            ['symbol' => '2°', 'educational_level' => 'Secundaria', 'description' => 'Segundo grado'],
            ['symbol' => '3°', 'educational_level' => 'Secundaria', 'description' => 'Tercer grado'],
            ['symbol' => '4°', 'educational_level' => 'Secundaria', 'description' => 'Cuarto grado'],
            ['symbol' => '5°', 'educational_level' => 'Secundaria', 'description' => 'Quinto grado'],
        ]);
    }
}
