<?php

Route::get('/shops','ShopController@index')->name('shop.list');
Route::get('/shop/new','ShopController@create')->name('shop.new');
Route::post('/shop','ShopController@store')->name('shop.store');
Route::get('/shop/edit/{id}','ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}','ShopController@update')->name('shop.update');

Route::get('/shop/{id}','ShopController@show')->name('shop.detail');
Route::delete('/shop/{id}','ShopController@destroy')->name('shop.destroy');

Route::get('/',function(){
    return redirect('/shops');
});


Route::get('/plans','PlanController@index')->name('plan.list');
Route::get('/plan/new','PlanController@create')->name('plan.new');
Route::post('/plan', 'PlanController@store')->name('plan.store');
Route::get('/plan/edit/{id}','PlanController@edit')->name('plan.edit');
Route::post('/plan/update/{id}','PlanController@update')->name('plan.update');

Route::get('/plan/show/{id}','PlanController@show')->name('plan.show');
Route::delete('/plan/{id}','PlanController@destroy')->name('plan.delete');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');
