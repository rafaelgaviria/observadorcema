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
            //'id' => '63',
            'name' => 'Cubillos Castañeda Sara Lyset',
            'username' => '1188220355',
            'email' => '1188220355@cema.edu.co',
            'password' => bcrypt('1188220355'),
            'document' => '1188220355',
            'course' => '1',
            'role_id' => '4'
        ]);
        
        App\User::create([
            //'id' => '63',
            'name' => 'Rios Gómez Juan Esteban',
            'username' => '1028800884',
            'email' => '1028800884@cema.edu.co',
            'password' => bcrypt('1028800884'),
            'document' => '1028800884',
            'course' => '1',
            'role_id' => '4'
        ]);
        
        App\User::create([
            //'id' => '63',
            'name' => 'Lozano Bocanegra Jhon Steven',
            'username' => '1108833396',
            'email' => '1108833396@cema.edu.co',
            'password' => bcrypt('1108833396'),
            'document' => '1108833396',
            'course' => '2',
            'role_id' => '4'
        ]);
        
        App\User::create([
            //'id' => '63',
            'name' => 'Guerrero Zamudio Daniel Alejandro',
            'username' => '1023165547',
            'email' => '1023165547@cema.edu.co',
            'password' => bcrypt('1023165547'),
            'document' => '1023165547',
            'course' => '3',
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