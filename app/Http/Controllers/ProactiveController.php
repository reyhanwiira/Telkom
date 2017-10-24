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
use App\activity;

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
        $activitys= Activity::all();

      return view('tableProactive.editPro',compact('proactive','activitys'));
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



    public function createActivity()
    {
      return view('tableProactive.addActivity');
    }
 
     public function storeActPro(Request $request)
    {
          
        Activity::create([
        
        'tanggal'=>$request->input('tanggal'),
        'agenda'=>$request->input('agenda'),
        'actionPlan'=>$request->input('actionPlan'),
        'evidence'=>$request->input('evidence'),
        'lampiran'=>$request->input('lampiran')
        
      ]);

      return redirect('tableProactive');
  }


   public function deleteActPro($id)
   {
      $activity = Activity::where('id','=',$id)->delete();

      return back();
    }

    public function editActPro($id)
    {
        $activity = Activity::find($id);

        return view('tableProactive.editActPro',compact('activity'));
    }

    public function updateActPro(Request $request, $id)
    {
        $activity = Activity::find($id);
        $activity->tanggal=$request->input('tanggal');
        $activity->agenda=$request->input('agenda');
        $activity->actionPlan=$request->input('actionPlan');
        $activity->evidence=$request->input('evidence');
        $activity->lampiran=$request->input('lampiran');

        $activity->update();

        return redirect::to('/tableProactive');
    }



     public function addDocumentPro()
    {

        return view('tableProactive.addDocumentPro');
    }
    

    public function uploadPro()
    {
        $file = $request->file('filename');
        echo 'File name :'.$file->getClientOriginalName().'<br>';
        echo 'File extension :'.$file->getClientOriginalExtension().'<br>';
        echo 'File path :'.$file->getRealPath().'<br>';
        echo 'File size :'.$file->getSize().'<br>';
        echo 'File MIME Type :'.$file->getMimeType().'<br>';

        //upload file
        $destinationPath='uploads';
        $filename = $file->getClientOriginalName();
        if($file->move($destinationPath,$file->getClientOriginalName())){
            echo "<img src='uploads/".$filename."'>";
        }

    }


}
