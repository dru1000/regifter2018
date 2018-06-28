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

Route::get('/', 'HomeController@index');

Route::get('/buy-gift-cards', 'RetailerController@index')->name('buy');

Route::get('/buy-gift-cards/{url?}', 'GiftCardController@index');

Route::get('/buy-gift-cards/id/{id}', 'GiftCardController@show');

Route::get('/sell-gift-cards', 'RetailerController@index')->name('sell');

Route::get('/sell-gift-cards/{retailer_url}', 'SellController@create');

Route::post('/gift-cards', 'SellController@store');
