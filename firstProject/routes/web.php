<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/about" , function (){
//     return view('about');
// });

// // Route::view("/about" , 'about');

// Route::get("/user/{name}" , function ($name) {
//     // echo $name;
//     return view('user' , ['name' => $name]);
// });

// Route::redirect('/' , '/about');














Route::get("/channel" , [UserController::class  , "channel"]);
Route::get("/about" , [UserController::class , "aboutUser"]);

Route::get("getName/{name}" , [UserController::class , "getName"]);