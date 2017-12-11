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
use Carbon\Carbon;

class ChartController extends Controller
{
	public function readChart()
    {
    	$resume = Resume::all();

    	return view('home', compact('resume'));
    }

    public function readChartDetailProact()
    {
        $current_time = Carbon::now();
        $deadline = Carbon::now()->addWeeks(2);
        $proactive = Proactive::where('status','=','P1')->get();

        $activeProject = Proactive::where('status','=','P1')->where('updated_at','<=',$deadline)->count();
        $inactiveProject = Proactive::where('status','=','P1')->where('updated_at','>=',$deadline)->count();
    	return view('detailProact', compact('proactive','current_time','activeProject','inactiveProject'));
    }

    public function readChartDetailRaisa()
    {
        $current_time = Carbon::now();
        $deadline = Carbon::now()->addWeeks(2);
        $raisa = Raisa::where('status','=','P1')->get();

        $activeProject = Raisa::where('status','=','P1')->where('updated_at','<=',$deadline)->count();
        $inactiveProject = Raisa::where('status','=','P1')->where('updated_at','>=',$deadline)->count();
        return view('detailRaisa', compact('raisa','current_time','activeProject','inactiveProject'));
    }

    public function readChartDetail()
    {
        $other = Other::where('status','=','P1')->get();

        return view('detailOther', compact('other'));
    }
}
