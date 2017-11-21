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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;


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


    public function createActScn()
    {
      return view('/tableScn.addActScn');
    }
 
     public function storeActScn(Request $request)
    {
          
        Activity::create([
        
        'tanggal'=>$request->input('tanggal'),
        'agenda'=>$request->input('agenda'),
        'actionPlan'=>$request->input('actionPlan'),
        'evidence'=>$request->input('evidence'),
        'lampiran'=>$request->input('lampiran')
        
      ]);

      return redirect('tableScn');
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

    public function uploadIndexScn()
    {
        return view('/uploadActScn');
    }

    public function uploadScn(Request $request, $id)
    {
        $file = $request->file('filename');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        $entry = Activity::find($id);
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;
 
        $entry->update();


        return redirect::to('/tableScn');
    }

    

    public function downloadScn($filename)
    {
       $entry = Activity::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);
 
        return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
   }


}
