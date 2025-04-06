<?php

use Illuminate\Support\Facades\Route;
  // use App\Http\Controllers\UserController;
//  use App\Http\Controllers\studentController;
//  use App\Http\Controllers\ApiController;
//  use App\Http\Controllers\FormController;
  // use App\Http\Controllers\SignupController;
    // use App\Http\Controllers\loginController;
    // use App\Http\Controllers\UploadController;
    use App\Http\Controllers\CandidateController;
    // use App\Http\Controllers\ImageController;
// 
// //when only open view 
Route::view('/','welcome');
//data pass from website

// Route::get('/About/{name}', function ($name) {
//     echo $name;
//     return view('About');
// });

//Create routes for contrller
//  Route::get('user',[UserController::class,'query']);
// Route::get('user',[UserController::class,'getuser']);
// Route::get('about',[UserController::class,'aboutuser']);
//route named
// Route::get('user/{name}',[UserController::class,'getUsername'])->name('users');
// Route::view('signup','signup')->middleware('guard');
//When there is two or more midleware assigned to only one routes
// Route::view('user-form','user-form')->middleware([Agecheck::class,Country::class]);

//  Route::post('adduser', [FormController::class, 'adduser']);
//  Route::POST('signup', [SignupController::class, 'signup']);

// Grouping with controller 
// Route::controller(UserController::class)->group(function(){
//  Route::get('admin','getadmin');
// Route::get('homes','userhome');

// });
// Route::get('users',[UserController::class,'users']);
// Route::get('students',[studentController::class,'getstudents']);
// Route::get('api',[ApiController::class,'queries']);
// Route::get('signup',[SignupController::class,'get']);
// Route::view('form','signup');
// Route::post('signup',[SignupController::class,'post']);
// Route::put('signup',[SignupController::class,'put']);
// Route::delete('signup',[SignupController::class,'delete']);
// Route::any('signup',[SignupController::class,'any']);
// Route::match(['post','get'],'/signup',[SignupController::class,'group1']);
// Route::match(['put','delete'],'/signup',[SignupController::class,'group2']);
// Route::view('Req','signup');
// Route::post('signup',[SignupController::class,'login']);
// Route::post('login',[loginController::class,'login']);
// Route::post('login',[loginController::class,'adduser']);
// //used for sessiojn closed
// // Route::get('logout',[loginController::class,'logout']);
// Route::view('login','login');
// // Route::view('profile','profile');
 // Route::view('upload','upload');
  // Route::post('upload',[UploadController::class,'upload']);
//   Route::view('about','about');
 // Route::post('upload',[ImageController::class,'upload']);
// Route::get('list',[ImageController::class,'list']);
// Route::view('about2','about2');
// Route::view('home2','home2');
// Route::view('login2','login2');
// Route::view('admin','admin');



// Show Add Candidate form
Route::get('form', [CandidateController::class, 'create']);

// Store new candidate
Route::post('form', [CandidateController::class, 'store']);

// List + search candidates
Route::get('list', [CandidateController::class, 'index']);

// Delete single candidate
Route::get('delete/{id}', [CandidateController::class, 'destroy']);

// Show edit form
Route::get('edit/{id}', [CandidateController::class, 'edit']);

// Update candidate
Route::put('edit-candidate/{id}', [CandidateController::class, 'update']);

// Delete multiple candidates & custom route
Route::post('delete_multi', [CandidateController::class, 'delete_multi']);
