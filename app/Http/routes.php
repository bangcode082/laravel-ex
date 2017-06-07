<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', ['middleware' => 'auth' , 'uses' => 'HomeController@index']);

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@logout');

Route::get('/admin', ['middleware' => ['auth', 'role:admin'], 'uses' => 'AdminController@index', 'as' => 'admin']);
Route::get('/admin/user/{id}', ['middleware' => ['auth', 'role:admin'], 'uses' => 'AdminController@view', 'as' => 'profile']);
Route::get('/admin/adduser/', ['middleware' => ['auth', 'role:admin'], 'uses' => 'AdminController@addUser', 'as' => 'add_user']);
Route::post('/admin/adduser/', ['middleware' => ['auth', 'role:admin'], 'uses' => 'AdminController@saveUser']);
Route::get('/admin/deluser/{id}', ['middleware' => ['auth', 'role:admin'], 'uses' => 'AdminController@delUser']);
Route::get('/merchant/{id?}', function() {
  return "Berhasil mengakses halaman merchant";
});
Route::get('/customer/{id?}', function() {
  return "Selamat datang customer";
});
