<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OthersUploadController extends Controller {
   

   public function indexUploadOthers() {

      return view('tableOthers.UploadOthers') ;
   }
   public function showUploadFile(Request $request) {
     
    $product = Activity::create($request->all());
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        }
        return 'Upload successful!';

   }
}