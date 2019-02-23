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
            'id' => '601',
            'name' => 'Suarez Castro Ximena Paola',
            'username' => '1033699214',
            'email' => '1033699214@cema.edu.co',
            'password' => bcrypt('1033699214'),
            'document' => '1033699214',
            'course' => '7',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '602',
            'name' => 'Sandoval Moreno Juan Esteban',
            'username' => '1019842090',
            'email' => '1019842090@cema.edu.co',
            'password' => bcrypt('1019842090'),
            'document' => '1019842090',
            'course' => '8',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '603',
            'name' => 'Sayas Meriño Uriel De Jesús',
            'username' => '1043969827',
            'email' => '1043969827@cema.edu.co',
            'password' => bcrypt('1043969827'),
            'document' => '1043969827',
            'course' => '8',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '604',
            'name' => 'Tavera Rico Soleil',
            'username' => '1031809699',
            'email' => '1031809699@cema.edu.co',
            'password' => bcrypt('1031809699'),
            'document' => '1031809699',
            'course' => '8',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '605',
            'name' => 'Palacios Coy Nazli Sulay',
            'username' => '1000592944',
            'email' => '1000592944@cema.edu.co',
            'password' => bcrypt('1000592944'),
            'document' => '1000592944',
            'course' => '10',
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