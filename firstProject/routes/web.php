<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about" , function (){
    return view('about');
});

// Route::view("/about" , 'about');

Route::get("/user/{name}" , function ($name) {
    // echo $name;
    return view('user' , ['name' => $name]);
});

Route::redirect('/' , '/about');