<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(ObservationsTableSeeder::class);
        $this->call(ObservercategoriesTableSeeder::class);
        $this->call(ObservercodesTableSeeder::class);
        $this->call(ObservernotesTableSeeder::class);
        $this->call(ObserverscenesTableSeeder::class);
        $this->call(ObservertypesTableSeeder::class);
        $this->call(RolsTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        
    }
}
