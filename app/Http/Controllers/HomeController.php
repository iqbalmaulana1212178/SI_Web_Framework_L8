<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        /* Controller ini akan mengembalikan view dari file front_end/home.blade.php sehingga bootstrap templating dapat 
         tampil di web */
        return view('front_end.home');
    }
}
