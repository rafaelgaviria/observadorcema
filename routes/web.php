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


//admin
Route::resource('observer', 'Admin\ObserverController');
