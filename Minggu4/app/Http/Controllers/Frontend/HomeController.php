<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request,
App\Http\Controllers\Controller;
//merupakan class control yang menjalankan function index yang mengembalikan view pada file home pada frontend 
class HomeController extends Controller
{
    public function index(){
        return view('Frontend/home');
    }
}
