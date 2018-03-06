<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Status::create([
            'name' => 'A',
        ]);
        App\Status::create([
            'name' => 'I',
        ]);
    }
}
