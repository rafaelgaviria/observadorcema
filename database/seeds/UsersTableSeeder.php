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
        
        App\User::create([
            'id' => '606',
            'name' => 'Guerrero Zamudio María Alejandra',
            'username' => '1000707125',
            'email' => '1000707125@cema.edu.co',
            'password' => bcrypt('1000707125'),
            'document' => '1000707125',
            'course' => '11',
            'role_id' => '4'
        ]);
        App\User::create([
            'id' => '607',
            'name' => 'Castillo Moreno Juan Diego',
            'username' => '1028484317',
            'email' => '1028484317@cema.edu.co',
            'password' => bcrypt('1028484317'),
            'document' => '1028484317',
            'course' => '6',
            'role_id' => '4'
        ]);
        
        App\User::create([
            'id' => '608',
            'name' => 'Lombana Vargas Duvan Alejandro',
            'username' => '1014659824',
            'email' => '1014659824@cema.edu.co',
            'password' => bcrypt('1014659824'),
            'document' => '1014659824',
            'course' => '8',
            'role_id' => '4'
        ]);
    

// FORMULA PARA CONCATENAR EN EXCEL
// =CONCATENAR(
//     "App\User::create([
//         'id' => '";A2;"',
//         'name' => '";B2;"',
//         'username' => '";C2;"',
//         'email' => '";D2;"@cema.edu.co',
//         'password' => bcrypt('";E2;"'),
//         'document' => '";F2;"',
//         'course' => '";J2;"',
//         'role_id' => '";K2;"'
//     ]);"
// )

        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        //factory(App\User::class, 20)->create();
        
    }

}