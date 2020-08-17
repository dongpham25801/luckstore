<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => '/admin'],function (){
    Route::get('/','AdminController@index')->middleware('auth');

    Route::resource('/categories','CrudCateController')->middleware('auth');

    Route::resource('/product-type','CrudProductTypeController')->middleware('auth');

    Route::resource('/products','CrudProductController')->middleware('auth');

    Route::resource('/members','CrudMemController')->middleware('auth');

    Route::resource('/brands','CrudBrandController')->middleware('auth');
});


Route::group(['prefix' => '/'],function (){
    Route::resource('/','Client\HomeController');

    Route::group(['prefix' => '/categories'],function(){
        Route::get('/{slug}/','Client\MenuController@menuNam')->name('menunam');
    });

    Route::get('/{slug}/{a}','Client\MenuController@productDetail')->name('productdetail');

    Route::get('/shopping-cart','Client\CartController@index')->name('cart');

    Route::get('shopping-cart/add-cart/{id}','Client\CartController@addCart')->name('addCart');

    Route::get('shopping-cart/del-item/{id}','Client\CartController@delItem')->name('delItem');

    Route::get('shopping-cart/del/{id}','Client\CartController@delCart')->name('delCart');

    Route::get('shopping-cart/save/{id}/{qty}','Client\CartController@saveCart')->name('saveCart');

    Route::get('new-arrival','Client\MenuController@newArrival');

    Route::get('/check-out','Client\CheckoutController@index');
//        Route::resource('/checkout','Client\ProductController');
//        Route::resource('/profile','Client\AccountController');
});
