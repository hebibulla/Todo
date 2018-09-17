<?php

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/new', 'HomeController@getNew');
Route::post('/new', 'HomeController@postNew');

Route::get('/delete/{task}', 'HomeController@getDelete');
// Route::post('/post','HomeController@postIndex');

Route::post('/post','HomeController@postIndex');
?>