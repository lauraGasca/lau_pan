<?php

Route::get('/', ['as' => 'home', 'uses' =>'PrincipalController@getIndex']);
Route::get('nosotros', ['as' => 'home', 'uses' =>'PrincipalController@getNosotros']);

Route::get('productos/{categoria?}', ['as' => 'servicio', 'uses' =>'PrincipalController@getProductos']);
Route::get('contacto', ['as' => 'home', 'uses' =>'PrincipalController@getContacto']);
Route::post('contacto', ['as' => 'home', 'uses' =>'PrincipalController@postContacto']);
Route::post('suscribir', ['as' => 'home', 'uses' =>'PrincipalController@postSuscribir']);

Route::controller('sistema', 'LoginController');
Route::controller('inicio', 'SistemaController');
Route::controller('producto', 'ProductosController');