<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
 
class CobaUpload extends Controller
{
    public function index(){
        return view('upload');
    }
 
    public function upload(Request $request){
        $file = $request->file('filename');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
       	$file->getRealPath();
        $file->getSize();
        $file->getMimeType();
 
        //upload file
        $destinationPath='uploads';
        $filename = $file->getClientOriginalName();
        if($file->move($destinationPath,$file->getClientOriginalName())){
            echo "<img src='uploads/".$filename."'>";
        }
         
 
    }
}