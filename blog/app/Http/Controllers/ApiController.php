<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //
    // function queries(){
    //     $result=DB::table('users')->get();
        //   $result=DB::table('users')->get();
        //  $result = DB::table('users')->where('name', 'zoya')->get();
        //  $result = DB::table('users')->first();
        //  $result=[$result];
        //  $result = DB::table('users')->insert(
        //     [
        //     'name'=>'Tony',
        //     'email'=>'Tony789@gmail.com',
        //     'phone'=>'90987621',
        // ]);
        // if($result){
        //      return"Data inserted";
           
        // }else{
        //     return"Data not  inserted";
        // }

        // $result = DB::table('users')->where('name','Tony')->update(['phone'=>'11122']);
        //     if($result){
        //          return"Data updated";
               
        //     }else{
        //         return"Data not updated";
        //     }
        //  $result = DB::table('users')->where('name','Tony')->delete();
        //     if($result){
        //          return"Data deleted";
               
        //     }else{
        //         return"Data not deleted";
        //     }
        // return view('userapi',['data'=>$result]);
}
