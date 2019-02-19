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
    
        // App\User::create(['id' => '502',
        // 'name' => 'Macías Ulloa Martin David',
        // 'username' => '1013259810',
        // 'email' => 'gabrielarobayo@gmail.com',
        // 'password' => bcrypt('1013259810'),
        // 'document' => '1013259810',
        // 'documenttype_id' => '1',
        // 'phonenumber' => '',
        // 'officialcode' => '2018288',
        // 'course' => '11',
        // 'role_id' => '5',
        // 'file' => '',
        // ]); 
    
        App\User::create([
            'id' => '532',
            'name' => 'Castellanos Garzón Gabriela',
            'username' => '1025327370',
            'email' => '1025327370@cema.edu.co',
            'password' => bcrypt('1025327370'),
            'document' => '1025327370',
            'course' => '1',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '533',
            'name' => 'Gómez Ospina Jerónimo',
            'username' => '1188217994',
            'email' => '1188217994@cema.edu.co',
            'password' => bcrypt('1188217994'),
            'document' => '1188217994',
            'course' => '1',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '534',
            'name' => 'Jaramillo Gamarra Valery',
            'username' => '1150187275',
            'email' => '1150187275@cema.edu.co',
            'password' => bcrypt('1150187275'),
            'document' => '1150187275',
            'course' => '1',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '535',
            'name' => 'Flórez Jiménez Juan Manuel',
            'username' => '1023085601',
            'email' => '1023085601@cema.edu.co',
            'password' => bcrypt('1023085601'),
            'document' => '1023085601',
            'course' => '2',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '536',
            'name' => 'Garzón Sánchez Salome',
            'username' => '1014879010',
            'email' => '1014879010@cema.edu.co',
            'password' => bcrypt('1014879010'),
            'document' => '1014879010',
            'course' => '2',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '537',
            'name' => 'Peña Castillo Matías',
            'username' => '1028788469',
            'email' => '1028788469@cema.edu.co',
            'password' => bcrypt('1028788469'),
            'document' => '1028788469',
            'course' => '2',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '538',
            'name' => 'untitled:Untitled-1',
            'username' => '1025148240',
            'email' => '1025148240@cema.edu.co',
            'password' => bcrypt('1025148240'),
            'document' => '1025148240',
            'course' => '2',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '539',
            'name' => 'Vargas Galindo Mariangel',
            'username' => '1016958996',
            'email' => '1016958996@cema.edu.co',
            'password' => bcrypt('1016958996'),
            'document' => '1016958996',
            'course' => '2',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '540',
            'name' => 'Castellanos Garzón Sofía',
            'username' => '1025326190',
            'email' => '1025326190@cema.edu.co',
            'password' => bcrypt('1025326190'),
            'document' => '1025326190',
            'course' => '3',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '541',
            'name' => 'González Murcia Bianca Alejandra',
            'username' => '1014873361',
            'email' => '1014873361@cema.edu.co',
            'password' => bcrypt('1014873361'),
            'document' => '1014873361',
            'course' => '3',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '542',
            'name' => 'Casasbuenas Cifuentes Gabriela María',
            'username' => '1028720205',
            'email' => '1028720205@cema.edu.co',
            'password' => bcrypt('1028720205'),
            'document' => '1028720205',
            'course' => '4',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '543',
            'name' => 'Chon Cubillos Andrés Felipe',
            'username' => '1016597255',
            'email' => '1016597255@cema.edu.co',
            'password' => bcrypt('1016597255'),
            'document' => '1016597255',
            'course' => '4',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '544',
            'name' => 'Fonseca Mancera Isabella',
            'username' => '1028492496',
            'email' => '1028492496@cema.edu.co',
            'password' => bcrypt('1028492496'),
            'document' => '1028492496',
            'course' => '4',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '545',
            'name' => 'Martínez Castaño Isabella',
            'username' => '1028491598',
            'email' => '1028491598@cema.edu.co',
            'password' => bcrypt('1028491598'),
            'document' => '1028491598',
            'course' => '4',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '546',
            'name' => 'Pinzón Tovar Nicole Danielle',
            'username' => '1145225370',
            'email' => '1145225370@cema.edu.co',
            'password' => bcrypt('1145225370'),
            'document' => '1145225370',
            'course' => '4',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '547',
            'name' => 'Rodríguez Fierro Santiago',
            'username' => '1012373790',
            'email' => '1012373790@cema.edu.co',
            'password' => bcrypt('1012373790'),
            'document' => '1012373790',
            'course' => '4',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '548',
            'name' => 'Dávila Ortega María Paula',
            'username' => '1023304030',
            'email' => '1023304030@cema.edu.co',
            'password' => bcrypt('1023304030'),
            'document' => '1023304030',
            'course' => '5',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '549',
            'name' => 'Devia Roncancio Juan David',
            'username' => '1019765202',
            'email' => '1019765202@cema.edu.co',
            'password' => bcrypt('1019765202'),
            'document' => '1019765202',
            'course' => '5',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '550',
            'name' => 'Pérez Mahecha Eber Santiago',
            'username' => '1012376152',
            'email' => '1012376152@cema.edu.co',
            'password' => bcrypt('1012376152'),
            'document' => '1012376152',
            'course' => '5',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '551',
            'name' => 'Rico Villalba Danna Sofía',
            'username' => '1023303371',
            'email' => '1023303371@cema.edu.co',
            'password' => bcrypt('1023303371'),
            'document' => '1023303371',
            'course' => '5',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '552',
            'name' => 'Salazar Vargas Sandra Lorena',
            'username' => '1033104504',
            'email' => '1033104504@cema.edu.co',
            'password' => bcrypt('1033104504'),
            'document' => '1033104504',
            'course' => '5',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '553',
            'name' => 'Torres Bernal Ada Oriana',
            'username' => '1014868488',
            'email' => '1014868488@cema.edu.co',
            'password' => bcrypt('1014868488'),
            'document' => '1014868488',
            'course' => '5',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '554',
            'name' => 'Bermúdez Martin Juan Camilo',
            'username' => '1019606125',
            'email' => '1019606125@cema.edu.co',
            'password' => bcrypt('1019606125'),
            'document' => '1019606125',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '555',
            'name' => 'Bustos Rodríguez Reychel Dahyana',
            'username' => '1126704399',
            'email' => '1126704399@cema.edu.co',
            'password' => bcrypt('1126704399'),
            'document' => '1126704399',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '556',
            'name' => 'Cortes López Juan Camilo',
            'username' => '1076651590',
            'email' => '1076651590@cema.edu.co',
            'password' => bcrypt('1076651590'),
            'document' => '1076651590',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '557',
            'name' => 'Diosa Rincón Nikol Sayona',
            'username' => '1034286736',
            'email' => '1034286736@cema.edu.co',
            'password' => bcrypt('1034286736'),
            'document' => '1034286736',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '558',
            'name' => 'Dueñas León Santiago',
            'username' => '1025534411',
            'email' => '1025534411@cema.edu.co',
            'password' => bcrypt('1025534411'),
            'document' => '1025534411',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '559',
            'name' => 'Florian Guio Cristian',
            'username' => '1141717010',
            'email' => '1141717010@cema.edu.co',
            'password' => bcrypt('1141717010'),
            'document' => '1141717010',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '560',
            'name' => 'Perilla Polanía María Alejandra',
            'username' => '1034779474',
            'email' => '1034779474@cema.edu.co',
            'password' => bcrypt('1034779474'),
            'document' => '1034779474',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '561',
            'name' => 'Rátiva Arévalo Brayan Sebastián',
            'username' => '1141714338',
            'email' => '1141714338@cema.edu.co',
            'password' => bcrypt('1141714338'),
            'document' => '1141714338',
            'course' => '6',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '562',
            'name' => 'Caballero Fajardo Andrew Alexander',
            'username' => '1028480354',
            'email' => '1028480354@cema.edu.co',
            'password' => bcrypt('1028480354'),
            'document' => '1028480354',
            'course' => '7',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '563',
            'name' => 'Garzón Contreras Nicolle Juliana',
            'username' => '1031425477',
            'email' => '1031425477@cema.edu.co',
            'password' => bcrypt('1031425477'),
            'document' => '1031425477',
            'course' => '7',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '564',
            'name' => 'Manrique Martínez Jennifer Tatiana',
            'username' => '1076904356',
            'email' => '1076904356@cema.edu.co',
            'password' => bcrypt('1076904356'),
            'document' => '1076904356',
            'course' => '7',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '565',
            'name' => 'Pardo Blandón Daniel Felipe',
            'username' => '1010004466',
            'email' => '1010004466@cema.edu.co',
            'password' => bcrypt('1010004466'),
            'document' => '1010004466',
            'course' => '7',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '566',
            'name' => 'Rodríguez Estupiñán Sofía',
            'username' => '1011321770',
            'email' => '1011321770@cema.edu.co',
            'password' => bcrypt('1011321770'),
            'document' => '1011321770',
            'course' => '7',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '567',
            'name' => 'Barrera González Juan David',
            'username' => '1023083269',
            'email' => '1023083269@cema.edu.co',
            'password' => bcrypt('1023083269'),
            'document' => '1023083269',
            'course' => '8',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '568',
            'name' => 'Delgado De Salvador Ronald Camilo',
            'username' => '1016945148',
            'email' => '1016945148@cema.edu.co',
            'password' => bcrypt('1016945148'),
            'document' => '1016945148',
            'course' => '8',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '569',
            'name' => 'García Arévalo Joel Santiago',
            'username' => '1021395265',
            'email' => '1021395265@cema.edu.co',
            'password' => bcrypt('1021395265'),
            'document' => '1021395265',
            'course' => '8',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '570',
            'name' => 'Molina Pérez Michell Tatiana',
            'username' => '1031804150',
            'email' => '1031804150@cema.edu.co',
            'password' => bcrypt('1031804150'),
            'document' => '1031804150',
            'course' => '8',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '571',
            'name' => 'Estrella Romero Roney Steven',
            'username' => '1041975602',
            'email' => '1041975602@cema.edu.co',
            'password' => bcrypt('1041975602'),
            'document' => '1041975602',
            'course' => '9',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '572',
            'name' => 'Israel Moreno Laura Sofía',
            'username' => '1000593131',
            'email' => '1000593131@cema.edu.co',
            'password' => bcrypt('1000593131'),
            'document' => '1000593131',
            'course' => '9',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '573',
            'name' => 'Londoño Goyeneche Sara Luna',
            'username' => '1023302399',
            'email' => '1023302399@cema.edu.co',
            'password' => bcrypt('1023302399'),
            'document' => '1023302399',
            'course' => '9',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '574',
            'name' => 'Mora Ruiz Emuel',
            'username' => '1000077884',
            'email' => '1000077884@cema.edu.co',
            'password' => bcrypt('1000077884'),
            'document' => '1000077884',
            'course' => '9',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '575',
            'name' => 'Moreno Reyes Andrés Camilo',
            'username' => '1000506259',
            'email' => '1000506259@cema.edu.co',
            'password' => bcrypt('1000506259'),
            'document' => '1000506259',
            'course' => '9',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '576',
            'name' => 'Pinto Bernal Zharick Valeria',
            'username' => '1031640458',
            'email' => '1031640458@cema.edu.co',
            'password' => bcrypt('1031640458'),
            'document' => '1031640458',
            'course' => '9',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '577',
            'name' => 'Rincón Santamaría Ana Sofía',
            'username' => '1016945452',
            'email' => '1016945452@cema.edu.co',
            'password' => bcrypt('1016945452'),
            'document' => '1016945452',
            'course' => '9',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '578',
            'name' => 'Rodríguez Serrano Camilo Andrés',
            'username' => '1013099445',
            'email' => '1013099445@cema.edu.co',
            'password' => bcrypt('1013099445'),
            'document' => '1013099445',
            'course' => '9',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '579',
            'name' => 'Rodríguez Zamudio Reiby Stiven',
            'username' => '1016945172',
            'email' => '1016945172@cema.edu.co',
            'password' => bcrypt('1016945172'),
            'document' => '1016945172',
            'course' => '9',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '580',
            'name' => 'Castro Núñez Adriana',
            'username' => '1001050404',
            'email' => '1001050404@cema.edu.co',
            'password' => bcrypt('1001050404'),
            'document' => '1001050404',
            'course' => '10',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '581',
            'name' => 'Gacha Gómez Julián Yesid',
            'username' => '1001300205',
            'email' => '1001300205@cema.edu.co',
            'password' => bcrypt('1001300205'),
            'document' => '1001300205',
            'course' => '10',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '582',
            'name' => 'Gil López Javier Camilo',
            'username' => '1070384460',
            'email' => '1070384460@cema.edu.co',
            'password' => bcrypt('1070384460'),
            'document' => '1070384460',
            'course' => '10',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '583',
            'name' => 'Hurtado López Jeimmy Alejandra',
            'username' => '1000381579',
            'email' => '1000381579@cema.edu.co',
            'password' => bcrypt('1000381579'),
            'document' => '1000381579',
            'course' => '10',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '584',
            'name' => 'Tumbo Contreras Ángela',
            'username' => '1000786422',
            'email' => '1000786422@cema.edu.co',
            'password' => bcrypt('1000786422'),
            'document' => '1000786422',
            'course' => '10',
            'role_id' => '5'
            ]);
        App\User::create([
            'id' => '585',
            'name' => 'Martínez Devia María Paula',
            'username' => '1000319926',
            'email' => '1000319926@cema.edu.co',
            'password' => bcrypt('1000319926'),
            'document' => '1000319926',
            'course' => '11',
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