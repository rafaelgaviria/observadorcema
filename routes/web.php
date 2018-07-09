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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/autenticacion', 'Web\PageController@autenticacion');

//admin
//Route::get('observer/create{id}',['as'=>'id','uses'=>'ObserverController@create']);
//Route::resource('observer/create{id}', 'Admin\ObserverController');
Route::get('observer/create/{id}','Admin\ObserverController@crearObservacion')->name('observer');
Route::get('suspendidos','Admin\ObserverController@suspendidos')->name('suspendidos');
Route::get('micurso', 'Admin\ObserverController@micurso')->name('micurso');
// Route::put('observer/unactive','Admin\ObserverController@unactive');
// Route::put('observer/active','Admin\ObserverController@active');

//Route::resource('observer/observerstudent/', 'Admin\ObserverController@observerStudent');
Route::resource('observer', 'Admin\ObserverController');
Route::get('observerstudent/{id}',[
  'as'=>'observerstudent',
  'uses'=>'Admin\ObserverController@observerStudent'
  ]);
//'Admin\ObserverController@observerStudent');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
