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
        
        // Estudiantes
        //App\User::create(['id' => '502','name' => 'Macías Ulloa Martin David','username' => '1013259810','email' => 'gabrielarobayo@gmail.com','password' => bcrypt('1013259810'),'document' => '1013259810','documenttype_id' => '1','phonenumber' => '','officialcode' => '2018288','course' => '11','role_id' => '5','file' => '',]);  
    
        
        App\User::create([
            'id' => '395',
            'name' => 'Chaparro Arias Wilson Esteban',
            'username' => '1019603744',
            'email' => '1019603744@cema.edu.co',
            'password' => bcrypt('1019603744'),
            'document' => '1019603744',
            'course' => '5',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '595',
            'name' => 'Sevilla Rodríguez Juan Sebastián',
            'username' => '1141715394',
            'email' => '1141715394@cema.edu.co',
            'password' => bcrypt('1141715394'),
            'document' => '1141715394',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '596',
            'name' => 'Vega Buitrago Mariana',
            'username' => '1141716383',
            'email' => '1141716383@cema.edu.co',
            'password' => bcrypt('1141716383'),
            'document' => '1141716383',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '597',
            'name' => 'Zarate González Samuel Antonio',
            'username' => '1019992636',
            'email' => '1019992636@cema.edu.co',
            'password' => bcrypt('1019992636'),
            'document' => '1019992636',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '598',
            'name' => 'Gómez Castrillón Andrés Felipe',
            'username' => '1016949124',
            'email' => '1016949124@cema.edu.co',
            'password' => bcrypt('1016949124'),
            'document' => '1016949124',
            'course' => '7',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '599',
            'name' => 'Hernández Trujillo Juliana Valentina',
            'username' => '1028481744',
            'email' => '1028481744@cema.edu.co',
            'password' => bcrypt('1028481744'),
            'document' => '1028481744',
            'course' => '7',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '600',
            'name' => 'Quintero Melgarejo Heily Alejandra',
            'username' => '1028400656',
            'email' => '1028400656@cema.edu.co',
            'password' => bcrypt('1028400656'),
            'document' => '1028400656',
            'course' => '7',
            'role_id' => '5'
            ]);
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