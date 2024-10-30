<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
    // Route::get("/test" ,function(){
    // return ["name"=>"Ummara","channel"=>"Code by step"];
    // });
    Route::get('students',[studentController::class,'list']);
    Route::post('add-student',[studentController::class,'addStudent']);