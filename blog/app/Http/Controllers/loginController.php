<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
  // function login(Request $data){
  //   //store name in the session
  //   $data->session()->put('name', $data->input('name'));
  //   //to chck data store in session or not
  //   // echo session('name');
  //   return  redirect('profile');
  // }
  // function logout(){
  //   //pull the session means remove from the session
  //   session()->pull('name');
  //   return  redirect('profile'); 
  // }
  function adduser(Request $data){
    //also add multiple messages
    $data->session()->flash('message','User had been added successfuly');
    //your db code
    return redirect('login');

  }
}
