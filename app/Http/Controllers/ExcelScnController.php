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
use App\scn;
use Excel;

class ExcelScnController extends Controller
{
     

	public function importScnRead()
{
		return view('importScn');
}

 public function ExportScn($type)
 {
    $scn = Scn::select('scn.*')->get();

        return Excel::create('Data Scn', function($excel) use ($scn) {
            $excel->sheet('mySheet', function($sheet) use ($scn)
            {
                $sheet->fromArray($scn);
            });
        })->download($type);
 }

 public function importScn(Request $request)
 {
 	$file = \Request::file('import_file');
 
        $test = Excel::load($file,function($render){
                \App\Scn::insert($render->toArray());
                });
    
      
         return Redirect::to('/tableScn');
    
}
}
