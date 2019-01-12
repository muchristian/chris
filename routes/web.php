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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/site', 'HomeController@siteIndex')->name('site.index');
Route::get('/site/create', 'HomeController@siteAdd')->name('site.create');
Route::post('/site/create', 'HomeController@siteStore')->name('site.store');
Route::get('/outputted', 'HomeController@outIndex')->name('outItem');
Route::post('/outputted', 'HomeController@outStore')->name('storeOut');
Route::get('/home/inputItem', 'HomeController@inputAdd')->name('inputItem');
Route::post('/home/inputItem', 'HomeController@inputStore')->name('storeItem');
