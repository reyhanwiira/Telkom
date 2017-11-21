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

class ChartController extends Controller
{
	public function readChart()
    {
    	$resume = Resume::all();

    	return view('home', compact('resume'));
    }

    public function readChartDetailProact()
    {
    	$resume = Resume::all();

    	return view('detailProact', compact('resume'));
    }

    public function readChartDetailRaisa()
    {
        $resume = Resume::all();
        $raisa = Raisa::all();

        return view('detailRaisa', compact('resume','raisa'));
    }

    public function readChartDetailScn()
    {
        $resume = Resume::all();

        return view('detailScn', compact('resume'));
    }

    public function readChartDetail()
    {
        $resume = Resume::all();

        return view('detailOther', compact('resume'));
    }
}
