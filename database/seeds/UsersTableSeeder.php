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
    
        // Estudiantes sin curso
        //App\User::create(['id' => '415','name' => 'Hurtado Pulido Geraldine ','username' => '1014856748','email' => 'geraldegly@hotmail.com','password' => bcrypt('1014856748'),'document' => '1014856748','documenttype_id' => '1','phonenumber' => '4103072','officialcode' => '2017207','role_id' => '5','file' => '',]);

        // DIRECTIVAS Y DOCENTES DOCENTES
        App\User::create(['id' => '432',
            'name' => 'Guerrero Peña Nathali',
            'username' => '1032358384',
            'email' => 'nathguerrerop@gmail.com',
            'password' => bcrypt('1032358384'),
            'document' => '1032358384',
            'documenttype_id' => '4',
            'phonenumber' => '',
            'officialcode' => '',
            'course' => '11',
            'role_id' => '4',
            'file' => '',
        ]);
        App\User::create(['id' => '374',
            'name' => 'Esteban Garnica Kelly Marcela',
            'username' => '52994597',
            'email' => 'kemaesga@hotmail.com',
            'password' => bcrypt('52994597'),
            'document' => '52994597',
            'documenttype_id' => '4',
            'phonenumber' => '',
            'officialcode' => '',
            'course' => '1',
            'role_id' => '4',
            'file' => '',
        ]);
        App\User::create(['id' => '522',
            'name' => 'Álvarez Rodríguez Hover Gonzalo',
            'username' => '93363922',
            'email' => 'profhogar@hotmail.com',
            'password' => bcrypt('93363922'),
            'document' => '93363922',
            'documenttype_id' => '4',
            'phonenumber' => '',
            'officialcode' => '',
            'course' => '9',
            'role_id' => '4',
            'file' => '',
        ]);
        App\User::create(['id' => '428',
            'name' => 'Cuervo Doncel Jenny Patricia',
            'username' => '53139456',
            'email' => 'jenny_patico@hotmail.com',
            'password' => bcrypt('53139456'),
            'document' => '53139456',
            'documenttype_id' => '4',
            'phonenumber' => '',
            'officialcode' => '',
            'course' => '2',
            'role_id' => '4',
            'file' => '',
        ]);


        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        //factory(App\User::class, 20)->create();
        
    }

}