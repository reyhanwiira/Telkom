<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proactive;
use App\raisa;
use App\scn;
use App\other;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function read()
    {
        return redirect::to('home');
    }
    public function donutPro()
    {
        $proactives0 = Proactive::where('status','=', 'P0')->count();
        $proactives1 = Proactive::where('status','=', 'P1')->count();
        $proactives2 = Proactive::where('status','=', 'P2')->count();
        $proactives3 = Proactive::where('status','=', 'P3')->count();
        $lastProactives0 = Proactive::where('lastStatus','=', 'P0')->count();
        $lastProactives1 = Proactive::where('lastStatus','=', 'P1')->count();
        $lastProactives2 = Proactive::where('lastStatus','=', 'P2')->count();
        $lastProactives3 = Proactive::where('lastStatus','=', 'P3')->count();
        $raisa0 = Raisa::where('status','=', 'P0')->count();
        $raisa1 = Raisa::where('status','=', 'P1')->count();
        $raisa2 = Raisa::where('status','=', 'P2')->count();
        $raisa3 = Raisa::where('status','=', 'P3')->count();
        $lastRaisa0 = Raisa::where('lastStatus','=', 'P0')->count();
        $lastRaisa1 = Raisa::where('lastStatus','=', 'P1')->count();
        $lastRaisa2 = Raisa::where('lastStatus','=', 'P2')->count();
        $lastRaisa3 = Raisa::where('lastStatus','=', 'P3')->count();
        $scn0 = SCN::where('status','=', 'P0')->count();
        $scn1 = SCN::where('status','=', 'P1')->count();
        $scn2 = SCN::where('status','=', 'P2')->count();
        $scn3 = SCN::where('status','=', 'P3')->count();
        $lastScn0 = SCN::where('lastStatus','=', 'P0')->count();
        $lastScn1 = SCN::where('lastStatus','=', 'P1')->count();
        $lastScn2 = SCN::where('lastStatus','=', 'P2')->count();
        $lastScn3 = SCN::where('lastStatus','=', 'P3')->count();
        $others0 = Other::where('status','=', 'P0')->count();
        $others1 = Other::where('status','=', 'P1')->count();
        $others2 = Other::where('status','=', 'P2')->count();
        $others3 = Other::where('status','=', 'P3')->count();
        $lastOthers0 = Other::where('lastStatus','=', 'P0')->count();
        $lastOthers1 = Other::where('lastStatus','=', 'P1')->count();
        $lastOthers2 = Other::where('lastStatus','=', 'P2')->count();
        $lastOthers3 = Other::where('lastStatus','=', 'P3')->count();
        return view('home', compact('proactives0','proactives1','proactives2','proactives3','lastProactives0','lastProactives1','lastProactives2','lastProactives3','raisa0','raisa1','raisa2','raisa3','lastRaisa0','lastRaisa1','lastRaisa2','lastRaisa3','scn0','scn1','scn2','scn3','lastScn0','lastScn1','lastScn2','lastScn3','others0','others1','others2','others3','lastOthers0','lastOthers1','lastOthers2','lastOthers3'));
    }
 
}
