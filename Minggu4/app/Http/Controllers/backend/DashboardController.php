<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
//merupakan class control yang menjalankan function index yang mengembalikan view pada file home pada backend
class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }
    //
}
