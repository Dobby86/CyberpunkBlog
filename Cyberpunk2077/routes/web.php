<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
}) -> name("/");

Route::get('/maps', function () {
    return view('maps');
}) -> name("maps");

Route::get('/history', function () {
    return view('history');
}) -> name("history");

Route::get('/character', 'CyberController@index') -> name("character");

Route::get('/createx', 'CyberController@createx') -> name("createx");
Route::get('/{id}', 'CyberController@show') -> name("show");


Route::get('/edit/{id}', 'CyberController@editor') -> name("edit");

Route::get('item/delete/{id}', 'CyberController@destroy') -> name("destroy");

Route::post('/store', 'CyberController@store') -> name("store");

Route::post('/update/{id}', 'CyberController@update') -> name("update");






