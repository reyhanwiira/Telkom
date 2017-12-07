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
        Raisa::create([  
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
    Raisa::create([  
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
    Raisa::create([  
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
    Raisa::create([  
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
    Raisa::create([  
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
    Raisa::create([  
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
    Raisa::create([  
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
        
      
      return Redirect::to('/tableRaisa');
  }
      
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
     

    $raisa->last=$raisa->progress;
    if($request->input('progress')>=0&&$request->input('progress')<=10){
        $raisa->projectName=$request->input('projectName');
        $raisa->segment=$request->input('segment');
        $raisa->description=$request->input('description');
        $raisa->customer=$request->input('customer');
        $raisa->lastAction=$request->input('lastAction');
        $raisa->nextAction=$request->input('nextAction');
        $raisa->progress=$request->input('progress');
        $raisa->currentProgress='Initial Requirement';
        $raisa->status=$request->input('status');
        $raisa->lastStatus=$request->input('lastStatus');
        $raisa->information=$request->input('information');
        $raisa->startProject=$request->input('startProject');
        $raisa->finishProject=$request->input('finishProject');
        $raisa->AMSegment=$request->input('AMSegment');
        $raisa->keahlian=$request->input('keahlian');
        $raisa->EstRevenue=$request->input('EstRevenue');
        $raisa->deliverable=$request->input('deliverable');
        $raisa->benefit=$request->input('benefit');
        $raisa->supportAP=$request->input('supportAP');

    }else if($request->input('progress')>=11&&$request->input('progress')<=20){
        $raisa->projectName=$request->input('projectName');
        $raisa->segment=$request->input('segment');
        $raisa->description=$request->input('description');
        $raisa->customer=$request->input('customer');
        $raisa->lastAction=$request->input('lastAction');
        $raisa->nextAction=$request->input('nextAction');
        $raisa->progress=$request->input('progress');
        $raisa->currentProgress='Initial Solution';
        $raisa->status=$request->input('status');
        $raisa->lastStatus=$request->input('lastStatus');
        $raisa->information=$request->input('information');
        $raisa->startProject=$request->input('startProject');
        $raisa->finishProject=$request->input('finishProject');
        $raisa->AMSegment=$request->input('AMSegment');
        $raisa->keahlian=$request->input('keahlian');
        $raisa->EstRevenue=$request->input('EstRevenue');
        $raisa->deliverable=$request->input('deliverable');
        $raisa->benefit=$request->input('benefit');
        $raisa->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=21&&$request->input('progress')<=30){
        $raisa->projectName=$request->input('projectName');
        $raisa->segment=$request->input('segment');
        $raisa->description=$request->input('description');
        $raisa->customer=$request->input('customer');
        $raisa->lastAction=$request->input('lastAction');
        $raisa->nextAction=$request->input('nextAction');
        $raisa->progress=$request->input('progress');
        $raisa->currentProgress='Menunggu Feedback & Gathering Req';
        $raisa->status=$request->input('status');
        $raisa->lastStatus=$request->input('lastStatus');
        $raisa->information=$request->input('information');
        $raisa->startProject=$request->input('startProject');
        $raisa->finishProject=$request->input('finishProject');
        $raisa->AMSegment=$request->input('AMSegment');
        $raisa->keahlian=$request->input('keahlian');
        $raisa->EstRevenue=$request->input('EstRevenue');
        $raisa->deliverable=$request->input('deliverable');
        $raisa->benefit=$request->input('benefit');
        $raisa->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=31&&$request->input('progress')<=60){
        $raisa->projectName=$request->input('projectName');
        $raisa->segment=$request->input('segment');
        $raisa->description=$request->input('description');
        $raisa->customer=$request->input('customer');
        $raisa->lastAction=$request->input('lastAction');
        $raisa->nextAction=$request->input('nextAction');
        $raisa->progress=$request->input('progress');
        $raisa->currentProgress='Solution Design';
        $raisa->status=$request->input('status');
        $raisa->lastStatus=$request->input('lastStatus');
        $raisa->information=$request->input('information');
        $raisa->startProject=$request->input('startProject');
        $raisa->finishProject=$request->input('finishProject');
        $raisa->AMSegment=$request->input('AMSegment');
        $raisa->keahlian=$request->input('keahlian');
        $raisa->EstRevenue=$request->input('EstRevenue');
        $raisa->deliverable=$request->input('deliverable');
        $raisa->benefit=$request->input('benefit');
        $raisa->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=61&&$request->input('progress')<=90){
        $raisa->projectName=$request->input('projectName');
        $raisa->segment=$request->input('segment');
        $raisa->description=$request->input('description');
        $raisa->customer=$request->input('customer');
        $raisa->lastAction=$request->input('lastAction');
        $raisa->nextAction=$request->input('nextAction');
        $raisa->progress=$request->input('progress');
        $raisa->currentProgress='Solution Development';
        $raisa->status=$request->input('status');
        $raisa->lastStatus=$request->input('lastStatus');
        $raisa->information=$request->input('information');
        $raisa->startProject=$request->input('startProject');
        $raisa->finishProject=$request->input('finishProject');
        $raisa->AMSegment=$request->input('AMSegment');
        $raisa->keahlian=$request->input('keahlian');
        $raisa->EstRevenue=$request->input('EstRevenue');
        $raisa->deliverable=$request->input('deliverable');
        $raisa->benefit=$request->input('benefit');
        $raisa->supportAP=$request->input('supportAP');
    }else if($request->input('progress')>=91&&$request->input('progress')<=99){
        $raisa->projectName=$request->input('projectName');
        $raisa->segment=$request->input('segment');
        $raisa->description=$request->input('description');
        $raisa->customer=$request->input('customer');
        $raisa->lastAction=$request->input('lastAction');
        $raisa->nextAction=$request->input('nextAction');
        $raisa->progress=$request->input('progress');
        $raisa->currentProgress='POC';
        $raisa->status=$request->input('status');
        $raisa->lastStatus=$request->input('lastStatus');
        $raisa->information=$request->input('information');
        $raisa->startProject=$request->input('startProject');
        $raisa->finishProject=$request->input('finishProject');
        $raisa->AMSegment=$request->input('AMSegment');
        $raisa->keahlian=$request->input('keahlian');
        $raisa->EstRevenue=$request->input('EstRevenue');
        $raisa->deliverable=$request->input('deliverable');
        $raisa->benefit=$request->input('benefit');
        $raisa->supportAP=$request->input('supportAP');
    }else{
        $raisa->projectName=$request->input('projectName');
        $raisa->segment=$request->input('segment');
        $raisa->description=$request->input('description');
        $raisa->customer=$request->input('customer');
        $raisa->lastAction=$request->input('lastAction');
        $raisa->nextAction=$request->input('nextAction');
        $raisa->progress=$request->input('progress');
        $raisa->currentProgress='Proposal Ready';
        $raisa->status=$request->input('status');
        $raisa->lastStatus=$request->input('lastStatus');
        $raisa->information=$request->input('information');
        $raisa->startProject=$request->input('startProject');
        $raisa->finishProject=$request->input('finishProject');
        $raisa->AMSegment=$request->input('AMSegment');
        $raisa->keahlian=$request->input('keahlian');
        $raisa->EstRevenue=$request->input('EstRevenue');
        $raisa->deliverable=$request->input('deliverable');
        $raisa->benefit=$request->input('benefit');
        $raisa->supportAP=$request->input('supportAP');
    }
        
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

    

    public function downloadRaisa($original_filename)
    {
       $entry = Activity::where('original_filename', '=', $original_filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);
 
        return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
   }
}
