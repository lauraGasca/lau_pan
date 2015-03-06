<?php

Route::get('/', ['as' => 'home', 'uses' =>'PrincipalController@getIndex']);
Route::get('nosotros', ['as' => 'home', 'uses' =>'PrincipalController@getNosotros']);

Route::get('productos/{categoria?}', ['as' => 'servicio', 'uses' =>'PrincipalController@getProductos']);
Route::get('contacto', ['as' => 'home', 'uses' =>'PrincipalController@getContacto']);
Route::post('contacto', ['as' => 'home', 'uses' =>'PrincipalController@postContacto']);
Route::post('suscribir', ['as' => 'home', 'uses' =>'PrincipalController@postSuscribir']);

Route::controller('sistema', 'SistemaController');
Route::controller('suscripciones', 'SuscripcionController');
Route::controller('producto', 'ProductosController');
Route::controller('frases', 'FraseController');