<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;

class studentController extends Controller
{
    //
    // function getstudents(){
    //     //How to call model function in controll
    //     $fun=new \App\Models\Student;
    //     echo $fun->test();
    //     $students=\App\Models\Student::all();
    //     return view('student',['data'=>$students]);
    // }
    // function add(Request $req){
    //     $student=new Student();
    //     // return $req;
    //     $student->name=$req->name;
    //     $student->email=$req->email;
    //     $student->batch=$req->batch;
    //     $student->save();
    //     if($student){
    //         echo"New student is added successfully";
    //     }

//  fetch all data from database
    function list(){
        return student::all();
    }
    function addStudent(Request $req){
    //   store data in database through api post
    $student = new Student();
    $student->name=$req->name;
    $student->email=$req->email;
    $student->batch=$req->batch;
    if($student->save()){
        return "student added";
    }else{
        return"operation failed";
    }
    }
    
}
