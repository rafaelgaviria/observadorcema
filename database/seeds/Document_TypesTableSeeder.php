<?php

use Illuminate\Database\Seeder;

class Document_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Documenttype::create([
            'name' => 'TI',
        ]);
        App\Documenttype::create([
            'name' => 'NIP',
        ]);
        App\Documenttype::create([
            'name' => 'NUIP',
        ]);
        App\Documenttype::create([
            'name' => 'CC',
        ]);
    }
}
