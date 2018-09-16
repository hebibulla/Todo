<?php

// Route::get('/','AboutController@index')->before('auth');
// Route::get('/', array('before' => 'auth', 'uses' => 'AboutController@index'));

// Route::get('/login1', 'Auth1Controller@getLogin');
// Route::post('login1','Auth1Controller@postLogin');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/post','HomeController@postIndex');
?>