<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class FileUploadOthers extends Controller
{
      public function index()
    {

        return view('tableOthers.addDocumentOthers');
    }
    

    public function upload()
    {
    	public function upload(Request $request){
        $files = $request->file('file');

        if(!empty($files)):

            foreach($files as $file):
                Storage::put($file->getClientOriginalName(), file_get_contents($file));
            endforeach;

        endif;

        return \Response::json(array('success' => true));
    }

    }


    public function fileUpload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        $this->postImage->add($input);

        return back()->with('success','Image Upload successful');
    }

}
