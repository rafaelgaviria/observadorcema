<?php

use Illuminate\Database\Seeder;

class ObservercodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Observercode::create([
            'name' => '1-01',
            'description' => 'Entra y sale con autorización del salón de clase.',
        ]);
        App\Observercode::create([
            'name' => '1-02',
            'description' => 'Puntualidad en la asistencia al colegio, clases y actividades programadas.',
        ]);
        App\Observercode::create([
            'name' => '1-03',
            'description' => 'Inasistencia al colegio con justificación.',
        ]);
        App\Observercode::create([
            'name' => '1-04',
            'description' => 'Porta correctamente el uniforme.',
        ]);
        App\Observercode::create([
            'name' => '1-05',
            'description' => 'Mantiene hábitos de higiene y aseo personal.',
        ]);
        App\Observercode::create([
            'name' => '1-06',
            'description' => 'Mantiene orden, aseo y cuidados con el entorno.',
        ]);
        App\Observercode::create([
            'name' => '1-07',
            'description' => 'Utiliza un vocabulario oral y escrito adecuado.',
        ]);
        App\Observercode::create([
            'name' => '1-08',
            'description' => 'Manifiesta respeto por sí mismo y por el otro.',
        ]);
        App\Observercode::create([
            'name' => '1-09',
            'description' => 'Respeta y hace respetar el buen nombre del colegio velando por su prestigio.',
        ]);
        App\Observercode::create([
            'name' => '1-10',
            'description' => 'Muestra un comportamiento adecuado en el aula.',
        ]);
        App\Observercode::create([
            'name' => '1-11',
            'description' => 'Permanece en sitios indicados de acuerdo a la actividad.',
        ]);
        App\Observercode::create([
            'name' => '1-12',
            'description' => 'Cumple con tareas y actividades asignadas.',
        ]);
        App\Observercode::create([
            'name' => '1-13',
            'description' => 'Respeta los principios de la doctrina Cristiana Católica y su práctica en el Colegio.',
        ]);
        App\Observercode::create([
            'name' => '1-14',
            'description' => 'Respeta las instalaciones no masticando ni comiendo chicles.',
        ]);
        App\Observercode::create([
            'name' => '1-15',
            'description' => 'Cuida su entorno no arrojando basura al piso.',
        ]);
        App\Observercode::create([
            'name' => '1-16',
            'description' => 'Se abstiene de consumir alimento en sitios no indicados.',
        ]);
        App\Observercode::create([
            'name' => '1-17',
            'description' => 'Acata las instrucciones e indicaciones de Docentes y Directivos.',
        ]);
        App\Observercode::create([
            'name' => '1-18',
            'description' => 'Se presenta al colegio con los implementos indicados.',
        ]);
        App\Observercode::create([
            'name' => '1-19',
            'description' => 'Se abstiene de traer materiales diferentes a los necesarios de clases.',
        ]);
        App\Observercode::create([
            'name' => '1-20',
            'description' => 'Presenta las circulares firmadas por el acudiente.',
        ]);
        App\Observercode::create([
            'name' => '1-21',
            'description' => 'Cumple con los turnos de aseo y acompañamiento.',
        ]);
        App\Observercode::create([
            'name' => '1-22',
            'description' => 'Se abstiene de realizar actividades ajenas a su compromiso escolar.',
        ]);
        App\Observercode::create([
            'name' => '1-23',
            'description' => 'Respeta y cumple con los protocolos para el uso de todas y cada una de las dependencias y espacios de formación.',
        ]);
        App\Observercode::create([
            'name' => '1-24',
            'description' => 'Mantiene comportamientos adecuados con el uniforme dentro o fuera del plantel.',
        ]);
        App\Observercode::create([
            'name' => '1-25',
            'description' => 'Porta diariamente la agenda escolar, el carnet, el cuaderno de procur y demás requerimientos para el desarrollo de la cátedra Cemista.',
        ]);
        App\Observercode::create([
            'name' => '1-26',
            'description' => 'Se abstiene de cometer fraude.',
        ]);

        //Tipo 2
        App\Observercode::create([
            'name' => '2-01',
            'description' => 'Agresión verbal o física a un compañero, directamente o a través de terceras personas.',
        ]);
        App\Observercode::create([
            'name' => '2-02',
            'description' => 'Traer al Colegio o inducir la presencia de terceras personas, bandas o grupos juveniles, especialmente a las horas de ingreso,salida de clases o de cualquier actividad escolar, con el fin de agredir de palabra o de hecho a cualquier miembro de la institución.',
        ]);
        App\Observercode::create([
            'name' => '2-03',
            'description' => 'Consumo o distribución de licor o cigarrillos dentro o fuera del colegio.',
        ]);
        App\Observercode::create([
            'name' => '2-04',
            'description' => 'Apropiarse indebidamente de bienes ajenos.',
        ]);
        App\Observercode::create([
            'name' => '2-05',
            'description' => 'Amenazas o agresión de palabra y/o hecho a las directivas del colegio, profesores, empleados o compañeros.',
        ]);
        App\Observercode::create([
            'name' => '2-06',
            'description' => 'Practicar ritos satánicos, espiritismo, brujería, juegos (ouija) y otros actos que atenten contra la dignidad de la persona humana.',
        ]);
        App\Observercode::create([
            'name' => '2-07',
            'description' => 'Incitar al desorden, a la anarquía y al caos por cualquier medio.',
        ]);
        App\Observercode::create([
            'name' => '2-08',
            'description' => 'Realizar cualquier forma de acoso escolar o ciberacoso determinados como la conducta negativa, intencional metódica y sistemática de agresión, intimidación, humillación, ridiculización, difamación, coacción, aislamiento deliberado, amenaza o incitación a la violencia o cualquier forma de maltrato psicológico, verbal, físico o por medios electrónicos contra un miembro de la comunidad educativa.',
        ]);

        // Tipo 3
        App\Observercode::create([
            'name' => '3-01',
            'description' => 'Presentarse al colegio o a una actividad del mismo en estado de embriaguez, o bajo efectos de sustancias psicoactivas.',
        ]);
        App\Observercode::create([
            'name' => '3-02',
            'description' => 'Falsificar recibos de pago de pensión, firmas, sellos y cualquier tipo de documento que sirva de prueba o que se exhiba en el Colegio.',
        ]);
        App\Observercode::create([
            'name' => '3-03',
            'description' => 'El hurto comprobado por parte del estudiante, directamente o en complicidad, dentro o fuera del Colegio.',
        ]);
        App\Observercode::create([
            'name' => '3-04',
            'description' => 'Portar, consumir o distribuir bebidas embriagantes, estupefacientes o sustancias psicotrópicas o psicoactivas dentro o fuera del Colegio.',
        ]);
        App\Observercode::create([
            'name' => '3-05',
            'description' => 'Porte o uso de armas, cualquiera que sea su clase o denominación, dentro o fuera del Colegio con o sin el uniforme.',
        ]);
        App\Observercode::create([
            'name' => '3-06',
            'description' => 'Inducir e incitar a los compañeros o asumir conductas inmorales, pervertidas o que conlleven al acoso sexual.',
        ]);
        App\Observercode::create([
            'name' => '3-07',
            'description' => 'Utilización de artículos detonantes, sustancias químicas o incendiarias que atenten contra la salud e integridad de las personas o a las instalaciones del Colegio.',
        ]);
        App\Observercode::create([
            'name' => '3-08',
            'description' => 'Realizar acciones que se constituyan en presuntos delitos establecidos en la legislación penal colombiana.',
        ]);
        
        
        
        App\Observercode::create([
            'name' => '4-01',
            'description' => '02 Suministra al estudiante los recursos necesarios y solicitados',
        ]);
        App\Observercode::create([
            'name' => '4-02',
            'description' => '03 Cumple oportunamente con las obligaciones contractuales de matrícula',
        ]);
        App\Observercode::create([
            'name' => '4-03',
            'description' => '04 Evidencia su identificación con el Horizonte Institucional y acompañamiento en la formación del estudiante: Asistencia, puntualidad, presentación de excusas, presentación personal del estudiante, etc..',
        ]);
        App\Observercode::create([
            'name' => '4-04',
            'description' => 'SANCIÓN',
        ]);
        
    }
}
