<?php

Route::get('/', function () {

    return view('welcome');

});

Route::get('/', 'home@index');
Route::get('home/login', 'home@login');
Route::post('home/login', 'home@login');
Route::get('/dashboard', 'home@dashboard');
Route::get('home/logout', 'home@logout');
Route::get('registartion', 'home@registartion');
Route::post('registartion', 'home@registartion');