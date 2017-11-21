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
use App\activity;


class ScnController extends Controller
{

	public function read()
    {
    	$scns = Scn::all();

    	return view('tableScn.index', compact('scns'));
    }

    public function create()
    {
      return view('tableScn.createScn');
    }
 
 
    public function store(Request $request)
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
      return Redirect::to('tableScn');   
        
    }

     public function edit($id)
    {
        $scn= Scn::find($id); 
        $activitys= Activity::all();

      return view('tableScn.editScn',compact('scn','activitys'));
    }

    public function update(Request $request, $id)
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

      return redirect::to('/tableScn');
    }

     public function delete($id)
   {
      $scn = Scn::where('id','=',$id)->delete();

      return Redirect::to('tableScn');
    }


    public function deleteActScn($id)
   {
      $activity = Activity::where('id','=',$id)->delete();

      return back();
    }

    public function editActScn($id)
    {
        $activity = Activity::find($id);

        return view('tableScn.editActScn',compact('activity'));
    }

    public function updateActScn(Request $request, $id)
    {
        $activity = Activity::find($id);
        $activity->tanggal=$request->input('tanggal');
        $activity->agenda=$request->input('agenda');
        $activity->actionPlan=$request->input('actionPlan');
        $activity->evidence=$request->input('evidence');
        $activity->lampiran=$request->input('lampiran');

        $activity->update();

        return redirect::to('/tableScn');
    }


}
