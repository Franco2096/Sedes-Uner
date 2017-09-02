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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function () {
  Route::resource('usuarios','usuariosController');
  Route::resource('analisis','analisisController');

  Route::resource('solicitud', 'solicitudController');
  Route::resource('presupuestos', 'presupuestoController');

  Route::resource('clientes','clientesController');

});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin','middleware' => 'auth:admin'], function()
{
    
    Route::resource('usuarios','usuariosController');
});

Route::prefix('admin')->group( function() {
 	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

});
