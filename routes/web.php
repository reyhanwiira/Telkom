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

Route::get('/chart', function() {
	return view('chart');
});


Route::get('/form', function() {
	return view('form');
});

Route::get('/addSegment', function() {
	return view('addSegment');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editResume',function(){
	return view('editResume'); 
});

Route::group(['middleware'=>'auth'], function(){
	
	Route::get('/', function () {
		return view('home');
	});

//ACTIVITY PROACTIVE
	Route::get('/tableProactive/addActPro','ProactiveController@createActivity');
	Route::post('/tableProactive/{id}','ProactiveController@storeActPro');

	Route::get('deleteActPro/{id}','ProactiveController@deleteActPro');

	Route::get('/tableProactive/editActPro/{id}','ProactiveController@editActPro');
	Route::put('/editActPro/{id}','ProactiveController@updateActPro');


//EXPORT AND IMPORT PROACTIVE

	Route::get('importProactive', 'ExcelProactiveController@importProactiveRead');

	Route::post('importProactive', 'ExcelProactiveController@importProactive')->name('importProactive');
	Route::get('downloadProactive/{type}', 'ExcelProactiveController@ExportProactive');



//======================================================================

//ACTIVITY RAISA
Route::get('/tableRaisa/addActRaisa','RaisaController@createActRaisa');
Route::post('/tableRaisa/{id}','RaisaController@storeActRaisa');

Route::get('deleteActRaisa/{id}','RaisaController@deleteActRaisa');

Route::get('/tableRaisa/editActRaisa/{id}','RaisaController@editActRaisa');
Route::put('/editActRaisa/{id}','RaisaController@updateActRaisa');

Route::get('importRaisa', 'ExcelRaisaController@importRaisaRead');

Route::post('importRaisa', 'ExcelRaisaController@importRaisa')->name('importRaisa');
Route::get('downloadRaisa/{type}', 'ExcelRaisaController@ExportRaisa');

//======================================================================

//ACTIVITY SCN
Route::get('/tableScn/addActScn','ScnController@createActScn');
Route::post('/tableScn/{id}','ScnController@storeActScn');

Route::get('deleteActScn/{id}','ScnController@deleteActScn');

Route::get('/tableScn/editActScn/{id}','ScnController@editActScn');
Route::put('/editActScn/{id}','ScnController@updateActScn');


//IMPORT DAN EXPORT SCN

Route::get('importScn', 'ExcelScnController@importScnRead');

Route::post('importScn', 'ExcelScnController@importScn')->name('importScn');
Route::get('downloadScn/{type}', 'ExcelScnController@ExportScn');
//======================================================================


//======================================================================

//ACTIVITY OTHERS
Route::get('/tableOthers/addActOthers','OthersController@createActOthers');
Route::post('/tableOthers/{id}','OthersController@storeActOthers');

Route::get('deleteActOthers/{id}','OthersController@deleteActOthers');

Route::get('/tableOthers/editActOthers/{id}','OthersController@editActOthers');
Route::put('/editActOthers/{id}','OthersController@updateActOthers');

Route::post('/tableOthers','OthersController@uploadOthers');

Route::get('/tableOthers/uploadOthers','OthersUploadController@indexUploadOthers') ;
Route::post('/tableOthers/editOthers','OthersUploadController@showUploadFile') ;

Route::get('/tableOthers/editOthers','OthersController@downloadFileOthers');



//IMPORT DAN EXPORT OTHERS

Route::get('importOthers', 'ExcelOthersController@importOthersRead');

Route::post('importOthers', 'ExcelOthersController@importOthers')->name('importOthers');
Route::get('downloadOthers/{type}', 'ExcelOthersController@ExportOthers');
//======================================================================


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

//======================================================================

//READ RAISA
Route::get('/tableRaisa','RaisaController@read');

//CREATE DATA RAISA
Route::get('/tableRaisa/createRaisa','RaisaController@create');
Route::post('/tableRaisa','RaisaController@store');

//EDIT DAN UPDATE DATA RAISA
Route::get('/tableRaisa/{id}/editRaisa','RaisaController@edit');
Route::put('/tableRaisa/{id}','RaisaController@update');

//DELETE DATA RAISA
Route::get('deleteRaisa/{id}','RaisaController@delete');

//======================================================================

//READ SCN
Route::get('/tableScn','ScnController@read');

//CREATE DATA SCN
Route::get('/tableScn/createScn','ScnController@create');
Route::post('/tableScn','ScnController@store');

//EDIT DAN UPDATE DATA SCN
Route::get('/tableScn/{id}/editScn','ScnController@edit');
Route::put('/tableScn/{id}','ScnController@update');

//DELETE DATA RAISA
Route::get('deleteScn/{id}','ScnController@delete');

//======================================================================

//READ OTHERS
Route::get('/tableOthers','OthersController@readOthers');

//CREATE DATA Other
Route::get('/tableOthers/createOthers','OthersController@createOthers');
Route::post('/tableOthers','OthersController@storeOthers');

//EDIT DAN UPDATE DATA OTHER
Route::get('/tableOthers/{id}/editOthers','OthersController@editOthers');
Route::put('/tableOthers/{id}','OthersController@updateOthers');

//DELETE DATA OTHER
Route::get('deleteOthers/{id}','OthersController@deleteOthers');

Route::get('/tableOthers/printOthers','OthersController@print');

Route::get('/detail','DetailController@index');

//Dashboard chart

Route::get('/home','ChartController@readChart');
//resume

Route::get('/editResume','ResumeController@readResume');
Route::get('/{id}/editResume','ResumeController@editResume');
Route::put('/{id}','ResumeController@updateResume');

Route::get('/detail','DetailController@index');

//Detail Chart

Route::get('/detailProact','ChartController@readChartDetailProact');
Route::get('/detailRaisa','ChartController@readChartDetailRaisa');
Route::get('/detailScn','ChartController@readChartDetailScn');
Route::get('/detailOther','ChartController@readChartDetail');

//=====================================================



Route::get('importExport', 'MaatWebsiteController@importExport');
Route::get('downloadExcel/{type}', 'MaatWebsiteController@downloadExcel');
Route::post('importExcel', 'MaatWebsiteController@importExcel');
});


Route::get('importExport', 'MaatWebsiteController@importExport');
Route::get('downloadExcel/{type}', 'MaatWebsiteController@downloadExcel');
Route::post('importExcel', 'MaatWebsiteController@importExcel');


Route::group(['middleware' => 'web'], function () {
	Route::get('fileUpload', function () {
		return view('fileUpload');
	});
	Route::post('fileUpload', 'FileUploadOthers@upload');
});

Route::get('/upload','CobaUpload@index');
Route::post('/upload','CobaUpload@upload');
