<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use App\proactive;
use Validator;
use App\raisa;
use App\scn;
use App\other;

class TableController extends Controller
{
    public function index()
    {
    	$proactives = Proactive::all();
    	$raisas = Raisa::all();
    	$scns = Scn::all();
    	$others = Other::all();

    	return view('table.index', compact('proactives','raisas','scns','others'));
    }


     public function createPro(){
      return view('table.createPro');
    }
 
 
    public function storePro(Request $request)
    {
          $validator = Validator::make(request()->all(), [
            'projectName'  => 'required',
        
        ]);
        
        if ($validator->fails()) {
            redirect()
                ->back()
                ->withErrors($validator->errors());
        }else{
        
      Volunteer::create([
        
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'status'=>$request->input('status'),
        'information'=>$request->input('status'),
        'currentProgress'=>$request->input('currentProgress'),
        'note'=>$request->input('note'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject')
        
      ]);
      return Redirect('table');

      }
        
    }
}
