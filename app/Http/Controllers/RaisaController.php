<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use App\raisa;
use Validator;

class RaisaController extends Controller
{
    public function read()
    {
    	$raisas = Raisa::all();


    	return view('table.index', compact('raisas'));
    }


}
