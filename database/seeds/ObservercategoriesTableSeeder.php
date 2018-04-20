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
        
        App\Observercategory::create([
            'name' => 'Faltas leves y tipo 1',
            'prefix' => 'T3',
        ]);
        App\Observercategory::create([
            'name' => 'Faltas graves y tipo 2',
            'prefix' => 'T2',
        ]);
        App\Observercategory::create([
            'name' => 'Faltas de especial gravedad y tipo 3',
            'prefix' => 'T1',
        ]);
    }
}
