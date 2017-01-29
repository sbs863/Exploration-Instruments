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

Route::get('/', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/about', 'pagesController@getAbout')->name('pages.about');
Route::get('/equipment', 'pagesController@getEquipment')->name('pages.equipment');
Route::get('/news', 'pagesController@getNews')->name('pages.news');
Route::get('/contact', 'pagesController@getContact')->name('pages.contact');
Route::get('/newCustomer', 'pagesController@getNewCustomer')->name('pages.newCustomer');
Route::get('/portal', 'pagesController@getPortal')->name('pages.portal');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

?>
