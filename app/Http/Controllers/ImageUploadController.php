<?php

namespace App\Http\Controllers;

use App\Models\Postimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageUploadController extends Controller
{
     //Add image
     public function addImage(){
        $imageData= Postimage::where('user_id', Auth::user()->id)->get();
        return view('forPages.pictures', compact('imageData'));
    }
    public function editImage(Request $request) {

        $kep = Postimage::find($request->id);
        $kep->fill($request->all());
        $kep->save();

        return  back()->with('success','Kép szerkesztése sikeresen megtörtént');
    

   }


    
    //Store image
    public function storeImage(Request $request){
        $data= new Postimage();

        $data->fill($request->all());
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->user_id = Auth::user()->id;
        $data->save();

        return redirect()->route('imagesadd')->with('success','Sikeresen feltöltötte a képet');
    
    }
    public function deleteImage(Request $request) {

        $kep = Postimage::find($request->id);

        unlink("public/Image/".$kep->image);

        Postimage::where("id", $kep->id)->delete();

        return back()->with("success", "Kép törlése sikeresen megtörtént");

    }
}