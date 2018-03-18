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
    return view('welcome');
});

Auth::routes();

//HomeController
Route::get('/dashboard', 'HomeController@index')->middleware('auth')->name('dashboard');

//AdController
Route::get('/ads', 'AdController@index')->middleware('auth')->name('ad.index');
Route::get('/ad/{slug}', 'AdController@show')->middleware('auth')->name('ad.show');

//RecruiterController
Route::get('/my-ads', 'RecruiterController@ads')->middleware('auth')->name('recruiter.ads');


Route::get('/profiles/{username}', function() {
	return \App\User::find(1);
});


Route::get('/bootstrap', function() {
	return view('bootstrap-template');
});