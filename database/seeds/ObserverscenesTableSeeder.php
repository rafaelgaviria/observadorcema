<?php

use Illuminate\Database\Seeder;

class ObserverscenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Observerscene::create([
            'name' => 'Ingreso al Colegio',
        ]);
        App\Observerscene::create([
            'name' => 'En Clase',
        ]);
        App\Observerscene::create([
            'name' => 'Actividad',
        ]);
        App\Observerscene::create([
            'name' => 'Descanso',
        ]);
        App\Observerscene::create([
            'name' => 'Fuera del Colegio',
        ]);
    }
}
