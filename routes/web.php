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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::group(['middleware'=>'auth'], function(){

=======
<<<<<<< HEAD
=======

Route::group(['middleware'=>'auth'], function(){

Route::get('/table','TableController@index');


>>>>>>> 52b202c186503196360f6c98c2b197cdfd4b3bad
});

>>>>>>> a71bd56e11b009abd956ddeeb063246902ea78f8
