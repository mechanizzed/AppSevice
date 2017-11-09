<?php


//Tables client
Route::get('', 'Products\ProductsController@index')->name('table.index');

Route::prefix('produtos')->group(function(){
	Route::get('', 'Products\ProductsController@index')->name('products.index');
});