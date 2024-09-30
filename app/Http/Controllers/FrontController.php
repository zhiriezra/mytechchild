<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome(){
        return view('front.welcome');
    }

    public function about(){
        return view('front.about');
    }
}
