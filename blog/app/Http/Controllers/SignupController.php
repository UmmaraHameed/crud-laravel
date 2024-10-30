<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Add this line

class SignupController extends Controller
{
    // public function get(Request $req)
    // {
    //     return $req;
    // }
    // public function post()
    // {
    //     return "Post route method";
    // }
    // public function put()
    // {
    //     return "put route method";
    // }
    // public function delete()
    // {
    //     return "delete route method";
    // }
    // public function any()
    // {
    //     return "This is any method";
    // }
    // public function group1()
    // {
    //     return "This is goup1 method";
    // }
    // public function group2()
    // {
    //     return "This is goup2 method";
    // }
    public function login(Request $req)
     {
        // return $req;
        //  is used to know the metho  
       echo"The method is ".$req->method();
       echo "<br>";
       echo"The path is ".$req->path();
       echo "<br>";
       echo"The url is ".$req->url();
       echo "<br>";
       echo"The name is ".$req->input('name');
       echo "<br>";
       print_r($req->input());
       echo "<br>";
       //it provide array
       print_r($req->collect());
       echo "<br>";
       if($req->isMethod('post')){
        echo"Execute the post";
       }
        else{
        echo"Not executed anything";
       }
     
     //To get ip
     echo"The name is ".$req->ip();
       echo "<br>";
    }
}
