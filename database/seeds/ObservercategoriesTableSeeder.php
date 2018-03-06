<?php

use Illuminate\Database\Seeder;

class ObservercategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Observercategory::create([
            'name' => 'Asistencia',
            'prefix' => 'A',
        ]);
        App\Observercategory::create([
            'name' => 'Puntualidad',
            'prefix' => 'P',
        ]);
        App\Observercategory::create([
            'name' => 'Presentación Personal',
            'prefix' => 'PP',
        ]);
        App\Observercategory::create([
            'name' => 'Cumplimiento de Tareas',
            'prefix' => 'CT',
        ]);
        App\Observercategory::create([
            'name' => 'Circulares y Catedra Cemista',
            'prefix' => 'CIR',
        ]);
    }
}
