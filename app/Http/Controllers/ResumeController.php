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
       

      return redirect('/home');
    }
}
