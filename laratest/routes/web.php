<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login.index');
});
Route::get('/logout', function () {
    return view('login.index');
});

Route::get('/home', function () {
    return view('home.index');
});
Route::get('/create', function () {
    return view('home.index');
});
Route::get('/home/userlist', function () {
    return view('home.list');
});


