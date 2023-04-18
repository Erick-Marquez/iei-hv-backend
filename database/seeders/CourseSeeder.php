<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([ 'name' => 'Lenguaje' ]);
        Course::create([ 'name' => 'Ciencia y Ambiente' ]);
        Course::create([ 'name' => 'Aritmética' ]);
        Course::create([ 'name' => 'Algebra' ]);
        Course::create([ 'name' => 'Religión' ]);
    }
}
