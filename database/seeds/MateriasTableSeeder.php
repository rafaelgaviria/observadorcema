<?php

use Illuminate\Database\Seeder;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//     FORMULA PARA CONCATENAR EN EXCEL
//     =CONCATENAR(
//         "App\Materia::create([
//         'id' => '";A2;"',
//         'name' => '";B2;"',
//         'code' => '";F2;"',
//         'area' => '";G2;"',
//         'course_id' => '";I2;"',
//         'name_course' => '";H2;"',
//         ]);"
//     )
    
App\Materia::create(['id' => '1','name' => 'Ciencias Naturales','code' => 'ciencias_naturales_01','area' => 'Ciencias Naturales','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '2','name' => 'Ciencias Naturales','code' => 'ciencias_naturales_02','area' => 'Ciencias Naturales','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '3','name' => 'Ciencias Naturales','code' => 'ciencias_naturales_03','area' => 'Ciencias Naturales','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '4','name' => 'Ciencias Naturales','code' => 'ciencias_naturales_04','area' => 'Ciencias Naturales','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '5','name' => 'Ciencias Naturales','code' => 'ciencias_naturales_05','area' => 'Ciencias Naturales','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '6','name' => 'Biología','code' => 'biologia_06','area' => 'Ciencias Naturales','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '7','name' => 'Biología','code' => 'biologia_07','area' => 'Ciencias Naturales','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '8','name' => 'Biología','code' => 'biologia_08','area' => 'Ciencias Naturales','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '9','name' => 'Biología','code' => 'biologia_09','area' => 'Ciencias Naturales','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '10','name' => 'Química','code' => 'quimica_10','area' => 'Ciencias Naturales','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '11','name' => 'Química','code' => 'quimica_11','area' => 'Ciencias Naturales','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '12','name' => 'Física','code' => 'fisica_10','area' => 'Ciencias Naturales','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '13','name' => 'Física','code' => 'fisica_11','area' => 'Ciencias Naturales','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '14','name' => 'Fisicoquímica','code' => 'fisicoquimica_06','area' => 'Ciencias Naturales','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '15','name' => 'Fisicoquímica','code' => 'fisicoquimica_07','area' => 'Ciencias Naturales','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '16','name' => 'Fisicoquímica','code' => 'fisicoquimica_08','area' => 'Ciencias Naturales','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '17','name' => 'Fisicoquímica','code' => 'fisicoquimica_09','area' => 'Ciencias Naturales','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '18','name' => 'Metodología','code' => 'metodologia_01','area' => 'Ciencias Naturales','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '19','name' => 'Metodología','code' => 'metodologia_02','area' => 'Ciencias Naturales','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '20','name' => 'Metodología','code' => 'metodologia_03','area' => 'Ciencias Naturales','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '21','name' => 'Metodología','code' => 'metodologia_04','area' => 'Ciencias Naturales','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '22','name' => 'Metodología','code' => 'metodologia_05','area' => 'Ciencias Naturales','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '23','name' => 'Metodología','code' => 'metodologia_06','area' => 'Ciencias Naturales','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '24','name' => 'Metodología','code' => 'metodologia_07','area' => 'Ciencias Naturales','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '25','name' => 'Metodología','code' => 'metodologia_08','area' => 'Ciencias Naturales','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '26','name' => 'Metodología','code' => 'metodologia_09','area' => 'Ciencias Naturales','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '27','name' => 'Metodología','code' => 'metodologia_10','area' => 'Ciencias Naturales','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '28','name' => 'Metodología','code' => 'metodologia_11','area' => 'Ciencias Naturales','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '29','name' => 'Matemáticas','code' => 'matematicas_01','area' => 'Matemáticas','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '30','name' => 'Matemáticas','code' => 'matematicas_02','area' => 'Matemáticas','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '31','name' => 'Matemáticas','code' => 'matematicas_03','area' => 'Matemáticas','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '32','name' => 'Matemáticas','code' => 'matematicas_04','area' => 'Matemáticas','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '33','name' => 'Matemáticas','code' => 'matematicas_05','area' => 'Matemáticas','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '34','name' => 'Matemáticas','code' => 'matematicas_06','area' => 'Matemáticas','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '35','name' => 'Matemáticas','code' => 'matematicas_07','area' => 'Matemáticas','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '36','name' => 'Matemáticas','code' => 'matematicas_08','area' => 'Matemáticas','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '37','name' => 'Matemáticas','code' => 'matematicas_09','area' => 'Matemáticas','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '38','name' => 'Matemáticas','code' => 'matematicas_10','area' => 'Matemáticas','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '39','name' => 'Matemáticas','code' => 'matematicas_11','area' => 'Matemáticas','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '40','name' => 'Geoestadistica','code' => 'geoestadistica_01','area' => 'Matemáticas','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '41','name' => 'Geoestadistica','code' => 'geoestadistica_02','area' => 'Matemáticas','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '42','name' => 'Geoestadistica','code' => 'geoestadistica_03','area' => 'Matemáticas','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '43','name' => 'Geoestadistica','code' => 'geoestadistica_04','area' => 'Matemáticas','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '44','name' => 'Geoestadistica','code' => 'geoestadistica_05','area' => 'Matemáticas','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '45','name' => 'Geoestadistica','code' => 'geoestadistica_06','area' => 'Matemáticas','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '46','name' => 'Geoestadistica','code' => 'geoestadistica_07','area' => 'Matemáticas','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '47','name' => 'Geoestadistica','code' => 'geoestadistica_08','area' => 'Matemáticas','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '48','name' => 'Geoestadistica','code' => 'geoestadistica_09','area' => 'Matemáticas','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '49','name' => 'Geoestadistica','code' => 'geoestadistica_10','area' => 'Matemáticas','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '50','name' => 'Geoestadistica','code' => 'geoestadistica_11','area' => 'Matemáticas','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '51','name' => 'Español','code' => 'espanol_01','area' => 'Humanidades','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '52','name' => 'Español','code' => 'espanol_02','area' => 'Humanidades','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '53','name' => 'Español','code' => 'espanol_03','area' => 'Humanidades','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '54','name' => 'Español','code' => 'espanol_04','area' => 'Humanidades','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '55','name' => 'Español','code' => 'espanol_05','area' => 'Humanidades','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '56','name' => 'Español','code' => 'espanol_06','area' => 'Humanidades','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '57','name' => 'Español','code' => 'espanol_07','area' => 'Humanidades','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '58','name' => 'Español','code' => 'espanol_08','area' => 'Humanidades','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '59','name' => 'Español','code' => 'espanol_09','area' => 'Humanidades','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '60','name' => 'Español','code' => 'espanol_10','area' => 'Humanidades','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '61','name' => 'Español','code' => 'espanol_11','area' => 'Humanidades','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '62','name' => 'Inglés','code' => 'ingles_01','area' => 'Humanidades','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '63','name' => 'Inglés','code' => 'ingles_02','area' => 'Humanidades','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '64','name' => 'Inglés','code' => 'ingles_03','area' => 'Humanidades','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '65','name' => 'Inglés','code' => 'ingles_04','area' => 'Humanidades','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '66','name' => 'Inglés','code' => 'ingles_05','area' => 'Humanidades','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '67','name' => 'Inglés','code' => 'ingles_06','area' => 'Humanidades','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '68','name' => 'Inglés','code' => 'ingles_07','area' => 'Humanidades','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '69','name' => 'Inglés','code' => 'ingles_08','area' => 'Humanidades','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '70','name' => 'Inglés','code' => 'ingles_09','area' => 'Humanidades','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '71','name' => 'Inglés','code' => 'ingles_10','area' => 'Humanidades','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '72','name' => 'Inglés','code' => 'ingles_11','area' => 'Humanidades','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '73','name' => 'Sociales','code' => 'sociales_01','area' => 'Sociales','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '74','name' => 'Sociales','code' => 'sociales_02','area' => 'Sociales','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '75','name' => 'Sociales','code' => 'sociales_03','area' => 'Sociales','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '76','name' => 'Sociales','code' => 'sociales_04','area' => 'Sociales','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '77','name' => 'Sociales','code' => 'sociales_05','area' => 'Sociales','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '78','name' => 'Sociales','code' => 'sociales_06','area' => 'Sociales','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '79','name' => 'Sociales','code' => 'sociales_07','area' => 'Sociales','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '80','name' => 'Sociales','code' => 'sociales_08','area' => 'Sociales','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '81','name' => 'Sociales','code' => 'sociales_09','area' => 'Sociales','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '82','name' => 'Filosofía','code' => 'filosofia_10','area' => 'Sociales','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '83','name' => 'Filosofía','code' => 'filosofia_11','area' => 'Sociales','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '84','name' => 'Constitución','code' => 'constitucion_06','area' => 'Sociales','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '85','name' => 'Constitución','code' => 'constitucion_07','area' => 'Sociales','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '86','name' => 'Constitución','code' => 'constitucion_08','area' => 'Sociales','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '87','name' => 'Constitución','code' => 'constitucion_09','area' => 'Sociales','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '88','name' => 'C.E.S.P.','code' => 'c.e.s.p._10','area' => 'Sociales','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '89','name' => 'C.E.S.P.','code' => 'c.e.s.p._11','area' => 'Sociales','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '90','name' => 'Informática','code' => 'informatica_01','area' => 'Tecnología','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '91','name' => 'Informática','code' => 'informatica_02','area' => 'Tecnología','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '92','name' => 'Informática','code' => 'informatica_03','area' => 'Tecnología','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '93','name' => 'Informática','code' => 'informatica_04','area' => 'Tecnología','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '94','name' => 'Informática','code' => 'informatica_05','area' => 'Tecnología','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '95','name' => 'Informática','code' => 'informatica_06','area' => 'Tecnología','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '96','name' => 'Informática','code' => 'informatica_07','area' => 'Tecnología','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '97','name' => 'Informática','code' => 'informatica_08','area' => 'Tecnología','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '98','name' => 'Informática','code' => 'informatica_09','area' => 'Tecnología','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '99','name' => 'Informática','code' => 'informatica_10','area' => 'Tecnología','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '100','name' => 'Informática','code' => 'informatica_11','area' => 'Tecnología','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '101','name' => 'Edufisica','code' => 'edufisica_01','area' => 'Educación Física','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '102','name' => 'Edufisica','code' => 'edufisica_02','area' => 'Educación Física','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '103','name' => 'Edufisica','code' => 'edufisica_03','area' => 'Educación Física','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '104','name' => 'Edufisica','code' => 'edufisica_04','area' => 'Educación Física','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '105','name' => 'Edufisica','code' => 'edufisica_05','area' => 'Educación Física','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '106','name' => 'Edufisica','code' => 'edufisica_06','area' => 'Educación Física','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '107','name' => 'Edufisica','code' => 'edufisica_07','area' => 'Educación Física','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '108','name' => 'Edufisica','code' => 'edufisica_08','area' => 'Educación Física','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '109','name' => 'Edufisica','code' => 'edufisica_09','area' => 'Educación Física','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '110','name' => 'Edufisica','code' => 'edufisica_10','area' => 'Educación Física','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '111','name' => 'Edufisica','code' => 'edufisica_11','area' => 'Educación Física','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '112','name' => 'Artes','code' => 'artes_01','area' => 'Artes','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '113','name' => 'Artes','code' => 'artes_02','area' => 'Artes','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '114','name' => 'Artes','code' => 'artes_03','area' => 'Artes','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '115','name' => 'Artes','code' => 'artes_04','area' => 'Artes','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '116','name' => 'Artes','code' => 'artes_05','area' => 'Artes','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '117','name' => 'Artes','code' => 'artes_06','area' => 'Artes','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '118','name' => 'Artes','code' => 'artes_07','area' => 'Artes','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '119','name' => 'Artes','code' => 'artes_08','area' => 'Artes','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '120','name' => 'Artes','code' => 'artes_09','area' => 'Artes','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '121','name' => 'Artes','code' => 'artes_10','area' => 'Artes','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '122','name' => 'Artes','code' => 'artes_11','area' => 'Artes','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '123','name' => 'Religión','code' => 'religion_01','area' => 'Educación Religiosa y Moral','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '124','name' => 'Religión','code' => 'religion_02','area' => 'Educación Religiosa y Moral','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '125','name' => 'Religión','code' => 'religion_03','area' => 'Educación Religiosa y Moral','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '126','name' => 'Religión','code' => 'religion_04','area' => 'Educación Religiosa y Moral','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '127','name' => 'Religión','code' => 'religion_05','area' => 'Educación Religiosa y Moral','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '128','name' => 'Religión','code' => 'religion_06','area' => 'Educación Religiosa y Moral','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '129','name' => 'Religión','code' => 'religion_07','area' => 'Educación Religiosa y Moral','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '130','name' => 'Religión','code' => 'religion_08','area' => 'Educación Religiosa y Moral','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '131','name' => 'Religión','code' => 'religion_09','area' => 'Educación Religiosa y Moral','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '132','name' => 'Religión','code' => 'religion_10','area' => 'Educación Religiosa y Moral','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '133','name' => 'Religión','code' => 'religion_11','area' => 'Educación Religiosa y Moral','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '134','name' => 'Ética y Valores','code' => 'etica_y_valores_01','area' => 'Educación Religiosa y Moral','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '135','name' => 'Ética y Valores','code' => 'etica_y_valores_02','area' => 'Educación Religiosa y Moral','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '136','name' => 'Ética y Valores','code' => 'etica_y_valores_03','area' => 'Educación Religiosa y Moral','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '137','name' => 'Ética y Valores','code' => 'etica_y_valores_04','area' => 'Educación Religiosa y Moral','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '138','name' => 'Ética y Valores','code' => 'etica_y_valores_05','area' => 'Educación Religiosa y Moral','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '139','name' => 'Ética y Valores','code' => 'etica_y_valores_06','area' => 'Educación Religiosa y Moral','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '140','name' => 'Ética y Valores','code' => 'etica_y_valores_07','area' => 'Educación Religiosa y Moral','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '141','name' => 'Ética y Valores','code' => 'etica_y_valores_08','area' => 'Educación Religiosa y Moral','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '142','name' => 'Ética y Valores','code' => 'etica_y_valores_09','area' => 'Educación Religiosa y Moral','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '143','name' => 'Ética y Valores','code' => 'etica_y_valores_10','area' => 'Educación Religiosa y Moral','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '144','name' => 'Ética y Valores','code' => 'etica_y_valores_11','area' => 'Educación Religiosa y Moral','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '145','name' => 'Pileo','code' => 'pileo_01','area' => 'Catedra Cemista','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '146','name' => 'Pileo','code' => 'pileo_02','area' => 'Catedra Cemista','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '147','name' => 'Pileo','code' => 'pileo_03','area' => 'Catedra Cemista','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '148','name' => 'Pileo','code' => 'pileo_04','area' => 'Catedra Cemista','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '149','name' => 'Pileo','code' => 'pileo_05','area' => 'Catedra Cemista','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '150','name' => 'Pileo','code' => 'pileo_06','area' => 'Catedra Cemista','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '151','name' => 'Pileo','code' => 'pileo_07','area' => 'Catedra Cemista','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '152','name' => 'Pileo','code' => 'pileo_08','area' => 'Catedra Cemista','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '153','name' => 'Pileo','code' => 'pileo_09','area' => 'Catedra Cemista','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '154','name' => 'Pileo','code' => 'pileo_10','area' => 'Catedra Cemista','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '155','name' => 'Pileo','code' => 'pileo_11','area' => 'Catedra Cemista','course_id' => '11','name_course' => 'Once',]);
App\Materia::create(['id' => '156','name' => 'Martes de Prueba','code' => 'martes_de_prueba_01','area' => 'Catedra Cemista','course_id' => '1','name_course' => 'Primero',]);
App\Materia::create(['id' => '157','name' => 'Martes de Prueba','code' => 'martes_de_prueba_02','area' => 'Catedra Cemista','course_id' => '2','name_course' => 'Segundo',]);
App\Materia::create(['id' => '158','name' => 'Martes de Prueba','code' => 'martes_de_prueba_03','area' => 'Catedra Cemista','course_id' => '3','name_course' => 'Tercero',]);
App\Materia::create(['id' => '159','name' => 'Martes de Prueba','code' => 'martes_de_prueba_04','area' => 'Catedra Cemista','course_id' => '4','name_course' => 'Cuarto',]);
App\Materia::create(['id' => '160','name' => 'Martes de Prueba','code' => 'martes_de_prueba_05','area' => 'Catedra Cemista','course_id' => '5','name_course' => 'Quinto',]);
App\Materia::create(['id' => '161','name' => 'Martes de Prueba','code' => 'martes_de_prueba_06','area' => 'Catedra Cemista','course_id' => '6','name_course' => 'Sexto',]);
App\Materia::create(['id' => '162','name' => 'Martes de Prueba','code' => 'martes_de_prueba_07','area' => 'Catedra Cemista','course_id' => '7','name_course' => 'Séptimo',]);
App\Materia::create(['id' => '163','name' => 'Martes de Prueba','code' => 'martes_de_prueba_08','area' => 'Catedra Cemista','course_id' => '8','name_course' => 'Octavo',]);
App\Materia::create(['id' => '164','name' => 'Martes de Prueba','code' => 'martes_de_prueba_09','area' => 'Catedra Cemista','course_id' => '9','name_course' => 'Noveno',]);
App\Materia::create(['id' => '165','name' => 'Martes de Prueba','code' => 'martes_de_prueba_10','area' => 'Catedra Cemista','course_id' => '10','name_course' => 'Décimo',]);
App\Materia::create(['id' => '166','name' => 'Martes de Prueba','code' => 'martes_de_prueba_11','area' => 'Catedra Cemista','course_id' => '11','name_course' => 'Once',]);    



    }
}
