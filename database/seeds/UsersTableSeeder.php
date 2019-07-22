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
            'id' => '612',
            'name' => 'Fuentes Romero Henry Alexander',
            'username' => '80187487',
            'email' => '80187487@cema.edu.co',
            'password' => bcrypt('80187487'),
            'document' => '80187487',
            'role_id' => '4'
        ]);
        App\User::create([
            'id' => '613',
            'name' => 'Velasquez Ducon Gabriel',
            'username' => '1141719843',
            'email' => '1141719843@cema.edu.co',
            'password' => bcrypt('1141719843'),
            'document' => '1141719843',
            'course' => '3',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '614',
            'name' => 'Medina Manrique Alejandro',
            'username' => '1141714035',
            'email' => '1141714035@cema.edu.co',
            'password' => bcrypt('1141714035'),
            'document' => '1141714035',
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