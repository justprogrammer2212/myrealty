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

Route::get('/', 'PageController@homePage')->name('indexPage');
Route::get('/offers', 'PageController@offersPage')->name('offersPage');
Route::get('/about', 'PageController@aboutPage')->name('aboutPage');
Route::get('/contact', 'PageController@contactPage')->name('contactPage');

Route::get('/offers', 'OffersController@offers')->name('offersPage');
Route::get('/', 'OffersController@recent_offers')->name('indexPage');
//Route::get('/', 'OffersController@popular_offers')->name('indexPage');
Route::get('/offer/{show}', 'OffersController@offer_show')->name('showOffer');
