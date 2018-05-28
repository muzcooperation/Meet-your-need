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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('map', function () {
    return view('frontend.map');
});

Route::post('location-detail', 'Frontend\LocationController@detail');	

//admin routes
Route::name('admin.')->prefix('admin')->namespace('admin')->middleware('auth')->group(function () {

    Route::get('home', function () {
        return view('admin.home');
    })->name('home');
    Route::get('test', function () {
        return view('admin.test');
    })->name('test');

    //restaurants
    Route::resource('restaurants', 'RestaurantController');


});
