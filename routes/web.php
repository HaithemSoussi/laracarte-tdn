<?php
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::get('/contact', 'ContactsController@create')->name('contact_path');
Route::post('/contact', 'ContactsController@store')->name('contact_path');
