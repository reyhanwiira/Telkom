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

class RaisaController extends Controller
{
   	
   	public function read()
    {
    	$raisas = Raisa::all();

    	return view('tableRaisa.index', compact('raisas'));
    }

    public function create()
    {
      return view('tableRaisa.create');
    }
 
 
    public function store(Request $request)
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
      return Redirect::to('/tableRaisa');
      
    }

    public function edit($id)
    {
        $raisa= Raisa::find($id); 

      return view('tableRaisa.edit',compact('raisa'));
    }

    public function update(Request $request, $id)
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

      return redirect('/tableRaisa');
    }

     public function delete($id)
   {
      $raisa = Raisa::where('id','=',$id)->delete();

      return Redirect::to('/tableRaisa');
    } 
}
