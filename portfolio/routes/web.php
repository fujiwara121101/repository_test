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



Route::get('/', 'HomeController@index')->name('top');
//profilesテーブル
Route::get('/profiles', 'ProfileController@index');
Route::get('/profiles/create', 'ProfileController@create');
//保存
Route::post('/profiles', 'ProfileController@store');
//ユーザー検索
Route::get('/profiles/search', 'ProfileController@search');
Route::get('/profiles/{profile}', 'ProfileController@show');
Route::post('/profiles/{profile}', 'LikeController@like');


//storesテーブル
Route::get('/stores', 'StoreController@index');
Route::get('/stores/create', 'StoreController@create');
Route::post('/stores', 'StoreController@store');
Route::get('/stores/{store}/edit', 'StoreController@edit');
Route::put('/stores/{store}', 'StoreController@update');
Route::get('/stores/{store}', 'StoreController@show');
Route::delete('/stores/{store}', 'StoreController@delete');

//Mannerテーブル
Route::get('/manners', 'MannerController@index');
Route::get('/manners/{manner}', 'MannerController@show');


Auth::routes();