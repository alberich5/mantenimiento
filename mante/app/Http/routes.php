<?php



Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('noe', 'NoeController@index');
//cuando se ingresa alguna url invalida
Route::get('/{slug?}', 'HomeController@index');


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


