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


class OthersController extends Controller
{

	public function read()
    {
    	$otherss = Other::all();

    	return view('tableOthers.index', compact('otherss'));
    }

    public function create()
    {
      return view('tableOthers.create');
    }
 
 
    public function store(Request $request)
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
      return Redirect::to('/tableOthers');

    }

    public function edit($id)
    {
        $other = other::find($id); 

      return view('tableOthers.edit',compact('other'));
    }

    public function update(Request $request, $id)
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

      return redirect::to('/tableOthers');
    }

      public function delete($id)
   {
      $other = Other::where('id','=',$id)->delete();

      return Redirect::to('/tableOthers');
    }

}
