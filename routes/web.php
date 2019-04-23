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

Route::get('/','WbsiteController@index');
Route::get('/universities','WbsiteController@universities');
Route::get('/articles','WbsiteController@articles');
Route::get('/article/{id}','WbsiteController@article');
Route::get('/aboutus','WbsiteController@aboutus');
Route::get('/contact','WbsiteController@contact');
Route::post('contact/data','WbsiteController@contactData');
Route::get('/university/{id}','WbsiteController@university');
Route::post('search-university','WbsiteController@searchUniversity');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function (){


Route::get('/admin','WbsiteController@admin');
Route::resource('universit','UniversityController');
Route::resource('articl','ArticlesController');
Route::resource('slider','SliderController');
Route::resource('setting','SettingController');
Route::resource('service','ServiceController');
Route::resource('language','LanguageController');
Route::resource('about','AboutController');
Route::resource('contactus','ContactController');
Route::resource('city','CityController');
Route::resource('news','NewsController');
Route::resource('time','TimeController');

});

