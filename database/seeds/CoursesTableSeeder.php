<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        App\Course::create([
            'name' => 'Primero',
            'director' => '1',
        ]);
        App\Course::create([
            'name' => 'Segundo',
            'director' => '1',
        ]);
        App\Course::create([
            'name' => 'Tercero',
            'director' => '1',
        ]);
        App\Course::create([
            'name' => 'Cuarto',
            'director' => '1',
        ]);
        App\Course::create([
            'name' => 'Quinto',
            'director' => '1',
        ]);
        App\Course::create([
            'name' => 'Sexto',
            'director' => '1',
        ]);
        App\Course::create([
            'name' => 'Séptimo',
            'director' => '1',
        ]);
        App\Course::create([
            'name' => 'Octavo',
            'director' => '1',
        ]);
        App\Course::create([
            'name' => 'Noveno',
            'director' => '1',
        ]);
        App\Course::create([
            'name' => 'Décimo',
            'director' => '1',
        ]);
        App\Course::create([
            'name' => 'Once',
            'director' => '1',
        ]);
    }
}
