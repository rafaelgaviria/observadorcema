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
            'id' => '622',
            'name' => 'BAUTISTA MORA JULIANA',
            'username' => '1014886662',
            'email' => '1014886662@cema.edu.co',
            'password' => bcrypt('1014886662'),
            'document' => '1014886662',
            'course' => '1',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '623',
            'name' => 'CARDENAS REYES MARTIN',
            'username' => '1011234273',
            'email' => '1011234273@cema.edu.co',
            'password' => bcrypt('1011234273'),
            'document' => '1011234273',
            'course' => '1',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '624',
            'name' => 'FORERO HERRERA DANNA VIOLETTA',
            'username' => '1014996328',
            'email' => '1014996328@cema.edu.co',
            'password' => bcrypt('1014996328'),
            'document' => '1014996328',
            'course' => '1',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '625',
            'name' => 'GARCIA ARIAS DANNA ISABELLA',
            'username' => '1188219365',
            'email' => '1188219365@cema.edu.co',
            'password' => bcrypt('1188219365'),
            'document' => '1188219365',
            'course' => '1',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '626',
            'name' => 'GARCIA ARIAS ELIZABETH',
            'username' => '1019911001',
            'email' => '1019911001@cema.edu.co',
            'password' => bcrypt('1019911001'),
            'document' => '1019911001',
            'course' => '1',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '627',
            'name' => 'GOMEZ MARTINEZ JUAN DIEGO',
            'username' => '1014885149',
            'email' => '1014885149@cema.edu.co',
            'password' => bcrypt('1014885149'),
            'document' => '1014885149',
            'course' => '1',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '628',
            'name' => 'PÁEZ RIVAS BÁRBARA SOFÍA',
            'username' => '103691437',
            'email' => '103691437@cema.edu.co',
            'password' => bcrypt('103691437'),
            'document' => '103691437',
            'course' => '1',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '629',
            'name' => 'PALACIOS RODRIGUEZ KARIM DANNAE',
            'username' => '1018481814',
            'email' => '1018481814@cema.edu.co',
            'password' => bcrypt('1018481814'),
            'document' => '1018481814',
            'course' => '1',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '630',
            'name' => 'RODRIGUEZ BUITRAGO MARIA VALENTINA',
            'username' => '1141722701',
            'email' => '1141722701@cema.edu.co',
            'password' => bcrypt('1141722701'),
            'document' => '1141722701',
            'course' => '1',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '631',
            'name' => 'SANIN CONTRERAS CAMILA',
            'username' => '1016602200',
            'email' => '1016602200@cema.edu.co',
            'password' => bcrypt('1016602200'),
            'document' => '1016602200',
            'course' => '1',
            'role_id' => '5'
        ]);
        App\User::create([
            'id' => '632',
            'name' => 'SOLANO DUARTE LAURA SOFIA',
            'username' => '1027291175',
            'email' => '1027291175@cema.edu.co',
            'password' => bcrypt('1027291175'),
            'document' => '1027291175',
            'course' => '1',
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