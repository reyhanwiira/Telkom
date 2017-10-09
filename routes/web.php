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

Route::get('/chart', function() {
	return view('chart');
});

Route::get('/form', function() {
	return view('form');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){

<<<<<<< HEAD
Route::get('/table','TableController@read');
=======
Route::get('/table','TableController@index');
>>>>>>> fd17df7685b9e5896899db470cd1c855350c4904


});
