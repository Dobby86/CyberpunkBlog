<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
}) -> name("/");

Route::get('/maps', function () {
    return view('maps');
}) -> name("maps");

Route::get('/history', function () {
    return view('history');
}) -> name("history");
Route::get('/login', function () {
    return view('login');
}) -> name("login");
Route::get('/register', function () {
    return view('register');
}) -> name("register");
Route::get('/home', function () {
    return view('home');
}) -> name("home");

Route::get('/character', 'CyberController@index') -> name("character");

Route::get('/createx', 'CyberController@createx') -> name("createx");
Route::get('/{id}', 'CyberController@show') -> name("show");


Route::get('/edit/{id}', 'CyberController@editor') -> name("edit");

Route::get('item/delete/{id}', 'CyberController@destroy') -> name("destroy");

Route::post('/store', 'CyberController@store') -> name("store");

Route::post('/update/{id}', 'CyberController@update') -> name("update");




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//scelta immagine profilo
Route::get('item/scegli', 'ProfileController@scegli')->name('scegli');
Route::post('item/aggiornaFoto', 'ProfileController@aggiornaFoto')->name('aggiornaFoto');