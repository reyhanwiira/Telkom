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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

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

    $activeProject = Proactive::where('status','=','P1')->where('updated_at','<=',$deadline)->count();
    $inactiveProject = Proactive::where('status','=','P1')->where('updated_at','>=',$deadline)->count();

    if($request->input('progress')>=0&&$request->input('progress')<=10){
        Proactive::create([  
            'projectName'=>$request->input('projectName'),
            'segment'=>$request->input('segment'),
            'description'=>$request->input('description'),
            'customer'=>$request->input('customer'),
            'lastAction'=>$request->input('lastAction'),
            'nextAction'=>$request->input('nextAction'),
            'progress'=>$request->input('progress'),
            'currentProgress'=>'Initial Requirement',
            'status'=>$request->input('status'),
            'lastStatus'=>$request->input('LastStatus'),
            'information'=>$request->input('information'),
            'startProject'=>$request->input('startProject'),
            'finishProject'=>$request->input('finishProject'),
            'AMSegment'=>$request->input('AMSegment'),
            'keahlian'=>$request->input('keahlian'),
            'EstRevenue'=>$request->input('EstRevenue'),
            'deliverable'=>$request->input('deliverable'),
            'benefit'=>$request->input('benefit'),
            'supportAP'=>$request->input('supportAP')
            ]);
}else if($request->input('progress')>=11&&$request->input('progress')<=20){
    Proactive::create([  
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'progress'=>$request->input('progress'),
        'currentProgress'=>'Initial Solution',
        'status'=>$request->input('status'),
        'lastStatus'=>$request->input('LastStatus'),
        'information'=>$request->input('information'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject'),
        'AMSegment'=>$request->input('AMSegment'),
        'keahlian'=>$request->input('keahlian'),
        'EstRevenue'=>$request->input('EstRevenue'),
        'deliverable'=>$request->input('deliverable'),
        'benefit'=>$request->input('benefit'),
        'supportAP'=>$request->input('supportAP')

        ]);
}else if($request->input('progress')>=21&&$request->input('progress')<=30){
    Proactive::create([  
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'progress'=>$request->input('progress'),
        'currentProgress'=>'Menunggu Feedback & Gathering Req',
        'status'=>$request->input('status'),
        'lastStatus'=>$request->input('LastStatus'),
        'information'=>$request->input('information'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject'),
        'AMSegment'=>$request->input('AMSegment'),
        'keahlian'=>$request->input('keahlian'),
        'EstRevenue'=>$request->input('EstRevenue'),
        'deliverable'=>$request->input('deliverable'),
        'benefit'=>$request->input('benefit'),
        'supportAP'=>$request->input('supportAP')

        ]);
}else if($request->input('progress')>=31&&$request->input('progress')<=60){
    Proactive::create([  
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'progress'=>$request->input('progress'),
        'currentProgress'=>'Solution Design',
        'status'=>$request->input('status'),
        'lastStatus'=>$request->input('LastStatus'),
        'information'=>$request->input('information'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject'),
        'AMSegment'=>$request->input('AMSegment'),
        'keahlian'=>$request->input('keahlian'),
        'EstRevenue'=>$request->input('EstRevenue'),
        'deliverable'=>$request->input('deliverable'),
        'benefit'=>$request->input('benefit'),
        'supportAP'=>$request->input('supportAP')

        ]);
}else if($request->input('progress')>=61&&$request->input('progress')<=90){
    Proactive::create([  
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'progress'=>$request->input('progress'),
        'currentProgress'=>'Solution Development',
        'status'=>$request->input('status'),
        'lastStatus'=>$request->input('LastStatus'),
        'information'=>$request->input('information'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject'),
        'AMSegment'=>$request->input('AMSegment'),
        'keahlian'=>$request->input('keahlian'),
        'EstRevenue'=>$request->input('EstRevenue'),
        'deliverable'=>$request->input('deliverable'),
        'benefit'=>$request->input('benefit'),
        'supportAP'=>$request->input('supportAP')

        ]);
}else if($request->input('progress')>=91&&$request->input('progress')<=99){
    Proactive::create([  
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'progress'=>$request->input('progress'),
        'currentProgress'=>'POC',
        'status'=>$request->input('status'),
        'lastStatus'=>$request->input('LastStatus'),
        'information'=>$request->input('information'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject'),
        'AMSegment'=>$request->input('AMSegment'),
        'keahlian'=>$request->input('keahlian'),
        'EstRevenue'=>$request->input('EstRevenue'),
        'deliverable'=>$request->input('deliverable'),
        'benefit'=>$request->input('benefit'),
        'supportAP'=>$request->input('supportAP')

        ]);
}else if($request->input('progress')==100){
    Proactive::create([  
        'projectName'=>$request->input('projectName'),
        'segment'=>$request->input('segment'),
        'description'=>$request->input('description'),
        'customer'=>$request->input('customer'),
        'lastAction'=>$request->input('lastAction'),
        'nextAction'=>$request->input('nextAction'),
        'progress'=>$request->input('progress'),
        'currentProgress'=>'Proposal Ready',
        'status'=>$request->input('status'),
        'lastStatus'=>$request->input('LastStatus'),
        'information'=>$request->input('information'),
        'startProject'=>$request->input('startProject'),
        'finishProject'=>$request->input('finishProject'),
        'AMSegment'=>$request->input('AMSegment'),
        'keahlian'=>$request->input('keahlian'),
        'EstRevenue'=>$request->input('EstRevenue'),
        'deliverable'=>$request->input('deliverable'),
        'benefit'=>$request->input('benefit'),
        'supportAP'=>$request->input('supportAP')

        ]);
}

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

    $proactive->last=$proactive->progress;
    if($request->input('progress')>=0&&$request->input('progress')<=10){
        $proactive->projectName=$request->input('projectName');
        $proactive->segment=$request->input('segment');
        $proactive->description=$request->input('description');
        $proactive->customer=$request->input('customer');
        $proactive->lastAction=$request->input('lastAction');
        $proactive->nextAction=$request->input('nextAction');
        $proactive->progress=$request->input('progress');
        $proactive->lastCurrentProgress = $proactive->currentProgress;
        $proactive->currentProgress='Initial Requirement';
        $proactive->status=$request->input('status');
        $proactive->lastStatus=$request->input('lastStatus');
        $proactive->information=$request->input('information');
        $proactive->startProject=$request->input('startProject');
        $proactive->finishProject=$request->input('finishProject');
        $proactive->AMSegment=$request->input('AMSegment');
        $proactive->keahlian=$request->input('keahlian');
        $proactive->EstRevenue=$request->input('EstRevenue');
        $proactive->deliverable=$request->input('deliverable');
        $proactive->benefit=$request->input('benefit');
        $proactive->supportAP=$request->input('supportAP');

    }else if($request->input('progress')>=11&&$request->input('progress')<=20){
        $proactive->projectName=$request->input('projectName');
        $proactive->segment=$request->input('segment');
        $proactive->description=$request->input('description');
        $proactive->customer=$request->input('customer');
        $proactive->lastAction=$request->input('lastAction');
        $proactive->nextAction=$request->input('nextAction');
        $proactive->progress=$request->input('progress');
        $proactive->lastCurrentProgress = $proactive->currentProgress;
        $proactive->currentProgress='Initial Solution';
        $proactive->status=$request->input('status');
        $proactive->lastStatus=$request->input('lastStatus');
        $proactive->information=$request->input('information');
        $proactive->startProject=$request->input('startProject');
        $proactive->finishProject=$request->input('finishProject');
        $proactive->AMSegment=$request->input('AMSegment');
        $proactive->keahlian=$request->input('keahlian');
        $proactive->EstRevenue=$request->input('EstRevenue');
        $proactive->deliverable=$request->input('deliverable');
        $proactive->benefit=$request->input('benefit');
        $proactive->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=21&&$request->input('progress')<=30){
        $proactive->projectName=$request->input('projectName');
        $proactive->segment=$request->input('segment');
        $proactive->description=$request->input('description');
        $proactive->customer=$request->input('customer');
        $proactive->lastAction=$request->input('lastAction');
        $proactive->nextAction=$request->input('nextAction');
        $proactive->progress=$request->input('progress');
        $proactive->lastCurrentProgress = $proactive->currentProgress;
        $proactive->currentProgress='Menunggu Feedback & Gathering Req';
        $proactive->status=$request->input('status');
        $proactive->lastStatus=$request->input('lastStatus');
        $proactive->information=$request->input('information');
        $proactive->startProject=$request->input('startProject');
        $proactive->finishProject=$request->input('finishProject');
        $proactive->AMSegment=$request->input('AMSegment');
        $proactive->keahlian=$request->input('keahlian');
        $proactive->EstRevenue=$request->input('EstRevenue');
        $proactive->deliverable=$request->input('deliverable');
        $proactive->benefit=$request->input('benefit');
        $proactive->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=31&&$request->input('progress')<=60){
        $proactive->projectName=$request->input('projectName');
        $proactive->segment=$request->input('segment');
        $proactive->description=$request->input('description');
        $proactive->customer=$request->input('customer');
        $proactive->lastAction=$request->input('lastAction');
        $proactive->nextAction=$request->input('nextAction');
        $proactive->progress=$request->input('progress');
        $proactive->lastCurrentProgress = $proactive->currentProgress;
        $proactive->currentProgress='Solution Design';
        $proactive->status=$request->input('status');
        $proactive->lastStatus=$request->input('lastStatus');
        $proactive->information=$request->input('information');
        $proactive->startProject=$request->input('startProject');
        $proactive->finishProject=$request->input('finishProject');
        $proactive->AMSegment=$request->input('AMSegment');
        $proactive->keahlian=$request->input('keahlian');
        $proactive->EstRevenue=$request->input('EstRevenue');
        $proactive->deliverable=$request->input('deliverable');
        $proactive->benefit=$request->input('benefit');
        $proactive->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=61&&$request->input('progress')<=90){
        $proactive->projectName=$request->input('projectName');
        $proactive->segment=$request->input('segment');
        $proactive->description=$request->input('description');
        $proactive->customer=$request->input('customer');
        $proactive->lastAction=$request->input('lastAction');
        $proactive->nextAction=$request->input('nextAction');
        $proactive->progress=$request->input('progress');
        $proactive->lastCurrentProgress = $proactive->currentProgress;
        $proactive->currentProgress='Solution Development';
        $proactive->status=$request->input('status');
        $proactive->lastStatus=$request->input('lastStatus');
        $proactive->information=$request->input('information');
        $proactive->startProject=$request->input('startProject');
        $proactive->finishProject=$request->input('finishProject');
        $proactive->AMSegment=$request->input('AMSegment');
        $proactive->keahlian=$request->input('keahlian');
        $proactive->EstRevenue=$request->input('EstRevenue');
        $proactive->deliverable=$request->input('deliverable');
        $proactive->benefit=$request->input('benefit');
        $proactive->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=91&&$request->input('progress')<=99){
        $proactive->projectName=$request->input('projectName');
        $proactive->segment=$request->input('segment');
        $proactive->description=$request->input('description');
        $proactive->customer=$request->input('customer');
        $proactive->lastAction=$request->input('lastAction');
        $proactive->nextAction=$request->input('nextAction');
        $proactive->progress=$request->input('progress');
        $proactive->lastCurrentProgress = $proactive->currentProgress;
        $proactive->currentProgress='POC';
        $proactive->status=$request->input('status');
        $proactive->lastStatus=$request->input('lastStatus');
        $proactive->information=$request->input('information');
        $proactive->startProject=$request->input('startProject');
        $proactive->finishProject=$request->input('finishProject');
        $proactive->AMSegment=$request->input('AMSegment');
        $proactive->keahlian=$request->input('keahlian');
        $proactive->EstRevenue=$request->input('EstRevenue');
        $proactive->deliverable=$request->input('deliverable');
        $proactive->benefit=$request->input('benefit');
        $proactive->supportAP=$request->input('supportAP');
    }else{
        $proactive->projectName=$request->input('projectName');
        $proactive->segment=$request->input('segment');
        $proactive->description=$request->input('description');
        $proactive->customer=$request->input('customer');
        $proactive->lastAction=$request->input('lastAction');
        $proactive->nextAction=$request->input('nextAction');
        $proactive->progress=$request->input('progress');
        $proactive->lastCurrentProgress = $proactive->currentProgress;
        $proactive->currentProgress='Proposal Ready';
        $proactive->status=$request->input('status');
        $proactive->lastStatus=$request->input('lastStatus');
        $proactive->information=$request->input('information');
        $proactive->startProject=$request->input('startProject');
        $proactive->finishProject=$request->input('finishProject');
        $proactive->AMSegment=$request->input('AMSegment');
        $proactive->keahlian=$request->input('keahlian');
        $proactive->EstRevenue=$request->input('EstRevenue');
        $proactive->deliverable=$request->input('deliverable');
        $proactive->benefit=$request->input('benefit');
        $proactive->supportAP=$request->input('supportAP');
    }
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
  return view('/tableProactive.addActPro');
}

<<<<<<< HEAD
=======


>>>>>>> 4d5f3acc41a2b220884815b120ebef1c34deead9
public function storeActPro(Request $request, $id)
{
    $entry = new Activity();
    $entry->tanggal=$request->input('tanggal');
    $entry->agenda=$request->input('agenda');
    $entry->actionPlan=$request->input('actionPlan');
    $entry->lampiran=$request->input('lampiran');


    $file = $request->file('filename');
    $extension = $file->getClientOriginalExtension();
    Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
    
    $entry->mime = $file->getClientMimeType();
    $entry->original_filename = $file->getClientOriginalName();
    $entry->filename = $file->getFilename().'.'.$extension;

    $entry->save();

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
    

    $activity->update();

    return redirect::to('/tableProactive');
}

public function uploadIndexPro()
{
    return view('/uploadActPro');
}

public function uploadPro(Request $request, $id)
{
    $file = $request->file('filename');
    $extension = $file->getClientOriginalExtension();
    Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
    $entry = Activity::find($id);
    $entry->mime = $file->getClientMimeType();
    $entry->original_filename = $file->getClientOriginalName();
    $entry->filename = $file->getFilename().'.'.$extension;

    $entry->update();


    return redirect::to('/tableProactive');
}



public function downloadPro($original_filename)
{
   $entry = Activity::where('original_filename', '=', $original_filename)->firstOrFail();
   $file = Storage::disk('local')->get($entry->filename);

   return (new Response($file, 200))
   ->header('Content-Type', $entry->mime);
}

}
