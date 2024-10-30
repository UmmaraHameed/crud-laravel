<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Candidate;

class CandidateController extends Controller
{
    //
    function add(Request $req){
        $candidate=new Candidate();
        // return $req;
        $candidate->name=$req->name;
        $candidate->email=$req->email;
        // $candidate->phoneno=$req->phoneno;
        $candidate->save();
        if($candidate){
            // echo"New candidate is added successfully";
            return redirect('list');
        }
        else{
            return "Operation Failed";
        }
    }
    
 function list(){
    //all function is used to display all record from the database
//    $data=candidate::all();
    $data=candidate::paginate(3);
    return view('listcandidate',['candidates'=>$data]);
 }
 function delete($id){
    //destory function is to delete data from database
    $isDeleted=candidate::destroy($id);
    if($isDeleted){
         return redirect('list');
    }
    
  }
  function edit($id){
    //its only move to edit form and when i click on cancel to return back the view
    $candidate=candidate::find($id);
     return view('candidateedit',['data'=>$candidate]);
}
function update(Request $req,$id){
    $candidate=candidate::find($id);
    $candidate->name=$req->name;
    $candidate->email=$req->email;
   if( $candidate->save()){
    return redirect('list');
   }
   else{
    return"Candidate is not updated";
   }
}
function search(Request $req){
    $data=candidate::where('name','like',"%$req->search%")->get();
    return view('listcandidate',['candidates'=>$data,'search'=>$req->search]);
}
function delete_multi(Request $req){
    $result=candidate::destroy($req->ids);
  if($result) {
    return redirect('list');
  }else{
    return"student data not deleted";
  }

}
}