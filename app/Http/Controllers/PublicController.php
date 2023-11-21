<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function welcome(){
        return view('welcome');
    }

    public function userPage(){
        return view('userPage');
    }
}
