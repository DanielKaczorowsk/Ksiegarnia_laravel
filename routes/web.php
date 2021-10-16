<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/','Wyswietlanie@index')->name('index');
Auth::routes();
Route::get('/lista','Wyswietlanie@Lista_ksiazek')->name('lista');
Route::get('/szukanie','Wyswietlanie@szukanie')->name('szukanie');
Route::get('/filter_gatunek','Wyswietlanie@filter_gatunek');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
