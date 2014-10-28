<?php


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('articles', 'ArticleController@index');

Route::resource('article', 'ArticleController');
Route::resource('author', 'AuthorController');