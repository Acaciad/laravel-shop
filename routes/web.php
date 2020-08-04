<?php

Route::get('/', 'PagesController@root')->name('root');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
