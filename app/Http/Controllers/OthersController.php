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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;


class OthersController extends Controller
{

	public function readOthers()
    {
    	$others = Other::all();

    	return view('tableOthers.index', compact('others'));
    }


    public function readCount(){
        $other = Other::all();

        return view('/detailOther', compact('other'));
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


      return view('tableOthers.editOthers',compact('other','activitys','other'));
    }


    public function updateOthers(Request $request, $id)
    {
        $other = other::find($id);

        
        $other->otherInitialRequirementCountLast=$other->otherInitialRequirementCount;
        $other->otherInitialSolutionCountLast=$other->otherInitialSolutionCount;
        $other->otherFeedbackCountLast=$other->otherFeedbackCount;
        $other->otherSolutionDesignCountLast=$other->otherSolutionDesignCount;
        $other->otherSolutionDevelopmentCountLast=$other->otherSolutionDevelopmentCount;
        $other->otherPOCCountLast=$other->otherPOCCount;
        $other->otherProposalReadyCountLast=$other->otherProposalReadyCount;
        
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

        $other->otherInitialRequirementCount=$other->where('currentProgress','Like','Initial Requirement')->count();
        $other->otherInitialSolutionCount=$other->where('currentProgress','Like','Initial Solution')->count();
        $other->otherFeedbackCount=$other->where('currentProgress','Like','Menunggu Feedback & Gathering Req')->count();
        $other->otherSolutionDesignCount=$other->where('currentProgress','Like','Solution Design')->count();
        $other->otherSolutionDevelopmentCount=$other->where('currentProgress','Like','Solution Development')->count();
        $other->otherPOCCount=$other->where('currentProgress','Like','POC')->count();
        $other->otherProposalReadyCount=$other->where('currentProgress','Like','Proposal Ready')->count();


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
        'evidence'=>$request->input('evidence')
        
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

     public function uploadIndexOthers()
    {
        return view('/uploadActOthers');
    }

    public function uploadOthers(Request $request, $id)
    {
        $file = $request->file('filename');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        $entry = Activity::find($id);
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;
 
        $entry->update();


        return redirect::to('/tableOthers');
    }

    

    public function downloadOthers($filename)
    {
       $entry = Activity::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);
 
        return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
   }

}
