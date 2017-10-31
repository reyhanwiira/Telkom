<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Redirect;
use View;
use App\proactive;
use Validator;
use App\activity;
use App\resume;

class ChartController extends Controller
{
	public function readChart()
    {
    	$resume = Resume::all();

    	return view('detail', compact('resume'));
    }

}
