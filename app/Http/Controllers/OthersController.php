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
use App\activity;


class OthersController extends Controller
{

	public function readOthers()
    {
    	$otherss = Other::all();

    	return view('tableOthers.index', compact('otherss'));
    }

    public function createOthers()
    {
      return view('tableOthers.createOthers');
    }
 
 
    public function storeOthers(Request $request)
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

    public function editOthers($id)
    {
        $other = other::find($id);
        $activitys= Activity::all(); 

      return view('tableOthers.editOthers',compact('other','activitys'));
    }

    public function updateOthers(Request $request, $id)
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

      public function deleteOthers($id)
   {
      $other = Other::where('id','=',$id)->delete();

      return Redirect::to('/tableOthers');
    }


     public function deleteActOthers($id)
   {
      $activity = Activity::where('id','=',$id)->delete();

      return back();
    }

    public function createActOthers()
    {
      return view('tableOthers.addActOthers');
    }
 

    public function storeActOthers(Request $request)
    {
          
        Activity::create([
        
        'tanggal'=>$request->input('tanggal'),
        'agenda'=>$request->input('agenda'),
        'actionPlan'=>$request->input('actionPlan'),
        'evidence'=>$request->input('evidence'),
        'filename'=>$request->input('filename'),
        'upload'=>$request->input('upload')
        
      ]);

      return redirect('tableOthers');
  }

    public function editActOthers($id)
    {
        $activity = Activity::find($id);

        return view('tableOthers.editActOthers',compact('activity'));
    }

    public function updateActOthers(Request $request, $id)
    {
        $activity = Activity::find($id);
        $activity->tanggal=$request->input('tanggal');
        $activity->agenda=$request->input('agenda');
        $activity->actionPlan=$request->input('actionPlan');
        $activity->evidence=$request->input('evidence');
        $activity->lampiran=$request->input('lampiran');

        $activity->update();

        return redirect::to('/tableOthers');
    }


    public function print()
    {
        $otherss = Other::all();

        return view('tableOthers.printOthers',compact('otherss'));
    }


    public function uploadOthersIndex(){


        return view('tableOthers.addDocumentOthers');
    }
 
    public function uploadOthers(Request $request){
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
