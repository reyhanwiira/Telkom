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
use App\activity;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class RaisaController extends Controller
{
   	
   	public function read()
    {
    	$raisas = Raisa::all();

    	return view('tableRaisa.index', compact('raisas'));
    }

    public function create()
    {
      return view('tableRaisa.createRaisa');
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
        $activitys= Activity::all(); 

      return view('tableRaisa.editRaisa',compact('raisa','activitys'));
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


    public function createActRaisa()
    {
      return view('tableRaisa.addActRaisa');
    }
 
     public function storeActRaisa(Request $request)
    {
          
        Activity::create([
        
        'tanggal'=>$request->input('tanggal'),
        'agenda'=>$request->input('agenda'),
        'actionPlan'=>$request->input('actionPlan'),
        'evidence'=>$request->input('evidence'),
        'lampiran'=>$request->input('lampiran')
        
      ]);

      return redirect('tableRaisa');
  }


   public function deleteActRaisa($id)
   {
      $activity = Activity::where('id','=',$id)->delete();

      return back();
    }

    public function editActRaisa($id)
    {
        $activity = Activity::find($id);

        return view('tableRaisa.editActRaisa',compact('activity'));
    }

    public function updateActRaisa(Request $request, $id)
    {
        $activity = Activity::find($id);
        $activity->tanggal=$request->input('tanggal');
        $activity->agenda=$request->input('agenda');
        $activity->actionPlan=$request->input('actionPlan');
        $activity->evidence=$request->input('evidence');
        $activity->lampiran=$request->input('lampiran');

        $activity->update();

        return redirect::to('/tableRaisa');
    }

       public function uploadIndexRaisa()
    {
        return view('/uploadActRaisa');
    }

    public function uploadRaisa(Request $request, $id)
    {
        $file = $request->file('filename');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        $entry = Activity::find($id);
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;
 
        $entry->update();


        return redirect::to('/tableRaisa');
    }

    

    public function downloadRaisa($filename)
    {
       $entry = Activity::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);
 
        return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
   }
}
