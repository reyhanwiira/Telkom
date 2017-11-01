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
use App\resume;


class ResumeController extends Controller
{
    public function editResume($id)
    {
      
        $resume = resume::find($id);

      return view('/editResume',compact('resume'));
    }

     public function updateResume(Request $request, $id)
    {
        $resume = resume::find($id);
        $resume->p0Scn=$request->input('p0Scn');
        $resume->p1Scn=$request->input('p1Scn');
        $resume->p2Scn=$request->input('p2Scn');
        $resume->p3Scn=$request->input('p3Scn');
        $resume->p0Raisa=$request->input('p0Raisa');
        $resume->p1Raisa=$request->input('p1Raisa');
        $resume->p2Raisa=$request->input('p2Raisa');
        $resume->p3Raisa=$request->input('p3Raisa');
        $resume->p0Other=$request->input('p0Other');
        $resume->p1Other=$request->input('p1Other');
        $resume->p2Other=$request->input('p2Other');
        $resume->p3Other=$request->input('p3Other');
        $resume->p0Proactive=$request->input('p0Proactive');
        $resume->p1Proactive=$request->input('p1Proactive');
        $resume->p2Proactive=$request->input('p2Proactive');
        $resume->p3Proactive=$request->input('p3Proactive');
        $resume->update();

      return redirect('/home');
    }
}
