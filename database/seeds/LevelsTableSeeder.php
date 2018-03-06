<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Level::create([
            'level' => 'Básica Primaria',
        ]);
        App\Level::create([
            'level' => 'Básica Secundaria',
        ]);
        App\Level::create([
            'level' => 'Media',
        ]);
    }
}
