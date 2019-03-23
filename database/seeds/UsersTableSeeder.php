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
            'name' => 'Avendaño Julio Samuel',
            'username' => '1025537160',
            'email' => '1025537160@cema.edu.co',
            'password' => bcrypt('1025537160'),
            'document' => '1025537160',
            'course' => '5',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '508',
            'name' => 'Rincón Cañón Daniel Gregorio',
            'username' => '1034577761',
            'email' => 'alexrincona@hotmail.com',
            'password' => bcrypt('1034577761'),
            'document' => '1034577761',
            'course' => '5',
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