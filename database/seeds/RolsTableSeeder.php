<?php

use Illuminate\Database\Seeder;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Rol::create([
            'name' => 'Administrador',
        ]);
        App\Rol::create([
            'name' => 'Rector',
        ]);
        App\Rol::create([
            'name' => 'Coordinador',
        ]);
        App\Rol::create([
            'name' => 'Profesor',
        ]);
        App\Rol::create([
            'name' => 'Estudiante',
        ]);
        App\Rol::create([
            'name' => 'Acudiente',
        ]);
    }
}
