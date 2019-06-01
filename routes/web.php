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

Route::post('/register', 'RegisterController@register');
Route::post('/login', 'LoginController@login');

// FOR Company 
Route::get('/company', 'CompanyController@index');
Route::post('/show_event', 'CompanyController@show_event');
Route::post('/create_event', 'CompanyController@create_event');
Route::post('/update_event', 'CompanyController@update_event');
Route::post('/delete_event', 'CompanyController@delete_event');

// FOR User 
Route::get('/', 'UserController@index');
Route::post('/update_user_info', 'UserController@update_user_info');
Route::post('/book_event', 'UserController@book_event');
Route::post('/cancel_event', 'UserController@cancel_event');
Route::post('/review_event', 'UserController@review_event');
Route::post('/review_company', 'UserController@review_company');



































// Route::group(['middleware'=>'unlogged'],function(){
    //all pages
//     Route::get('/home', function(){
//         return view('home');
//     }); 
//     Route::resource('controlpanel', 'ControlPanelController')->middleware('admin');
//     Route::resource('users', 'UserController'); // middleware inside users controller
//     Route::post('users/{id}/upgrade', 'UserController@upgrade');
//     Route::post('users/{id}/ban', 'UserController@ban');

//     Route::resource('categories', 'CategoryController')->middleware('admin');
//     Route::resource('AllCategories', 'AllCategoriesController');

//     Route::resource('ads','AdController');
//     Route::get('/MyAds', 'AdController@MyAds');
//     Route::get('/PublishedAds', 'AdController@PublishedAds')->middleware('admin');;
//     Route::get('/Search', 'AdController@Search');

//     Route::resource('PendingAds', 'PendingAdsController')->middleware('admin');
//     Route::resource('FavoriteAds', 'FavoriteAdController');
//     Route::resource('CreateMessage', 'CreateMessageController');
//     Route::resource('inbox', 'InboxController');
//     Route::resource('outbox', 'OutboxController');
//     Route::resource('settings', 'SettingsController');
// });


// Route::group(['middleware'=>'loggedin'],function(){
//     //login and registeration pages
//     Route::resource('/register', 'RegisterController'); 
//     Route::resource('/login', 'LoginController'); 
// });


// Route::get('logout', 'LoginController@destroy');



