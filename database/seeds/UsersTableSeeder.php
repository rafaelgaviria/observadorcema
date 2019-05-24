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
            'name' => 'Sánchez Garcés Jairo Andrés',
            'username' => '80154997',
            'email' => '80154997@cema.edu.co',
            'password' => bcrypt('esteban17'),
            'document' => '80154997',
            'role_id' => '4'
        ]);

        // App\User::create([
        //     'id' => '510',
        //     'name' => 'Rincón Cañón Laura Sofía',
        //     'username' => '1001316703',
        //     'email' => 'ceacv151025@gmail.com',
        //     'password' => bcrypt('1001316703'),
        //     'document' => '1001316703',
        //     'officialcode' => '2018294',
        //     'phonenumber' => '',
        //     'course' => '11',
        //     'role_id' => '5'
        //     ]);
        

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