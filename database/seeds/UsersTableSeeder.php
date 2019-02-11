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
        App\User::create(['id' => '531',
            'name' => 'Buitrago Gutiérrez Danna Camila',
            'username' => '1032459584',
            'email' => 'dcbuitragog@unal.edu.co',
            'password' => bcrypt('1032459584'),
            'document' => '1032459584',
            'documenttype_id' => '4',
            'phonenumber' => '',
            'officialcode' => '',
            'role_id' => '4',
            'file' => '',
        ]);
        App\User::create(['id' => '529',
            'name' => 'Moreno Romero Claudia Patricia',
            'username' => '52915000',
            'email' => 'efelannteclaus21@hotmail.com',
            'password' => bcrypt('52915000'),
            'document' => '52915000',
            'documenttype_id' => '4',
            'phonenumber' => '',
            'officialcode' => '',
            'role_id' => '4',
            'file' => '',
        ]);
        App\User::create(['id' => '530',
            'name' => 'Osuna Echeverry Héctor Fabio',
            'username' => '6034368',
            'email' => 'hfabioe2562@gmail.com',
            'password' => bcrypt('6034368'),
            'document' => '6034368',
            'documenttype_id' => '4',
            'phonenumber' => '',
            'officialcode' => '',
            'role_id' => '4',
            'file' => '',
        ]);




        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        //factory(App\User::class, 20)->create();
        
    }

}