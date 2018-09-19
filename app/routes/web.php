<?php

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

Route::get('/new', 'HomeController@getNew');
Route::post('/new', 'HomeController@postNew');

Route::get('/delete/{task}', 'HomeController@getDelete');
Route::get('/resultdDelete/{task}', 'HomeController@resultDelete');

Route::post('/post','HomeController@postIndex');

Route::get('/search', 'HomeController@goSearch');
Route::post('/search', 'HomeController@searchIndex');

Route::get('/result', 'HomeController@resultIndex');
Route::get('resultDelete','HomeController@deleteComplete')
?>