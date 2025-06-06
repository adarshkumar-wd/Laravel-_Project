<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
     function channel($name) {
        return "Adarsh Kumar $name";
    }

    function aboutUser(){
        return "He is a Student" ;
    }

    // Redirect to another View

    function getName($name){
        return view("user" , ["name" => $name]);
    }

}
