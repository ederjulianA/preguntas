<?php



/* RUTA HOME  */
Route::get('/', array(
		'as' => 'index',
		'uses' => 'HomeController@getIndex'
	));
