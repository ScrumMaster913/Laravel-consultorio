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
//----------------inicio paciente
/*Route::get('/pacientes', 'PacienteController@vista');
Route::post('/pacientes/registro', 'PacienteController@create');
Route::get('/pacientes/actualizar/{id}', 'PacienteController@actualizar');
Route::put('/pacientes/actualizar', 'PacienteController@update');
Route::get('/pacientes/eliminar', 'PacienteController@delete');*/
Route::resource('paciente','PacienteController');
Route::resource('insumo','InsumosController');




//----------------fin paciete
//------------------------------------------------------------------------
//----------------inicio usuario
//Route::get('/usuarios', '');
//Route::get('/usuarios/registro', '');
//Route::get('/usuarios/actualizar', '');
//Route::get('/usuarios/eliminar', '');
//----------------fin del usuario
//------------------------------------------------------------------------


Route::get('usuario', 'UsuarioControlador@index');
Route::get('usuario/id/{id}', 'UsuarioControlador@datos_usuario') ->where('id', '[1-9]+');

Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('main');
});