<?php

Route::get('/','AboutController@index');
Route::get('/login', 'AuthController@getLogin');
Route::post('/login','AuthController@postLogin');
?>
