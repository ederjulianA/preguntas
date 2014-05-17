<?php



/* RUTA HOME  */
Route::get('/', array(
		'as' => 'index',
		'uses' => 'HomeController@getIndex'
	));


/* RUTA LOGIN  */
Route::get('/login', array(
		'as' => 'login',
		'uses' => 'HomeController@getLogin'
	));

/* RUTA PROCESAR LOGIN  */
Route::post('/postLogin', array(
		'as' => 'postLogin',
		'uses' => 'HomeController@postLogin'
	));

