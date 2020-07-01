<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        $first = $request["First name"];
        $last = $request["Last name"];
        return view('welcome', ["First name" => $first], ["Last name" => $last]);
    }

    public function post(Request $request){
        $nama = $request["First name"];
        return "$nama";
    }
}
