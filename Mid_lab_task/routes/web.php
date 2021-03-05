<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/register', function () {
//     return view('register.index');
// });

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index');
Route::get('/admin', 'HomeController@adminIndex')->name('home.adminIndex');
Route::get('/customerIndex', 'HomeController@customerIndex')->name('home.customerIndex');
Route::get('/adminIndex', 'HomeController@accountantIndex')->name('home.accountantIndex');
Route::get('/customerIndex', 'HomeController@partnerIndex')->name('home.partnerIndex');
Route::get('/adminIndex', 'HomeController@salesIndex')->name('home.salesIndex');
Route::get('/customerIndex', 'HomeController@vendorIndex')->name('home.vendorIndex');

Route::post('/register', 'RegistrationController@store');
Route::get('/register', 'RegistrationController@index');

Route::get('system/sales', 'SystemController@sellCount')->name('system.sales');

Route::get('system/sales/physical_store', 'SystemController@physical_index')->name('system.physical_store');
Route::post('system/sales/physical_store', 'SystemController@store');

Route::get('system/sales/social_media', 'SystemController@social_index');
Route::get('system/sales/ecommerce', 'SystemController@ecommerce_index');

Route::get('system/product_management', 'SystemController@product_index');
Route::get('system/product_management/available_products', 'SystemController@available_product_index')->name('system.available_products');

Route::get('system/product_management/available_products/edit/{id}', 'SystemController@product_edit')->name('product.edit');
Route::post('system/product_management/available_products/edit/{id}', 'SystemController@product_update')->name('product.update');

Route::get('system/product_management/available_products/delete/{id}', 'SystemController@product_delete')->name('product.delete');
Route::post('system/product_management/available_products/delete/{id}', 'SystemController@product_destroy')->name('product.destroy');

Route::get('system/product_management/upcomming_products', 'SystemController@upcomming_product_index')->name('system.upcomming_products');

Route::get('system/product_management/add_products', 'SystemController@add_product_index')->name('system.add_product_index');
Route::post('system/product_management/add_products', 'SystemController@store_product')->name('system.store_product');