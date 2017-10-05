<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use App\proactive;
use Validator;


class ProactiveController extends Controller
{

    public function read()
    {
    	$proactives = proactive::all();

    	return view('table.index', compact('proactives'));

    }
}
