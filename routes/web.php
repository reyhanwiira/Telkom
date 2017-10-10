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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/table', function() {
	return view('table.index');
});

Route::get('/detail', function() {
	return view('detail');
});

Route::get('/detailTest', function() {
	return view('detailTest');
});

Route::get('/chart', function() {
	return view('chart');
});

Route::get('/form', function() {
	return view('form');
});

Route::get('/editProject', function() {
	return view('editProject');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){

Route::get('/table','TableController@index');

//CREATE DATA PROPASSIVE
Route::get('/table/createPro','TableController@createPro');
Route::post('/table','TableController@storePro');

<<<<<<< HEAD
=======

//CREATE DATA RAISA
Route::get('/table/createRaisa','TableController@createRaisa');
Route::post('/table','TableController@storeRaisa');


//CREATE DATA SCN
Route::get('/table/createScn','TableController@createScn');
Route::post('/table','TableController@storeScn');


//CREATE DATA Other
Route::get('/table/createOther','TableController@createOther');
Route::post('/table','TableController@storeOther');


>>>>>>> 83d6f9e479f42fcfd1bc82845a7015cd0ba0ae53
});
