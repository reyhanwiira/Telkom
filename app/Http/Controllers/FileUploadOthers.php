<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadOthers extends Controller
{
      public function index()
    {

        return view('tableOthers.addDocumentOthers');
    }
    

    public function upload()
    {
    	$file = $request->file('filename');
        echo 'File name :'.$file->getClientOriginalName().'<br>';
        echo 'File extension :'.$file->getClientOriginalExtension().'<br>';
        echo 'File path :'.$file->getRealPath().'<br>';
        echo 'File size :'.$file->getSize().'<br>';
        echo 'File MIME Type :'.$file->getMimeType().'<br>';

        //upload file
        $destinationPath='uploads';
        $filename = $file->getClientOriginalName();
        if($file->move($destinationPath,$file->getClientOriginalName())){
            echo "<img src='uploads/".$filename."'>";
        }

    }

}
