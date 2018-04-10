<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create([
            'name' => 'Administrador',
            'description' => '',
        ]);
        App\Role::create([
            'name' => 'Rector',
            'description' => '',
        ]);
        App\Role::create([
            'name' => 'Coordinador',
            'description' => '',
        ]);
        App\Role::create([
            'name' => 'Profesor',
            'description' => '',
        ]);
        App\Role::create([
            'name' => 'Estudiante',
            'description' => '',
        ]);
        App\Role::create([
            'name' => 'Acudiente',
            'description' => '',
        ]);
    }
}
