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
use App\raisa;
use App\scn;
use App\other;

class ChartController extends Controller
{
	public function readChart()
    {
    	$resume = Resume::all();

    	return view('home', compact('resume'));
    }

    public function readChartDetailProact()
    {
        $proactive = Proactive::where('status','=','P1')->get();

    	return view('detailProact', compact('proactive'));
    }

    public function readChartDetailRaisa()
    {
        $raisa = Raisa::where('status','=','P1')->get();

        return view('detailRaisa', compact('raisa'));
    }

    public function readChartDetail()
    {
        $other = Other::where('status','=','P1')->get();

        return view('detailOther', compact('other'));
    }
}
