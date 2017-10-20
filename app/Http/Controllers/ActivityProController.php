<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use App\activity;
use Validator;

class ActivityProController extends Controller
{
 	public function readActPro()
 	{
 		$activitys = Activity::all();

 		return view('tableProactive.editPro');
 	}
}
