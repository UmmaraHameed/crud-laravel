<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $req){
        // echo "Uploaded fie";
        //auto generated file name and also write the folder name in which file is store
        // $path=$req->file('file')->store('public');
        //Give file name according own choice
        $path=$req->file('file')->storeAs('public','dumy1.png');
         $filenameArray=explode("/",$path);
        $filename=$filenameArray[1];
        //display on view 
        return view('display',['path'=>$filename]);

    }
}
