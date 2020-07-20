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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/','pageController@index');
Route::get('/about','pageController@about');
Route::get('/services','pageController@services');
Route::get('/causes','pageController@causes');
Route::get('/contact','pageController@contact');
Route::get('/donate','pageController@donate');
Route::get('/blog','pageController@blog');
Route::get('/single-blog','pageController@singleBlog');
//Route::get('/appreciate','pageController@appreciate');
//Donation save
Route::post('/donateReq','legal@store')->name('donates');
Route::post('/per','individuals@store')->name('individuals');
//Admin dashboard

Route::get('/dash','dashboard@index');
Route::resource('/personal','individuals');
Route::resource('/legal','legal');
Route::get('/manageArticles','dashboardPages@manageArticles');
Route::resource('/addArticles','blog');
Route::post('/ckEditor','dashboardPages@uploads')->name('uploads');
//save articles
Route::post('/ars','blog@store');
