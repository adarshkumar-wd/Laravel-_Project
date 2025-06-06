<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    //
    function UserLogin(){

        if (View::exists('Auth.login')) {   // It chakes the mentioned view page is available or not..
            return view('Auth.login');
        } else {
            echo "No View Found" ;
        }
    }

}
