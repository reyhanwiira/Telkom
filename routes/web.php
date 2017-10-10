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

Route::get('/editProject', function() {
	return view('editProject');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){

Route::get('/table','TableController@index');

//CREATE DATA PROACTIVE
Route::get('/table/createPro','TableController@createPro');
Route::post('/table','TableController@storePro');

//EDIT DAN UPDATE DATA PROACTIVE
Route::get('/table/{id}/editPro','TableController@editPro');
Route::put('/table/{id}','TableController@updatePro');



//CREATE DATA RAISA
Route::get('/table/createRaisa','TableController@createRaisa');
Route::post('/table','TableController@storeRaisa');

//EDIT DAN UPDATE DATA RAISA
Route::get('/table/{id}/editRaisa','TableController@editRaisa');
Route::put('/table/{id}','TableController@updateRaisa');


//CREATE DATA SCN
Route::get('/table/createScn','TableController@createScn');
Route::post('/table','TableController@storeScn');

//EDIT DAN UPDATE DATA SCN
Route::get('/table/{id}/editScn','TableController@editScn');
Route::put('/table/{id}','TableController@updateScn');


//CREATE DATA Other
Route::get('/table/createOther','TableController@createOther');
Route::post('/table','TableController@storeOther');

//EDIT DAN UPDATE DATA OTHER
Route::get('/table/{id}/editOther','TableController@editOther');
Route::put('/table/{id}','TableController@updateOther');

});
