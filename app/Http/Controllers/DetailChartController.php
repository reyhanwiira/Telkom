<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use View;
use App\detailChart;

class DetailChartController extends Controller
{
    public function readChart()
    {
    	$detailChart = DetailChart::all();

    	return view('detail', compact('detailChart'));
    }
}
