<?php

        /**HomeController*/
Route::group(['namespace' => 'Commerce'], function (){
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/product/{slug}' , 'HomeController@show')->name('show.product');

         /**ShopController**/
    Route::get('/shop', 'ShopController@index')->name('shop.index');
    Route::post('/shop', 'ShopController@index')->name('shop.sort');
    Route::get('/category/{slug}', 'ShopController@category')->name('shop.category');
    Route::get('/tag/{slug}', 'ShopController@tags')->name('shop.tag');

         /**CartController**/
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::post('/cart', 'CartController@store')->name('cart.store');
    Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
    Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

         /**CouponController*/
    Route::post('/coupon', 'CouponController@coupon')->name('coupon');
       /**CheckoutController**/
    Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
});