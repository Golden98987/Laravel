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

Route::get('/allusers',['as' => 'users.all', 'uses' => 'SiteController@getall']);

Route::post('/validate',['as' => 'users.all', 'uses' =>'SiteController@validateusers']);

Route::get('/login',['as' => 'users.login', 'uses' => 'UsersController@login']);

Route::get('/register',['as' => 'kala.category', 'uses' => 'UsersController@register']);

Route::get('/showusers',['as' => 'users.showusers', 'uses' => 'SiteController@getall']);

Route::get('/showusers/{id}',['as' => 'users.update', 'uses' => 'SiteController@update']);

// Route::get('/update/{id}',['as' => 'users.update', 'uses' => 'SiteController@updateusers']);

Route::get('/deleteusers/{id}',['as' => 'users.update', 'uses' => 'SiteController@delete']);

Route::get('/shopmobile',['as' => '/', 'uses' => 'KalaController@shopmobile']);

Route::get('/kalaexplanation',['as' => 'kala.shopmobile', 'uses' => 'KalaController@kalaexplanation']);

Route::get('/digitalkala',['as' => '/', 'uses' => 'KalaController@digitalkala']);

Route::get('/checkout-step1',['as' => '/', 'uses' => 'BasketController@checkoutstep1']);

Route::get('/checkout-step2',['as' => '/checkout-step1', 'uses' => 'BasketController@checkoutstep2']);

Route::get('/checkout-step3',['as' => '/checkout-step2', 'uses' => 'BasketController@checkoutstep3']);

Route::get('/checkout-step4',['as' => '/checkout-step3', 'uses' => 'BasketController@checkoutstep4']);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/products', 'Admin\ProductController');



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/users', 'Admin\UserController',['except'=>['show','create','store']]);

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('alluserdatatabels', 'UserController@alluserdatatabels')->name('users.alluserdatatabels');
    Route::resource('/users', 'UserController',['except'=>['show','create','store']]);
    //  Route::resource('/products', 'ProductController');


});

Route::get('/edit/{id}', 'Admin\ProductController@edit');
Route::post('/update/{id}', 'Admin\ProductController@update');
Route::get('/delete/{id}', 'Admin\ProductController@destroy');


