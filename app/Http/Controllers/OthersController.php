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
            $validator = Validator::make(request()->all(), [
            'projectName' => 'required',
            'segment'  => 'required',
            'description'  => 'required',
            'customer'  => 'required',
            'lastAction'  => 'required',
            'nextAction'  => 'required',
            'status'  => 'required',
            'information'  => 'required',
            'progress' => 'required|numeric'

            ],[

            'projectName.required' => 'Nama Project is required.',
            'segment.required' => 'Segment is required.',
            'description.required' => 'Description is required.',
            'customer.required' => 'Customer is required',
            'lastAction.required' => 'Last Action is required.',
            'nextAction.required' => 'Next Action is required.',
            'status.required' => 'Status is required.',
            'information.required' => 'Information is required.',
            'progress.required' => 'progress is required.',
            'progress.numeric' => 'progress must be numeric.'
        
        ]);
        
if ($validator->fails()) {
        return back()->withErrors($validator->errors());
            
 }else{

         if($request->input('progress')>=0&&$request->input('progress')<=10){
        Other::create([  
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
    Other::create([  
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
    Other::create([  
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
    Other::create([  
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
    Other::create([  
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
    Other::create([  
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
    Other::create([  
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
      return Redirect::to('/tableOthers');
}
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

        
       $other->last=$other->progress;
    if($request->input('progress')>=0&&$request->input('progress')<=10){
        $other->projectName=$request->input('projectName');
        $other->segment=$request->input('segment');
        $other->description=$request->input('description');
        $other->customer=$request->input('customer');
        $other->lastAction=$request->input('lastAction');
        $other->nextAction=$request->input('nextAction');
        $other->progress=$request->input('progress');
        $other->currentProgress='Initial Requirement';
        $other->status=$request->input('status');
        $other->lastStatus=$request->input('lastStatus');
        $other->information=$request->input('information');
        $other->startProject=$request->input('startProject');
        $other->finishProject=$request->input('finishProject');
        $other->AMSegment=$request->input('AMSegment');
        $other->keahlian=$request->input('keahlian');
        $other->EstRevenue=$request->input('EstRevenue');
        $other->deliverable=$request->input('deliverable');
        $other->benefit=$request->input('benefit');
        $other->supportAP=$request->input('supportAP');

    }else if($request->input('progress')>=11&&$request->input('progress')<=20){
        $other->projectName=$request->input('projectName');
        $other->segment=$request->input('segment');
        $other->description=$request->input('description');
        $other->customer=$request->input('customer');
        $other->lastAction=$request->input('lastAction');
        $other->nextAction=$request->input('nextAction');
        $other->progress=$request->input('progress');
        $other->currentProgress='Initial Solution';
        $other->status=$request->input('status');
        $other->lastStatus=$request->input('lastStatus');
        $other->information=$request->input('information');
        $other->startProject=$request->input('startProject');
        $other->finishProject=$request->input('finishProject');
        $other->AMSegment=$request->input('AMSegment');
        $other->keahlian=$request->input('keahlian');
        $other->EstRevenue=$request->input('EstRevenue');
        $other->deliverable=$request->input('deliverable');
        $other->benefit=$request->input('benefit');
        $other->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=21&&$request->input('progress')<=30){
        $other->projectName=$request->input('projectName');
        $other->segment=$request->input('segment');
        $other->description=$request->input('description');
        $other->customer=$request->input('customer');
        $other->lastAction=$request->input('lastAction');
        $other->nextAction=$request->input('nextAction');
        $other->progress=$request->input('progress');
        $other->currentProgress='Menunggu Feedback & Gathering Req';
        $other->status=$request->input('status');
        $other->lastStatus=$request->input('lastStatus');
        $other->information=$request->input('information');
        $other->startProject=$request->input('startProject');
        $other->finishProject=$request->input('finishProject');
        $other->AMSegment=$request->input('AMSegment');
        $other->keahlian=$request->input('keahlian');
        $other->EstRevenue=$request->input('EstRevenue');
        $other->deliverable=$request->input('deliverable');
        $other->benefit=$request->input('benefit');
        $other->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=31&&$request->input('progress')<=60){
        $other->projectName=$request->input('projectName');
        $other->segment=$request->input('segment');
        $other->description=$request->input('description');
        $other->customer=$request->input('customer');
        $other->lastAction=$request->input('lastAction');
        $other->nextAction=$request->input('nextAction');
        $other->progress=$request->input('progress');
        $other->currentProgress='Solution Design';
        $other->status=$request->input('status');
        $other->lastStatus=$request->input('lastStatus');
        $other->information=$request->input('information');
        $other->startProject=$request->input('startProject');
        $other->finishProject=$request->input('finishProject');
        $other->AMSegment=$request->input('AMSegment');
        $other->keahlian=$request->input('keahlian');
        $other->EstRevenue=$request->input('EstRevenue');
        $other->deliverable=$request->input('deliverable');
        $other->benefit=$request->input('benefit');
        $other->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=61&&$request->input('progress')<=90){
        $other->projectName=$request->input('projectName');
        $other->segment=$request->input('segment');
        $other->description=$request->input('description');
        $other->customer=$request->input('customer');
        $other->lastAction=$request->input('lastAction');
        $other->nextAction=$request->input('nextAction');
        $other->progress=$request->input('progress');
        $other->currentProgress='Solution Development';
        $other->status=$request->input('status');
        $other->lastStatus=$request->input('lastStatus');
        $other->information=$request->input('information');
        $other->startProject=$request->input('startProject');
        $other->finishProject=$request->input('finishProject');
        $other->AMSegment=$request->input('AMSegment');
        $other->keahlian=$request->input('keahlian');
        $other->EstRevenue=$request->input('EstRevenue');
        $other->deliverable=$request->input('deliverable');
        $other->benefit=$request->input('benefit');
        $other->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=91&&$request->input('progress')<=99){
        $other->projectName=$request->input('projectName');
        $other->segment=$request->input('segment');
        $other->description=$request->input('description');
        $other->customer=$request->input('customer');
        $other->lastAction=$request->input('lastAction');
        $other->nextAction=$request->input('nextAction');
        $other->progress=$request->input('progress');
        $other->currentProgress='POC';
        $other->status=$request->input('status');
        $other->lastStatus=$request->input('lastStatus');
        $other->information=$request->input('information');
        $other->startProject=$request->input('startProject');
        $other->finishProject=$request->input('finishProject');
        $other->AMSegment=$request->input('AMSegment');
        $other->keahlian=$request->input('keahlian');
        $other->EstRevenue=$request->input('EstRevenue');
        $other->deliverable=$request->input('deliverable');
        $other->benefit=$request->input('benefit');
        $other->supportAP=$request->input('supportAP');
    }else{
        $other->projectName=$request->input('projectName');
        $other->segment=$request->input('segment');
        $other->description=$request->input('description');
        $other->customer=$request->input('customer');
        $other->lastAction=$request->input('lastAction');
        $other->nextAction=$request->input('nextAction');
        $other->progress=$request->input('progress');
        $other->currentProgress='Proposal Ready';
        $other->status=$request->input('status');
        $other->lastStatus=$request->input('lastStatus');
        $other->information=$request->input('information');
        $other->startProject=$request->input('startProject');
        $other->finishProject=$request->input('finishProject');
        $other->AMSegment=$request->input('AMSegment');
        $other->keahlian=$request->input('keahlian');
        $other->EstRevenue=$request->input('EstRevenue');
        $other->deliverable=$request->input('deliverable');
        $other->benefit=$request->input('benefit');
        $other->supportAP=$request->input('supportAP');
    }

        
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
    

        $activity->update();

        return redirect::to('/tableOthers');
    }

}
