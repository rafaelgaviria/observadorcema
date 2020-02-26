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
            'id' => '702',
            'name' => 'Reina Quiñones Leonardo',
            'username' => '1220213621',
            'email' => '1220213621@cema.edu.co',
            'password' => bcrypt('1220213621'),
            'document' => '1220213621',
            'course' => '1',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '703',
            'name' => 'Castillo González María Angel',
            'username' => '1033113133',
            'email' => '1033113133@cema.edu.co',
            'password' => bcrypt('1033113133'),
            'document' => '1033113133',
            'course' => '2',
            'role_id' => '5'
        ]);
   
   App\User::create([
            'id' => '704',
            'name' => 'León Riaño Isabella',
            'username' => '1010967569',
            'email' => '1010967569@cema.edu.co',
            'password' => bcrypt('1010967569'),
            'document' => '1010967569',
            'course' => '2',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '705',
            'name' => 'Espinosa Vargas Nicolle Andréa',
            'username' => '1023392001',
            'email' => '1023392001@cema.edu.co',
            'password' => bcrypt('1023392001'),
            'document' => '1023392001',
            'course' => '4',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '706',
            'name' => 'Estrada Carreño Juan Felipe',
            'username' => '1142930635',
            'email' => '1142930635@cema.edu.co',
            'password' => bcrypt('1142930635'),
            'document' => '1142930635',
            'course' => '4',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '707',
            'name' => 'Rivera Osuna Sara',
            'username' => '1028490591',
            'email' => '1028490591@cema.edu.co',
            'password' => bcrypt('1028490591'),
            'document' => '1028490591',
            'course' => '4',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '708',
            'name' => 'Linares Riveros Tomas',
            'username' => '1028721176',
            'email' => '1028721176@cema.edu.co',
            'password' => bcrypt('1028721176'),
            'document' => '1028721176',
            'course' => '4',
            'role_id' => '5'
        ]);
   App\User::create([
            'id' => '709',
            'name' => 'Meneses Viñas Sara Daniela',
            'username' => '1085098737',
            'email' => '1085098737@cema.edu.co',
            'password' => bcrypt('1085098737'),
            'document' => '1085098737',
            'course' => '5',
            'role_id' => '5'
        ]);
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