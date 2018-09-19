<?php

Auth::routes();

//一覧表示のルーティング
Route::get('/', 'HomeController@index')->name('home');
//追加機能
Route::get('/new', 'HomeController@getNew');
Route::post('/new', 'HomeController@postNew');
//削除機能
Route::get('/delete/{task}', 'HomeController@getDelete');
Route::get('/resultdDelete/{task}', 'HomeController@resultDelete');

//詳細ページルーティング
Route::get('/post/{state}','HomeController@postIndex');

//状態変更機能
Route::get('/check/{state}','HomeController@checkIndex');
Route::get('/uncheck/{state}','HomeController@uncheckIndex');

//検索機能
Route::get('/search', 'HomeController@goSearch');
Route::post('/search', 'HomeController@searchIndex');
//検索結果
Route::get('/result', 'HomeController@resultIndex');
Route::get('/resultDelete','HomeController@deleteComplete')
?>