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
            'id' => '615',
            'name' => 'Arias Tovar Juan Manuel',
            'username' => '1029962647',
            'email' => '1029962647@cema.edu.co',
            'password' => bcrypt('1029962647'),
            'document' => '1029962647',
            'course' => '2',
            'role_id' => '5'
        ]);
        
        App\User::create([
            'id' => '616',
            'name' => 'Hernandez Gomez Sara Sofia',
            'username' => '1070390329',
            'email' => '1070390329@cema.edu.co',
            'password' => bcrypt('1070390329'),
            'document' => '1070390329',
            'course' => '4',
            'role_id' => '5'
        ]);
        
        App\User::create([
            'id' => '617',
            'name' => 'Dorado Quiñonez Leslie Milena',
            'username' => '1021395450',
            'email' => '1021395450@cema.edu.co',
            'password' => bcrypt('1021395450'),
            'document' => '1021395450',
            'course' => '8',
            'role_id' => '5'
        ]);
        
        App\User::create([
            'id' => '618',
            'name' => 'Arevalo Mejia Nicolas',
            'username' => '1016937399',
            'email' => '1016937399@cema.edu.co',
            'password' => bcrypt('1016937399'),
            'document' => '1016937399',
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