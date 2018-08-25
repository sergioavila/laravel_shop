<?php


Route::get('/', function () {
    return view('home');
});

Route::get('products', 'ProductController@list');
Route::post('add-product', 'ProductController@store');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
