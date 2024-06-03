<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class healet extends Controller
{
    //
    public function index()
    {
         return view('index');
    }

    public function about()
    {
         return view('about');
    }
    
    public function shop()
    {
         return view('shop');
    }

    public function blog()
    {
         return view('blog');
    }
}
