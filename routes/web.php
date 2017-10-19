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
	
Route::get('/', function () {
    return view('home');
});

//READ DATA PROACTIVE

Route::get('/tableProactive','ProactiveController@readPro');

//CREATE DATA PROACTIVE
Route::get('/tableProactive/createPro','ProactiveController@createPro');
Route::post('/tableProactive','ProactiveController@storePro');

//EDIT DAN UPDATE DATA PROACTIVE
Route::get('/tableProactive/{id}/editPro','ProactiveController@editPro');
Route::put('/tableProactive/{id}','ProactiveController@updatePro');

//DELETE DATA PROACTIVE
Route::get('deletePro/{id}','ProactiveController@deletePro');


//READ RAISA
Route::get('/tableRaisa','RaisaController@read');

//CREATE DATA RAISA
Route::get('/tableRaisa/create','RaisaController@create');
Route::post('/tableRaisa','RaisaController@store');

//EDIT DAN UPDATE DATA RAISA
Route::get('/tableRaisa/{id}/edit','RaisaController@edit');
Route::put('/tableRaisa/{id}','RaisaController@update');

//DELETE DATA RAISA
Route::get('deleteRaisa/{id}','RaisaController@delete');


//READ SCN
Route::get('/tableScn','ScnController@read');

//CREATE DATA SCN
Route::get('/tableScn/create','ScnController@create');
Route::post('/tableScn','ScnController@store');

//EDIT DAN UPDATE DATA SCN
Route::get('/tableScn/{id}/edit','ScnController@edit');
Route::put('/tableScn/{id}','ScnController@update');

//DELETE DATA RAISA
Route::get('deleteScn/{id}','ScnController@delete');




//READ SCN
Route::get('/tableOthers','OthersController@read');

//CREATE DATA Other
Route::get('/tableOthers/create','OthersController@create');
Route::post('/tableOthers','OthersController@store');

//EDIT DAN UPDATE DATA OTHER
Route::get('/tableOthers/{id}/edit','OthersController@edit');
Route::put('/tableOthers/{id}','OthersController@update');

//DELETE DATA OTHER
Route::get('deleteOthers/{id}','OthersController@delete');


Route::get('/detail','DetailController@index');



});
