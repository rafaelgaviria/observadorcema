<?php

use Illuminate\Database\Seeder;

class ObservernotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Observernote::create([
            'name' => 'Comentario',
        ]);
        App\Observernote::create([
            'name' => 'Notificación',
        ]);
        App\Observernote::create([
            'name' => 'Compromiso',
        ]);
        App\Observernote::create([
            'name' => 'Sanción',
        ]);
        App\Observernote::create([
            'name' => 'Matrícula Condicional',
        ]);
        App\Observernote::create([
            'name' => 'Remisión al Comité de Convivencia',
        ]);
        App\Observernote::create([
            'name' => 'Remisión al Consejo Académico',
        ]);
        App\Observernote::create([
            'name' => 'Cancelación de Matrícula',
        ]);
        App\Observernote::create([
            'name' => 'Remisión a Orientación',
        ]);
    }
}
