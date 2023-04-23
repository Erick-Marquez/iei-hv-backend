<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sections')->insert([
            ['section' => 'A', 'grade_id' => 10, 'shift' => 'Mañana'],
            ['section' => 'B', 'grade_id' => 10, 'shift' => 'Mañana'],
            ['section' => 'C', 'grade_id' => 10, 'shift' => 'Mañana'],
            ['section' => 'D', 'grade_id' => 10, 'shift' => 'Tarde'],
            ['section' => 'E', 'grade_id' => 10, 'shift' => 'Tarde'],
            ['section' => 'F', 'grade_id' => 10, 'shift' => 'Tarde'],

            ['section' => 'A', 'grade_id' => 11, 'shift' => 'Mañana'],
            ['section' => 'B', 'grade_id' => 11, 'shift' => 'Mañana'],
            ['section' => 'C', 'grade_id' => 11, 'shift' => 'Mañana'],
            ['section' => 'D', 'grade_id' => 11, 'shift' => 'Tarde'],
            ['section' => 'E', 'grade_id' => 11, 'shift' => 'Tarde'],
            ['section' => 'F', 'grade_id' => 11, 'shift' => 'Tarde'],
        ]);
    }
}
