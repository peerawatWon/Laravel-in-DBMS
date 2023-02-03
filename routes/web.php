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
    return view('firstPage');
});


Route::get('firstPage','FirstPageController@index');

Route::get('community/index','CommunityController@index');
Route::get('community/search','CommunityController@search');
Route::get('community/create','CommunityController@create');
Route::get('community/save','CommunityController@save');
Route::get('community/update','CommunityController@update');
Route::get('community/edit/{id}','CommunityController@edit');
Route::get('community/delete/{id}','CommunityController@delete');

Route::get('habitat/index','HabitatController@index');
Route::get('habitat/search','HabitatController@search');
Route::get('habitat/create','HabitatController@create');
Route::get('habitat/save','HabitatController@save');
Route::get('habitat/update','HabitatController@update');
Route::get('habitat/edit/{id}','HabitatController@edit');
Route::get('habitat/delete/{id}','HabitatController@delete');

Route::get('listhabitat/index','ListHabitatController@index');
Route::get('listhabitat/search','ListHabitatController@search');
Route::get('listhabitat/create','ListHabitatController@create');
Route::get('listhabitat/save','ListHabitatController@save');
Route::get('listhabitat/update','ListHabitatController@update');
Route::get('listhabitat/edit/{id}','ListHabitatController@edit');
Route::get('listhabitat/delete/{id}','ListHabitatController@delete');

Route::get('summary/index','SummaryController@index');