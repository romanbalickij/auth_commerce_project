<?php

        /**HomeController*/
Route::group(['namespace' => 'Commerce'], function (){
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/product/{slug}' , 'HomeController@show')->name('show.product');

         /**ShopController**/
    Route::get('/shop', 'ShopController@index')->name('shop.index');
    Route::post('/shop', 'ShopController@index')->name('shop.sort');
    Route::get('/search', 'ShopController@search')->name('search');
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
    Route::post('/checkout','CheckoutController@store')->name('checkout.store');

      /**AuthController**/
    Route::get('/register', 'AuthController@registerForm')->name('register.form');
    Route::post('/register', 'AuthController@register')->name('register');
    Route::get('/verify/{token}', 'AuthController@verification')->name('register.verification');
    Route::get('/login', 'AuthController@loginForm')->name('login.form');
    Route::post('/login', 'AuthController@login')->name('login');
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/verify', 'AuthController@notifications')->name('verify.message');

      /**ProfileController**/
    Route::middleware('auth')->group( function (){
        Route::get('/account', 'ProfileController@index')->name('account.index');
    });

     /**SocialiteController*/
    Route::get('login/github', 'SocialiteController@redirectToProvider');
    Route::get('login/github/callback', 'SocialiteController@handleProviderCallback');

    Route::get('lang/{locale}', 'LocalizationController@index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
