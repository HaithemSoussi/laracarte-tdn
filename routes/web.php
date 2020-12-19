<?php

use App\Mail\ContactMessageCreated;

Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'ContactsController@create')->name('contact.create');

Route::post('/contact', 'ContactsController@store')->name('contact.store');

Route::get('/test-email', function () {
    return new ContactMessageCreated('Haithem Soussi', 'haithem.soussi@gmail.com', 'je suis la');
});
