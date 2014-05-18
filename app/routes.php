<?php



/* RUTA HOME  */
Route::get('/', array(
		'as' => 'index',
		'uses' => 'HomeController@getIndex'
	));



/* RUTA CREAR USUARIO DE PRUEBA */
Route::get('/crear', array(
		'as' => 'crear',
		'uses' => 'PruebaController@getCrear'
	));


/* RUTA LOGIN  */
Route::get('/login', array(
		'as' => 'login',
		'uses' => 'HomeController@getLogin'
	));


/* RUTA PROCESAR REGISTRO DE NUEVOS USUARIOS */
Route::post('/postNuevoUsuario', array(
		'as' => 'postNuevoUsuario',
		'uses' => 'HomeController@postCrearUsuario'
	));

/* RUTA PROCESAR LOGIN  */
Route::post('/postLogin', array(
		'as' => 'postLogin',
		'uses' => 'HomeController@postLogin'
	));


Route::get('/cerrar-sesion', array(
		'as' => 'cerrar-sesion',
		'uses' => 'HomeController@cerrarSesion'

	));

