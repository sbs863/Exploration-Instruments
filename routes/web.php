<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
if (App::environment('production')) {
    URL::forceSchema('https');
};




Route::get('/login', function () {
        return view('pages.login');
    });
Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', function () {
        return view('home');
    });


    Route::get('/about', 'pagesController@getAbout')->name('pages.about');
    Route::get('/rentals', 'pagesController@getRentals')->name('pages.rentals');
    Route::get('/news', 'pagesController@getNews')->name('pages.news');

    Route::get('/contact', 'contactController@create')->name('pages.contact');


    Route::post('/contact_store', 'contactController@store')->name('pages.contact');



    Route::get('/newCustomer', 'pagesController@getNewCustomer')->name('pages.newCustomer');
    Route::get('/portal', 'pagesController@getPortal')->name('pages.portal');


    Route::get('/home', 'HomeController@index')->name('home');




});

?>
