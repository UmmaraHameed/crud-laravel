<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;

class ImageController extends Controller
{
    public function upload(Request $req)
    {
        $path = $req->file('file')->store('public');
        // Corrected to properly split and access the path
        $pathArray = explode("/", $path);
        $imgpath = $pathArray[1];
        $Image=new image();
        $Image->path=$imgpath;
        //Store function is used in database
    //   return $Image->save();
    if($Image->save()){
        return redirect('list');
    }else{
        return"Error! Try after sometime";
    }
    }
    function list(){
    $images=image::all();
    //It display record on the  view page
    return view('display',['imgData'=>$images]);
    }
}
