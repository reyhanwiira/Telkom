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

Route::get('/addSegment', function() {
	return view('addSegment');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){
	
	Route::get('/', function () {
		return view('home');
	});

//ACTIVITY PROACTIVE
	Route::get('/tableProactive/addActivity','ProactiveController@createActivity');
	Route::post('/tableProactive/{id}','ProactiveController@storeActPro');

	Route::get('deleteActPro/{id}','ProactiveController@deleteActPro');

	Route::get('/tableProactive/editActPro/{id}','ProactiveController@editActPro');
	Route::put('/editActPro/{id}','ProactiveController@updateActPro');

//======================================================================

//ACTIVITY RAISA
	Route::get('/tableRaisa/addActRaisa','RaisaController@createActRaisa');
	Route::post('/tableRaisa/{id}','RaisaController@storeActRaisa');

	Route::get('deleteActRaisa/{id}','RaisaController@deleteActRaisa');

	Route::get('/tableRaisa/editActRaisa/{id}','RaisaController@editActRaisa');
	Route::put('/editActRaisa/{id}','RaisaController@updateActRaisa');

//======================================================================

//ACTIVITY SCN
	Route::get('/tableScn/addActScn','ScnController@createActScn');
	Route::post('/tableScn/{id}','ScnController@storeActScn');

	Route::get('deleteActScn/{id}','ScnController@deleteActScn');

	Route::get('/tableScn/editActScn/{id}','ScnController@editActScn');
	Route::put('/editActScn/{id}','ScnController@updateActScn');

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

Route::post('importOthers', 'ExcelOthersController@importOthers');
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
	Route::get('/tableScn/create','ScnController@create');
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

//======================================================================

//getCSV

//public function store(AddProjectRequest $request)
//{
    // Get uploaded CSV file
    //$file = $request->file('csv');

    // Create list name
    //$name = time().'-'.$file->getClientOriginalName();

    // Create a list record in the database
    //$list = List::create(['name' => $name]);

    // Create a CSV reader instance
    //$reader = Reader::createFromFileObject($file->openFile());

    // Create a customer from each row in the CSV file
    //foreach ($reader as $index => $row) {
    //    $list->customers()->create($row);
    //}

    // Redirect back to where you need with a success message
//}

Route::get('/detail','DetailController@index');

//Detail Chart

Route::get('/detail','DetailChartController@readChart');
Route::get('/detail','ChartController@readChartDetail');

//Dashboard chart

Route::get('/home','ChartController@readChart');


});


Route::get('importExport', 'MaatWebsiteController@importExport');
Route::get('downloadExcel/{type}', 'MaatWebsiteController@downloadExcel');
Route::post('importExcel', 'MaatWebsiteController@importExcel');
