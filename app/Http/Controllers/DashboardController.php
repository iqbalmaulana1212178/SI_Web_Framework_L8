<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        /* Function ini berfungsi untuk menampilkan view dari file
        resource view */
        return view('back_end.dashboard');
    }
}
