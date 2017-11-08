<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
use View;
use Validator;
use App\activity;

class UploadProactiveController extends Controller
{
    public function uploadPro(Request $request)
    {
        $files = Request::file('import_file');

  //If the array is not empty
  if ($files[0] != '') {
    foreach($files as $file) {
      // Set the destination path
      $destinationPath = 'uploads';
      // Get the orginal filname or create the filename of your choice
      $filename = $file->getClientOriginalName();
      // Copy the file in our upload folder
      $file->move($destinationPath, $filename);
    }
  }
  // Retrun a redirection or a view 
 


    }
}
