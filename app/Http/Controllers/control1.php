<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class control1 extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }
}
