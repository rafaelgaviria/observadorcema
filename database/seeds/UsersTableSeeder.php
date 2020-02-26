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
            'id' => '710',
            'name' => 'Roncallo Pachón Mariana',
            'username' => '1014993589',
            'email' => '1014993589@cema.edu.co',
            'password' => bcrypt('1014993589'),
            'document' => '1014993589',
            'course' => '5',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '711',
            'name' => 'Suárez Cely Alan David',
            'username' => '1013131138',
            'email' => '1013131138@cema.edu.co',
            'password' => bcrypt('1013131138'),
            'document' => '1013131138',
            'course' => '5',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '712',
            'name' => 'Latorre Cardenas Jennifer',
            'username' => '1145225249',
            'email' => '1145225249@cema.edu.co',
            'password' => bcrypt('1145225249'),
            'document' => '1145225249',
            'course' => '6',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '713',
            'name' => 'Lopez Romero Laura Tatiana',
            'username' => '1034400384',
            'email' => '1034400384@cema.edu.co',
            'password' => bcrypt('1034400384'),
            'document' => '1034400384',
            'course' => '8',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '714',
            'name' => 'Bejarano Bejarano Laura Thalia',
            'username' => '1013109070',
            'email' => '1013109070@cema.edu.co',
            'password' => bcrypt('1013109070'),
            'document' => '1013109070',
            'course' => '8',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '715',
            'name' => 'Riobo Vesga Andrés David',
            'username' => '1012916006',
            'email' => '1012916006@cema.edu.co',
            'password' => bcrypt('1012916006'),
            'document' => '1012916006',
            'course' => '9',
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