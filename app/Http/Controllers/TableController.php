<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Controllers\Table;

class TableController extends Controller
{
    public function read()
    {
    	$proactive = proactive::all();

    	return view('table.index', compact('proactive'));

=======
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
>>>>>>> fd17df7685b9e5896899db470cd1c855350c4904
    }
}
