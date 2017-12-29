<?php

Auth::routes();

Route::get('/', function () {
  return view('auth.login');
});


//Admin
Route::prefix('admin')->group(function(){
  Route::group(['middleware' => ['auth']], function () {

    //Home / table
    Route::get('/home', 'TableClient\TableClientController@index')->name('home');

    //Table
    Route::prefix('table')->group(function(){
      Route::post('store', 'TableClient\TableClientController@store')->name('table.store');
    });

    //Categories
    Route::prefix('categories')->group(function(){
      Route::get('', 'Category\CategoryController@index')->name('category.index');
      Route::get('category/{id}/{slug}', 'Category\CategoryController@show')->name('category.show');
    });

    //Products
    Route::prefix('products')->group(function(){
      Route::get('', 'Products\ProductsController@index')->name('products.index');
      Route::get('show/{id}/{slug}', 'Products\ProductsController@show')->name('products.show');
      Route::post('store', 'Products\ProductsController@store')->name('products.store');
    });


    //Orders
    Route::prefix('order')->group(function(){
      Route::get('', 'Order\OrderController@show')->name('order.show');
      Route::get('checkout', 'Order\OrderController@checkout')->name('order.checkout');
      Route::get('destroy', 'Order\OrderController@destroy')->name('order.destroy');

      //OrderItem
      Route::prefix('item')->group(function(){
        Route::put('update', 'Order\OrderItemController@update')->name('itemUpdate');
        Route::get('destroy/{id}', 'Order\OrderItemController@destroy')->name('itemDestroy');
      });

    });


  });
});
