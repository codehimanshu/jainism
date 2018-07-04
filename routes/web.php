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


// Current static routes
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/contact-us', 'ContactController@index')->name('contact');
Route::get('/about-us', 'WelcomeController@aboutDarshanmala')->name('aboutDarshanmala');
Route::get('/about-jainism', 'WelcomeController@aboutJainism')->name('aboutJainism');
Route::get('/gallery', 'WelcomeController@gallery')->name('gallery');

// Old routes for backend
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('country','CountryController');
Route::resource('city','CityController');