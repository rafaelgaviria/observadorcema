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
            'name' => 'Tipo 1',
            'description' => 'COMPORTAMIENTO Y FALTAS LEVES',
        ]);
        App\Observertype::create([
            'name' => 'Tipo 2',
            'description' => 'COMPORTAMIENTO Y FALTAS LEVES',
        ]);
        App\Observertype::create([
            'name' => 'Tipo 3',
            'description' => 'COMPORTAMIENTO Y FALTAS ESPECIAL GRAVEDAD',
        ]);
    }
}