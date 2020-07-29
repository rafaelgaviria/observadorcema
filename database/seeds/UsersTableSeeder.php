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
        'id' => '717',
        'name' => 'Gloria Marisol Díaz Acosta',
        'username' => '52157989',
        'email' => '52157989@cema.edu.co',
        'password' => bcrypt('52157989'),
        'document' => '52157989',
        'course' => '5',
        'role_id' => '4'
    ]);

    App\User::create([
        'id' => '718',
        'name' => 'Benavides Alfonso Nicolás',
        'username' => '1011221626',
        'email' => '1011221626@cema.edu.co',
        'password' => bcrypt('1011221626'),
        'document' => '1011221626',
        'course' => '2',
        'role_id' => '5'
    ]);
    
    App\User::create([
        'id' => '719',
        'name' => 'Martínez Rodríguez Santiago',
        'username' => '1150186850',
        'email' => '1150186850@cema.edu.co',
        'password' => bcrypt('1150186850'),
        'document' => '1150186850',
        'course' => '2',
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