<?php

Auth::routes();

Route::get('/', function () {
	return view('auth.login');
});


//Admin
Route::prefix('admin')->group(function(){
	Route::group(['middleware' => ['auth']], function () {
		Route::get('/home', 'Home\HomeController@index')->name('home');
		Route::prefix('produtos')->group(function(){
			Route::get('', 'Products\ProductsController@index')->name('products.index');
		});
	});
});
