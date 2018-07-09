<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Eloquent::unguard();
    
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');

             App\User::create(['id' => '507','name' => 'Gutierrez Bustamante Isaias','username' => '1000283991','email' => 'isagutebu@hotmail.com','password' => bcrypt('1000283991'),'document' => '1000283991','documenttype_id' => '1','phonenumber' => '3134172894','officialcode' => '2014188','course' => '11','role_id' => '5','file' => '',]);




        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        //factory(App\User::class, 20)->create();
        
    }

}