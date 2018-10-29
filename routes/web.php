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
Route::get('/', 'HeroController@home');
Route::get('/homepage', 'HeroController@home');
Route::get('/hero/{hero_slug}', 'HeroController@show');
Route::get('/hero', 'HeroController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/hero/{hero_slug}', 'HeroController@store');





