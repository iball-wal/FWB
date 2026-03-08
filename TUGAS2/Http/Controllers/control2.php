<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class control2 extends Controller
{
    public function portfolio(){
        return view('portfolio');
    }

    public function blog(){
        return view('blog');
    }

    public function contack(){
        return view('contack');
    }

}
