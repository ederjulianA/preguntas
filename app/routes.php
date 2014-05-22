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


/* RUTA EDITAR PERFIL  */
Route::get('/perfil', array(
		'as' => 'perfil',
		'uses' => 'UserController@getPerfil'
	));


/* RUTA PROCESAR EDICION DEL  PERFIL  */
Route::post('/editarPerfil', array(
		'as' => 'editarPerfil',
		'uses' => 'UserController@postEditarPerfil'
	));

Route::post('/asignarcurso', array(
	'as' => 'asignarcurso',
	'uses' => 'UserController@postAsignarCurso'
));
	
Route::post('/crearcurso', array(
	'as' => 'crearcurso',
	'uses' => 'UserController@postCrearCurso'
));
	
Route::post('/guardarpregunta', array(
	'as' => 'guardarpregunta',
	'uses' => 'UserController@postSaveQuestion'
));

/* RUTA PROCESAR REGISTRO DE NUEVOS USUARIOS */
Route::post('/postNuevoUsuario', array(
		'as' => 'postNuevoUsuario',
		'uses' => 'HomeController@postCrearUsuario'
	));


/* RUTA PROCESAR CAMBIO DE CONTRASEÑA DE USUARIO */
Route::post('/postCambiarPassword', array(
		'as' => 'postCambiarPassword',
		'uses' => 'UserController@postCambiarPassword'
	));


/* RUTA PROCESAR LA ACTUALIZACION DE UN USUARIO */
Route::post('/postActualizarUser', array(
		'as' => 'postActualizarUser',
		'uses' => 'HomeController@postActualizarUsuario'
	));


/* RUTA PROCESAR NUEVO ROL */
Route::post('/postNuevoRol', array(
		'as' => 'postNuevoRol',
		'uses' => 'RolController@postNuevoRol'
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

