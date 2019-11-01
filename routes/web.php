<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'autenticacion');

// Route::get('/', function(){
//   $user = App\User::findOrFail(16);
// });
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/miobservador', function(){
//  return 'Esta es el área del Observador del estudiante';
//});

//Route::view('/miobservador', 'miobservador/index');
Route::get('/miobservador', 'Admin\ObserverController@miobservador')->name('miobservador');
//Route::view('/welcome', 'welcome');
Route::get('/autenticacion', 'Web\PageController@autenticacion');

// Route::get('/prueba', function(){
//     $user = App\User::findOrFail(20);
//     return $user->observaciones->where("observer_code_id", "=", 3);
// });

//admin
// Route::get('observer/create{id}',['as'=>'id','uses'=>'ObserverController@create']);
//Route::resource('observer/create{id}', 'Admin\ObserverController');

Route::group(['middleware' => 'admin'], function () {
    
  Route::resource('observer', 'Admin\ObserverController');
  Route::resource('/usuarios', 'Admin\UsersController');
  Route::get('usuarios', 'Admin\UsersController@index')->name('usuarios');

  Route::get('observer/create/{id}','Admin\ObserverController@crearObservacion')->name('observer');
  Route::get('micurso', 'Admin\ObserverController@micurso')->name('micurso');
  Route::get('observacionesdelcurso/{id}', 'Admin\ObserverController@observacionesdelcurso')->name('observacionesdelcurso');
  //Route::get('usuarios', 'Admin\UserController@micurso')->name('micurso');
  

  Route::get('comentarios','Admin\ObserverController@comentarios')->name('comentarios');
  Route::get('notificaciones','Admin\ObserverController@notificaciones')->name('notificaciones');
  Route::get('compromisos','Admin\ObserverController@compromisos')->name('compromisos');
  Route::get('sanciones','Admin\ObserverController@sanciones')->name('sanciones');
  Route::get('matricula_condicional','Admin\ObserverController@matricula_condicional')->name('matricula_condicional');
  Route::get('comite_convivencia','Admin\ObserverController@comite_convivencia')->name('comite_convivencia');
  Route::get('consejo_academico','Admin\ObserverController@consejo_academico')->name('consejo_academico');
  Route::get('remision_orientacion','Admin\ObserverController@remision_orientacion')->name('remision_orientacion');
  Route::get('cancelacion_matricula','Admin\ObserverController@cancelacion_matricula')->name('cancelacion_matricula');
  
  // Route::put('observer/unactive','Admin\ObserverController@unactive');
  // Route::put('observer/active','Admin\ObserverController@active');
  
  //Route::resource('observer/observerstudent/', 'Admin\ObserverController@observerStudent');
  
  ////////////// PRUEBAS CONSULTAS MUCHOS A MUCHOS //////////////
  // Route::get('observer', function(){
    // $user = App\User::findOrFail(402);
    // return $user->materias; 
    
    // $materia = App\Materia::findOrFail(144);
    // return $materia->users; 
    //  });
    
  // OBSERVADOR ACADEMICO
  Route::get('cursos', 'Admin\MateriasController@index')->name('cursos');
  Route::get('materia_list/{id}','Admin\MateriasController@materia_list')->name('materia_list');
  Route::get('student_list/{id}','Admin\MateriasController@student_list')->name('student_list');
  Route::resource('materias', 'Admin\MateriasController');
  Route::get('academicocurso','Admin\MateriasController@academicocurso')->name('academicocurso');
  Route::get('editmateria/{id}','Admin\MateriasController@editmateria')->name('editmateria');
  Route::get('academico_individual','Admin\MateriasController@academico_individual')->name('academico_individual');
  Route::get('materia_individual/{id}','Admin\MateriasController@materia_individual')->name('materia_individual');

  Route::get('calificacionesdelcurso/{id}', 'Admin\OnpacademicController@calificacionesdelcurso')->name('calificacionesdelcurso');
  Route::get('calificacionesdelestudiante/{id}', 'Admin\MateriasController@calificacionesdelestudiante')->name('calificacionesdelestudiante');

  Route::resource('tpmaterias', 'Admin\TpacademicController');
  Route::resource('cpmaterias', 'Admin\CpacademicController');
  Route::resource('qpmaterias', 'Admin\QpacademicController');
  Route::resource('spmaterias', 'Admin\SpacademicController');
  Route::resource('sepmaterias', 'Admin\SepacademicController');
  Route::resource('opmaterias', 'Admin\OpacademicController');
  Route::resource('npmaterias', 'Admin\NpacademicController');
  Route::resource('onpmaterias', 'Admin\OnpacademicController');
});
  
Route::get('miobservadoracademico','Admin\MateriasController@miobservadoracademico')->name('miobservadoracademico');
  //Route::get('/miobservador', 'Admin\ObserverController@miobservador')->name('miobservador');

Route::get('observerstudent/{id}',[
  'as'=>'observerstudent',
  'uses'=>'Admin\ObserverController@observerStudent'
  ]);
//'Admin\ObserverController@observerStudent');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
