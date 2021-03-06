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
        // $this->call(CoursesTableSeeder::class);
        // $this->call(Document_TypesTableSeeder::class);
        //$this->call(LevelsTableSeeder::class);
        // $this->call(RolesTableSeeder::class);
        // $this->call(StatusesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        
        // $this->call(ObservercategoriesTableSeeder::class);
        // $this->call(ObservercodesTableSeeder::class);
        // $this->call(ObservernotesTableSeeder::class);
        // $this->call(ObserverscenesTableSeeder::class);
        // $this->call(ObservertypesTableSeeder::class);
        
        //$this->call(SubjectsTableSeeder::class);
        // $this->call(ObservationsTableSeeder::class);
        
        // Relaciones
        //$this->call(Courses_UsersTableSeeder::class);
        //$this->call(Role_UserTableSeeder.php::class);
    }
}
