<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Rating::create([
            'name' => 'Bueno',
            'description' => 'Bueno',
        ]);
        App\Rating::create([
            'name' => 'Regular',
            'description' => 'Regular',
        ]);
        App\Rating::create([
            'name' => 'Malo',
            'description' => 'Malo',
        ]);
    }
}
