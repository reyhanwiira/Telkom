<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proactive;
use App\raisa;
use App\scn;
use App\other;

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
    public function index()
    {
       return view('home');
    }

    public function donutPro()
    {
        $proactives0 = Proactive::where('status','=', 'P0')->count();
        $proactives1 = Proactive::where('status','=', 'P1')->count();
        $proactives2 = Proactive::where('status','=', 'P2')->count();
        $proactives3 = Proactive::where('status','=', 'P3')->count();
        $raisa0 = Raisa::where('status','=', 'P0')->count();
        $raisa1 = Raisa::where('status','=', 'P1')->count();
        $raisa2 = Raisa::where('status','=', 'P2')->count();
        $raisa3 = Raisa::where('status','=', 'P3')->count();
        $scn0 = SCN::where('status','=', 'P0')->count();
        $scn1 = SCN::where('status','=', 'P1')->count();
        $scn2 = SCN::where('status','=', 'P2')->count();
        $scn3 = SCN::where('status','=', 'P3')->count();
        $others0 = Other::where('status','=', 'P0')->count();
        $others1 = Other::where('status','=', 'P1')->count();
        $others2 = Other::where('status','=', 'P2')->count();
        $others3 = Other::where('status','=', 'P3')->count();

        return view('home', compact('proactives0','proactives1','proactives2','proactives3','raisa0','raisa1','raisa2','raisa3','scn0','scn1','scn2','scn3','others0','others1','others2','others3'));
    }

 
}
