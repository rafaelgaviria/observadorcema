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
            'id' => '619',
            'name' => 'Vela Johann Manuel',
            'username' => '1018443343',
            'email' => '1018443343@cema.edu.co',
            'password' => bcrypt('1018443343'),
            'document' => '1018443343',
            'course' => '5',
            'role_id' => '5'
        ]);
        
        App\User::create([
            'id' => '620',
            'name' => 'Vela Johell Santiago',
            'username' => '1025068705',
            'email' => '1025068705@cema.edu.co',
            'password' => bcrypt('1025068705'),
            'document' => '1025068705',
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