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

Route::group(['namespace' => 'WEB'], function () {

    Route::post('/register', 'RegisterController@register')->middleware('loggedin');
    Route::post('/login', 'LoginController@login')->middleware('loggedin');
    Route::get('/logout', 'LoginController@destroy');
    
    // FOR Company 
    Route::get('/company', 'CompanyController@index');
    Route::get('/homeofcompany', 'CompanyController@home_page_for_company');

    Route::post('/get_all_event', 'CompanyController@get_all_event');
    
    Route::get('/creat_event_page', 'CompanyController@creat_event_page');
    Route::post('/create_event', 'CompanyController@create_event');
   
    Route::get('/update_event_page', 'CompanyController@update_event_page');
    Route::post('/update_event', 'CompanyController@update_event');
   
    Route::post('/delete_event', 'CompanyController@delete_event');
    
    // FOR User 
    Route::get('/', 'UserController@index');
    Route::get('/home', 'UserController@index');
   
    Route::get('/home', 'UserController@home_page_for_user');

    Route::post('/update_user_info', 'UserController@update_user_info');
    Route::post('/book_event', 'UserController@book_event');
    Route::post('/cancel_event', 'UserController@cancel_event');
    Route::post('/review_event', 'UserController@review_event');
    Route::post('/review_company', 'UserController@review_company');

    Route::get('/allevent_page', 'CompanyController@allevent_page');
    Route::get('/search_event_page', 'UserController@search_event_page');



});
































