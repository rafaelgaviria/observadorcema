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
            'id' => '63',
            'name' => 'Ramírez Fino Juan Esteban',
            'username' => '1021513642',
            'email' => 'mildrey09@hotmail.com',
            'password' => bcrypt('1021513642'),
            'document' => '3045233059',
            'phonenumber' => '1021513642',
            'course' => '7',
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