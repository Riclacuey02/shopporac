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

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::get('/dashboard', 'UsersController@dashboard')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'listable'], function() {
    Route::get('{title}', 'ListingController@show')->name('listing.show');
});
Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'my-list'], function() {
    	Route::get('/', 'ListingController@index')->name('listing.index');
    	Route::get('/add-listing', 'ListingController@create')->name('listing.create');
    	Route::post('/store', 'ListingController@store')->name('listing.store');
    });
});

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'my-profile'], function() {
		Route::get('/', 'UsersController@profile')->name('profile');
    	Route::get('{user}/edit', 'UsersController@edit')->name('user.edit');
        Route::post('/store', 'UsersController@store')->name('user.store');
        Route::put('{user}/update', 'UsersController@update')->name('user.update');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
