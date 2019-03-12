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
            'id' => '455',
            'name' => 'Herrera Tello Juan Pablo',
            'username' => '1021395340',
            'email' => '1021395340@cema.edu.co',
            'password' => bcrypt('1021395340'),
            'document' => '1021395340',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '215',
            'name' => 'Parra Salazar Maria Celeste',
            'username' => '1016944552',
            'email' => 'celesteotaku51511@gmail.com',
            'password' => bcrypt('1016944552'),
            'document' => '1016944552',
            'course' => '8',
            'role_id' => '5'
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