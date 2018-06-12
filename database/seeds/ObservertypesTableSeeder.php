<?php

use Illuminate\Database\Seeder;

class ObservertypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Observertype::create([
            'name' => 'Faltas leves y tipo 1',
            'description' => 'Faltas leves y tipo 1',
        ]);
        App\Observertype::create([
            'name' => 'Faltas graves y tipo 2',
            'description' => 'Faltas graves y tipo 2',
        ]);
        App\Observertype::create([
            'name' => 'Faltas especial gravedad y tipo 3',
            'description' => 'Faltas especial gravedad y tipo 3',
        ]);
        App\Observertype::create([
            'name' => 'Acudiente',
            'description' => 'Observaciones la acudiente',
        ]);
        App\Observertype::create([
            'name' => 'Sanción',
            'description' => 'Estudiante sancioanado',
        ]);
    }
}