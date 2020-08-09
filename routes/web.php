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

Route::post('cart', 'CartController@add')->name('cart.add');
Route::get('cart', 'CartController@index')->name('cart.index');
Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

Route::post('orders', 'OrdersController@store')->name('orders.store');
Route::get('orders', 'OrdersController@index')->name('orders.index');
Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');


Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
//支付宝支付
Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
//微信支付
Route::get('payment/{order}/wechat', 'PaymentController@payByWechat')->name('payment.wechat');
Route::post('payment/wechat/notify', 'PaymentController@wechatNotify')->name('payment.wechat.notify');

Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');
//评价
Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');

Route::post('orders/{order}/apply_refund', 'OrdersController@applyRefund')->name('orders.apply_refund');