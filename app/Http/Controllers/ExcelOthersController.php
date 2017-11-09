<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use Validator;
use App\other;
use Excel;

class ExcelOthersController extends Controller
{
     

	public function importOthersRead()
{
		return view('importOthers');
}

 public function ExportOthers($type)
 {
    $other = Other::select('other.*')->get();

        return Excel::create('Data Others', function($excel) use ($other) {
            $excel->sheet('mySheet', function($sheet) use ($other)
            {
                $sheet->fromArray($other);
            });
        })->download($type);
 }

 public function importOthers(Request $request)
 {
 	$file = \Request::file('import_file');
 
        $test = Excel::load($file,function($render){
                \App\Other::insert($render->toArray());
                });
    
       
         return Redirect::to('/tableOthers');
    
}
}
