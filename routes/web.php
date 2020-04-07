<?php

Route::get('/shops','ShopController@index')->name('shop.list');
Route::get('/shop/new','ShopController@create')->name('shop.new');
Route::post('/shop','Shopcontroller@store')->name('shop.store');
Route::get('/shop/edit/{id}','ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}','ShopController@update')->name('shop.update');

Route::get('/shop/{id}','ShopController@show')->name('shop.detail');

Route::get('/',function(){
    return redirect('/shops');
});
