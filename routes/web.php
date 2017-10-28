<?php


//Home
Route::get('', 'Home\HomeController@index')->name('home');

Route::prefix('produtos')->group(function(){
	Route::get('', 'Products\ProductsController@index')->name('products.index');
});