<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use View;
use App\detailchart;

class DetailChartController extends Controller
{
    public function readChart()
    {
    	$detailChart = detailChart::all();

    	return view('detail', compact('detailChart'));
    }
}
