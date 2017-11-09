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
use App\raisa;
use Excel;

class ExcelRaisaController extends Controller
{
     

	public function importRaisaRead()
{
		return view('importRaisa');
}

 public function ExportRaisa($type)
 {
    $raisa = Raisa::select('raisa.*')->get();

        return Excel::create('Data Raisa', function($excel) use ($raisa) {
            $excel->sheet('mySheet', function($sheet) use ($raisa)
            {
                $sheet->fromArray($raisa);
            });
        })->download($type);
 }

 public function importRaisa(Request $request)
 {
 	$file = \Request::file('import_file');
 
        $test = Excel::load($file,function($render){
                \App\Raisa::insert($render->toArray());
                });
    
       if ($test) {
         return Redirect::to('/tableRaisa');
    }
}
}
