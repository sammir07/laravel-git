<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regis(){
        return view('register');
    }
    public function selamat(){
        return view('selamat');
    }
}
