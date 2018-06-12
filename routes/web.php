<?php
Route::view('/', 'index');
Route::view('/register', 'register');
Route::get('/book', 'BookController@index');
Route::get('/tag', 'TagController@index');
Route::get('/register/book', 'BookController@register');
Route::post('/register/book', 'BookController@store');
Route::get('/register/tag', 'TagController@register');
Route::post('/register/tag', 'TagController@store');
Route::get('/admin', 'AdminController@index');
Route::resource('/admin/book', 'AdminbookController');
Route::resource('/admin/tag', 'AdmintagController');
Auth::routes();