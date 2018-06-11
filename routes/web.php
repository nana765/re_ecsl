<?php

Route::view('/', 'index');
Route::view('/register', 'register');

Route::get('/book', 'BookController@index');
Route::get('/tag', 'TagController@index');
Route::get('/register/book', 'BookController@register');
Route::post('/register/book', 'BookController@store');

Route::get('/register/tag', 'TagController@register');
Route::post('/register/tag', 'TagController@store');

Route::resource('/admin/book', 'BookController', ['only' => [
    'index', 'show', 'delete'
]]);
Route::patch('admin/book/admit/{id}', 'BookController@admit');

Route::resource('/admin/tag', 'TagController', ['only' => [
    'index', 'show', 'delete'
]]);
Route::patch('admin/tag/admit/{id}', 'TagController@admit');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
