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
