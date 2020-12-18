<?php
Route::get('/', 'PagesController@home')->name('root_path');
Route::get('/about', 'PagesController@about')->name('about_path');
Route::get('/contact', 'ContactsController@create')->name('contact_path');
