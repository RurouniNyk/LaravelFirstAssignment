<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function news()
    {
        return view('news');
    }
    public function music()
    {
        return view('music');
    }
    public function video()
    {
        return view('video');
    }
}


