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
Route::get('/','pageController@index');
Route::get('/about','pageController@about');
Route::get('/services','pageController@services');
Route::get('/causes','pageController@causes');
Route::get('/contact','pageController@contact');
Route::post('/contactus','pageController@contactPost');
Route::get('/donate','pageController@donate');
Route::resource('/blog','blogContentsController');
Route::get('/single.{id}','blogContentsController@show');
Route::post('/leaveComments.{id}','blogContentsController@create');

//Route::get('/appreciate','pageController@appreciate');
//Donation save
Route::post('/donateReq','legal@store')->name('donates');
Route::post('/per','individuals@store')->name('individuals');
//Admin dashboard

Route::get('/dash','dashboard@index');
Route::resource('/personal','individuals');
Route::resource('/legal','legal');
Route::get('/manageArticles','dashboardPages@manageArticles');
Route::get('/pubStatus.{id}','dashboardPages@pubStatuses');
Route::get('/show.{id}','dashboardPages@show');
Route::get('/pr.{id}','dashboardPages@preview');
Route::get('/usersPage','dashboardPages@users')->name('user');

Route::post('/ckEditorEdit','dashboardPages@uploading');
Route::post('/edit.{id}','dashboardPages@edit');
Route::get('/removeArt.{id}','dashboardPages@delete');
Route::get('/removeUser.{id}','dashboardPages@removeUser');

Route::resource('/addArticles','blog');
Route::post('/ckEditors','blog@uploads')->name('ckeditor.upload');

//Stripe routes

Route::get('/stripe','legal@stripe');
Route::post('/stripePost','legal@stripePost')->name('stripe.post');

//login routes

// Route::get('/loginTrue','PageController@showLogin');
// Route::post('/checkLogin','PageController@doLogin');

//save articles
Route::post('/ars','blog@store');

Auth::routes();

Route::get('/dash', 'Dashboard@index');
