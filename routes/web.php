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

Route::redirect('/', 'blog');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/blog', 'Web\PageController@blog')->name('blog');
// Route::get('/blog', function(){
//   $user = App\user::findOrFail(1);
//   return $user->roles;
  
//   // $role = App\Role::findOrFail(1);
//   // return $role->users;
//   //dd($user);
  
// });


//admin
//Route::get('observer/create{id}',['as'=>'id','uses'=>'ObserverController@create']);
//Route::resource('observer/create{id}', 'Admin\ObserverController');
Route::get('observer/create/{id}','Admin\ObserverController@crearObservacion')->name('observer');
Route::put('observer/unactive','Admin\ObserverController@unactive');
Route::put('observer/active','Admin\ObserverController@active');

Route::resource('observer', 'Admin\ObserverController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
