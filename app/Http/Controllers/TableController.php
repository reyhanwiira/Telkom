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
use App\raisa;

class TableController extends Controller
{
    public function index()
    {
    	$proactives = Proactive::all();
    	$raisas = Raisa::all();

    	return view('table.index', compact('proactives','raisas'));
    }
}
