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
=======

<<<<<<< HEAD

Route::group(['middleware'=>'auth'], function(){

Route::get('/table','TableController@index');

//CREATE DATA PROPASSIVE
Route::get('/table/createPro','TableController@createPro');
Route::post('/table','TableController@storePro');

});

=======
>>>>>>> 3666ed36a4320c73a6450b2a636432ccdeee89d1
>>>>>>> 02e76a1991c689d0f037fdf24097905a66b73703
