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

Route::get('/index',function(){

	return view('dashboard.pages.index');
});


Route::resource('catagory' , 'catagoryController')->middleware('auth');;
Route::resource('product' , 'productController')->middleware('auth');;
Route::resource('user' , 'usersController')->middleware('auth');;
Auth::routes();
   Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');

