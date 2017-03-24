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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('actualizar', 'ActualizarController@index');

Route::controller('prueba', 'PruebaController');

Route::resource('localidad', 'LocalidadController');
Route::resource('establecimiento', 'EstablecimientoController');
Route::resource('reporte', 'ReporteController');
Route::resource('precio', 'PrecioController');
Route::resource('ocupacion', 'OcupacionController');






Route::controllers([
	//'ocupacion' => 'OcupacionController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


