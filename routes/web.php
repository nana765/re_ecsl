<?php

Route::view('/', 'index');
Route::view('/register', 'register');

Route::resource('/register/book', 'BookController', ['only' => [
    'create', 'store'
]]);

Route::resource('/register/tag', 'TagController', ['only' => [
    'create', 'store'
]]);

Route::resource('/admin/book', 'BookController', ['only' => [
    'index', 'show', 'delete'
]]);
Route::patch('admin/book/admit/{id}', 'BookController@admit');

Route::resource('/admin/tag', 'TagController', ['only' => [
    'index', 'show', 'delete'
]]);
Route::patch('admin/tag/admit/{id}', 'TagController@admit');