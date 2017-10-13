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


    //PROACTIVE

    public function createPro()
    {
      return view('table.createPro');
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
      return Redirect::to('/table');

    }

    public function editPro($id)
    {
        $proactive= Proactive::find($id); 

      return view('table.editPro',compact('proactive'));
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

      return redirect::to('/table');
    }

    public function deletePro($id)
   {
      $proactive = Proactive::where('id','=',$id)->delete();

      return Redirect::to('/table');
    }


    //RAISA 
    public function createRaisa()
    {
      return view('table.createRaisa');
    }
 
 
    public function storeRaisa(Request $request)
    {
          
        Raisa::create([
        
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'status'=>$request->input('status'),
        'information'=>$request->input('status'),
        'currentProgress'=>$request->input('currentProgress'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject')
        
      ]);
      return Redirect::to('/table');
      
    }

    public function editRaisa($id)
    {
        $raisa= Raisa::find($id); 

      return view('table.editRaisa',compact('raisa'));
    }

    public function updateRaisa(Request $request, $id)
    {
        $raisa = raisa::find($id);
        $raisa->projectName=$request->input('projectName');
        $raisa->segment=$request->input('segment');
        $raisa->description=$request->input('description');
        $raisa->customer=$request->input('customer');
        $raisa->lastAction=$request->input('lastAction');
        $raisa->nextAction=$request->input('nextAction');
        $raisa->status=$request->input('status');
        $raisa->information=$request->input('information');
        $raisa->currentProgress=$request->input('currentProgress');
        $raisa->startProject=$request->input('startProject');
        $raisa->finishProject=$request->input('finishProject');
        
        $raisa->update();

      return redirect::to('/table');
    }

     public function deleteRaisa($id)
   {
      $raisa = Raisa::where('id','=',$id)->delete();

      return Redirect::to('/table');
    }


    //SCN

     public function createScn()
    {
      return view('table.createScn');
    }
 
 
    public function storeScn(Request $request)
    {
          
        Scn::create([
        
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'status'=>$request->input('status'),
        'information'=>$request->input('status'),
        'currentProgress'=>$request->input('currentProgress'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject')
        
      ]);
      return Redirect::to('/table');   
        
    }

     public function editScn($id)
    {
        $scn= Scn::find($id); 

      return view('table.editScn',compact('scn'));
    }

    public function updateScn(Request $request, $id)
    {
        $scn = scn::find($id);
        $scn->projectName=$request->input('projectName');
        $scn->segment=$request->input('segment');
        $scn->description=$request->input('description');
        $scn->customer=$request->input('customer');
        $scn->lastAction=$request->input('lastAction');
        $scn->nextAction=$request->input('nextAction');
        $scn->status=$request->input('status');
        $scn->information=$request->input('information');
        $scn->currentProgress=$request->input('currentProgress');
        $scn->startProject=$request->input('startProject');
        $scn->finishProject=$request->input('finishProject');
        
        $scn->update();

      return Redirect::to('/table');
    }

     public function deleteScn($id)
   {
      $scn = Scn::where('id','=',$id)->delete();

      return Redirect::to('/table');
    }


    //OTHER

     public function createOther()
    {
      return view('table.createOther');
    }
 
 
    public function storeOther(Request $request)
    {
          
        Other::create([
        
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'status'=>$request->input('status'),
        'information'=>$request->input('status'),
        'currentProgress'=>$request->input('currentProgress'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject')
        
      ]);
      return Redirect::to('/table');

    }

    public function editOther($id)
    {
        $other = other::find($id); 

      return view('table.editOther',compact('other'));
    }

    public function updateOther(Request $request, $id)
    {
        $other = other::find($id);
        $other->projectName=$request->input('projectName');
        $other->segment=$request->input('segment');
        $other->description=$request->input('description');
        $other->customer=$request->input('customer');
        $other->lastAction=$request->input('lastAction');
        $other->nextAction=$request->input('nextAction');
        $other->status=$request->input('status');
        $other->information=$request->input('information');
        $other->currentProgress=$request->input('currentProgress');
        $other->startProject=$request->input('startProject');
        $other->finishProject=$request->input('finishProject');
        
        $other->update();

      return Redirect::to('/table');
    }

      public function deleteOther($id)
   {
      $other = Other::where('id','=',$id)->delete();

      return Redirect::to('/table');
    }

}
