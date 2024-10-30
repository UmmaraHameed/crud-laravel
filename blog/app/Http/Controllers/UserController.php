<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// to check view exit or not 
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades\DB;
   use \App\Models\User;
class UserController extends Controller
{
//  function getUser(){
//     return view('About');
//  }
 
//     function aboutUser(){
//       return " Hello Ummara";
//     //    $names="Ummara";
//     //    return view('about',[name=>$names]);
//     }
//     function getUsername($name){
//         return " Hello".$name;
//      }
//      function getadmin(){
//         // used to chk view exists or not
//         if(View::exists('admin.signup')){
//             return view('admin.signup');
//         }else
//         echo "No view exists";
        
//      }
//     function userhome(){
//       $name="Ummara";
//       $users=['Zoya','Sara','Ummara'];
//       return view('Home',['name'=>$name,'users'=>$users]);
//     }
//  function users(){
//     $users= DB::select('select * from users');
//     return view('Users',['users'=>$users]);
//  }

    function query(){
        // $response = User::all();
        // $response = User::get();
        $response = User::find(1);
         return view('Users',['$data'=>$response]);
    }

}
