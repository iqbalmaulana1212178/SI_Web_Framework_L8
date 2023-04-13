<?php

namespace App\Http\Controllers;

use Hamcrest\Core\JavaForm;
use Illuminate\Http\Request;

class userController extends Controller
{

    public function index()
    {
        /*
         Ini adalah value dari controller yang akan mengembalikan nilai berupa teks yang akan di tampilkan pada vieww
         jadi view hanya memanggil kelas utama lalu dilanjutkan dengan memanggil fungsi
         */
        return 'Halo ini adalah controller jika tadi saya mencetak teks dari Routes sekarang saya akan mencetak teks dari Controller';
    }
}


