<?php

Route::get('/', 'PagesController@root')->name('root');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
Route::redirect('/', '/products')->name('root');
//商品列表显示
Route::get('products', 'ProductsController@index')->name('products.index');

//收藏
Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
//商品列表页
Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

//商品详情显示
Route::get('products/{product}', 'ProductsController@show')->name('products.show');