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
}