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
use App\proactive;
use Excel;

class ExcelProactiveController extends Controller
{
     

	public function importProactiveRead()
{
		return view('importProactive');
}

 public function ExportProactive($type)
 {
    $proactive = Proactive::select('proactive.*')->get();

        return Excel::create('Data Proactive', function($excel) use ($proactive) {
            $excel->sheet('mySheet', function($sheet) use ($proactive)
            {
                $sheet->fromArray($proactive);
            });
        })->download($type);
 }

 public function importProactive(Request $request)
 {
 	$file = \Request::file('import_file');
 
        $test = Excel::load($file,function($render){
                \App\Proactive::insert($render->toArray());
                });
    
       
         return Redirect::to('/tableProactive');
    
}
}
