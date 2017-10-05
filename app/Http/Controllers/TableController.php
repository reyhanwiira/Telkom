<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Table;

class TableController extends Controller
{
    public function read()
    {
    	$proactive = proactive::all();

    	return view('table.index', compact('proactive'));

    }
}
