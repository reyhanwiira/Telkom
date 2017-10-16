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

class ProactiveController extends Controller
{

    //PROACTIVE
    
    public function readPro()
    {
    	$proactives = Proactive::all();

    	return view('tableProactive.index', compact('proactives'));
    }


    public function createPro()
    {
      return view('tableProactive.createPro');
    }
 
 
    public function storePro(Request $request)
    {
          
        Proactive::create([
        
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'status'=>$request->input('status'),
        'information'=>$request->input('information'),
        'currentProgress'=>$request->input('currentProgress'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject')
        
      ]);
      return Redirect::to('/tableProactive');

    }

    public function editPro($id)
    {
        $proactive= Proactive::find($id); 

      return view('tableProactive.editPro',compact('proactive'));
    }

    public function updatePro(Request $request, $id)
    {
        $proactive = Proactive::find($id);
        $proactive->projectName=$request->input('projectName');
        $proactive->segment=$request->input('segment');
        $proactive->description=$request->input('description');
        $proactive->customer=$request->input('customer');
        $proactive->lastAction=$request->input('lastAction');
        $proactive->nextAction=$request->input('nextAction');
        $proactive->status=$request->input('status');
        $proactive->information=$request->input('information');
        $proactive->currentProgress=$request->input('currentProgress');
        $proactive->startProject=$request->input('startProject');
        $proactive->finishProject=$request->input('finishProject');
        
        $proactive->update();

      return redirect::to('/tableProactive');
    }

    public function deletePro($id)
   {
      $proactive = Proactive::where('id','=',$id)->delete();

      return Redirect::to('/tableProactive');
    }

}
