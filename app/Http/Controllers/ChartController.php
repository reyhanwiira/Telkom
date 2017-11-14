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

    	return view('home', compact('resume'));
    }

    public function readChartDetailProact()
    {
    	$resume = Resume::all();

    	return view('detail', compact('resume'));
    }

    public function readChartDetailRaisa()
    {
        $resume = Resume::all();

        return view('detailRaisa', compact('resume'));
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
