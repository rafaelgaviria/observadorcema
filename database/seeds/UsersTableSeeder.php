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
        'id' => '694',
        'name' => 'González Acevedo Daniela Alexandra',
        'username' => '1015412722',
        'email' => 'lizfashion03@hotmail.co',
        'password' => bcrypt('1015412722'),
        'document' => '1015412722',
        'course' => '1',
        'role_id' => '4'
    ]);
   
    
    
    App\User::create([
        'id' => '695',
        'name' => 'Rodríguez Trujillo Junise Alexandra',
        'username' => '1013589540',
        'email' => 'rockalexa187@gamil.com',
        'password' => bcrypt('1013589540'),
        'document' => '1013589540',
        'course' => '4',
        'role_id' => '4'
    ]);
    
    App\User::create([
        'id' => '696',
        'name' => 'Lopez Lopez Diego Alejandro',
        'username' => '1015457732',
        'email' => 'diego250113@gmail.com',
        'password' => bcrypt('1015457732'),
        'document' => '1015457732',
        'course' => '8',
        'role_id' => '4'
    ]);
    
    App\User::create([
        'id' => '697',
        'name' => 'Suárez Rojas Cristian Alejandro',
        'username' => '1018418350',
        'email' => 'casuarezroj@gmail.com',
        'password' => bcrypt('1018418350'),
        'document' => '1018418350',
        'course' => '10',
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