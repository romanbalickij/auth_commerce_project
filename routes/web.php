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

        /**HomeController*/
Route::group(['namespace' => 'Commerce'], function (){
   Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/product/{slug}' , 'HomeController@show')->name('show.product');

   /**ShopController**/
    Route::get('/shop', 'ShopController@index')->name('shop.index');
    Route::post('/shop', 'ShopController@index')->name('shop.sort');
    Route::get('/category/{slug}', 'ShopController@category')->name('shop.category');



});