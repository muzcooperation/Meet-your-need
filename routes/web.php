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


//frontend routes
Route::prefix('frontend')->namespace('frontend')->group(function () {

    Route::get('map', function () {
        return view('frontend.map');
    });

    Route::get('home', function () {
        $data = [
            'https://www.worldatlas.com/r/w728-h425-c728x425/upload/10/d6/61/harvard-university.jpg',
            'https://cdn.mtlblog.com/uploads/288462_c6e337d8cf4b1b64f3a5635ae02a23f8a7fb3521.jpg_facebook.jpg',
            'http://images.indianexpress.com/2016/10/stanford_university-759.jpg'
        ];

        return view('frontend.home')->with('data', $data);
    });

    Route::post('location-detail', 'LocationController@detail');

});
