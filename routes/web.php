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

Route::get('/wp-admin', 'AdminController@index')->name('indexAdmin')->middleware('checkAdmin');

Route::get('/', 'PageController@homePage')->name('indexPage');
Route::get('/offers', 'PageController@offersPage')->name('offersPage');
Route::get('/about', 'PageController@aboutPage')->name('aboutPage');
Route::get('/contact', 'PageController@contactPage')->name('contactPage');
Route::get('/search', 'OffersController@search')->name('search');

Route::get('/offers', 'OffersController@offers')->name('offersPage');

Route::get('/offers/category/{id}', 'OffersController@offersCategories')->name('offersCategory');

Route::get('/', 'OffersController@homePage_offers')->name('indexPage');
Route::get('/offer/{show}', 'OffersController@offer_show')->name('showOffer');
Route::post('/offer/add','OffersController@addOffer')->name('addOffer');


Route::get('/user/profile', 'UserProfileController@user')->name('user_profile');
Route::get('/user/profile/add', 'UserProfileController@userAdd')->name('user_profile_add');

Route::get('/user/profile/edit/{user_id}', 'UserProfileController@userEdit')->name('user_profile_edit')->middleware('checkRole');

Route::get('/offer/edit/{offer}', 'OffersController@offerEdit')->name('offer_edit');
Route::post('/offer/update/{offer}', 'OffersController@offerUpdate')->name('offer_update');
Route::post('/user/profile/avatar_u[load/{user}', 'AvatarController@uploadAvatar')->name('avatar_upload');
Route::post('/user/profile/update', 'UserProfileController@userUpdate')->name('user_profile_update');
Route::get('/user/offer-profile/delete/{user_id}', 'UserProfileController@userDelete')->name('user_profile_delete')->middleware('checkOffer');;

Route::get('/user/realtors/{offer_id}', 'RealtorController@listRealtors')->name('user_realtor_add');

Route::get('/user/realtors/{offer_id}/{realtor_id}', 'RealtorController@selectRealtor')->name('user_realtor_select');

Route::post('/user/realtors/{offer_id}/release', 'RealtorController@releaseRealtor')->name('user_realtor_release');


Auth::routes();
