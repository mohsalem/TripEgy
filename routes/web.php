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

    Route::get('/', 'UserController@index');
    Route::get('/home', 'UserController@index');

    Route::post('/register', 'RegisterController@register')->middleware('loggedin');
    Route::post('/login', 'LoginController@login')->middleware('loggedin');
    Route::get('/logout', 'LoginController@destroy');
    
    // FOR Company 
    Route::get('/company', 'CompanyController@index')->middleware('company');
    Route::get('/homeofcompany', 'CompanyController@home_page_for_company')->middleware('company');

    Route::post('/get_all_event', 'CompanyController@get_all_event')->middleware('company');
    
    Route::get('/creat_event_page', 'CompanyController@creat_event_page')->middleware('company');
    Route::post('/create_event', 'CompanyController@create_event')->middleware('company');
   
    Route::get('/update_event_page', 'CompanyController@update_event_page')->middleware('company');
    Route::post('/update_event', 'CompanyController@update_event')->middleware('company');
   
    Route::post('/delete_event', 'CompanyController@delete_event')->middleware('company');
    
    // FOR User 
    Route::get('/', 'UserController@index');
    Route::get('/home', 'UserController@index');
   
    Route::get('/profile', 'UserController@profile_user_page')->middleware('user');

    Route::post('/update_user_info', 'UserController@update_user_info')->middleware('user');
    Route::post('/book_event', 'UserController@book_event')->middleware('user');
    Route::post('/cancel_event', 'UserController@cancel_event')->middleware('user');
    Route::post('/review_event', 'UserController@review_event')->middleware('user');
    Route::post('/review_company', 'UserController@review_company')->middleware('user');


    Route::get('/allevent_page', 'CompanyController@allevent_page');
    Route::get('/search_event_page', 'UserController@search_event_page');



});
































