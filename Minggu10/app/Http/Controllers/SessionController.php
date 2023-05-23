<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // membuat session
    // pada method ini kita akan membuat session menggunakan fungsi $request->session()->put().
    // nama session dan isi sessionnya bisa kita isi dalam parameter method ini seperti 
    // $request->session()->put('nama','Politeknik Negeri Jember'),berarti kita memerintahkan untuk membuat session
    // 'nama' dan isi session nama tersebut adalah 'Politeknik Negeri Jember'
    public function create(Request $request){
        $request->session()->put('nama','Politeknik Negeri Jember');
        echo "Data telah ditambahkan ke session.";
    }

    // menampilkan isi session
    public function show(Request $request){ // pada method ini membuat pemeriksaaan menggunakan if else,
        // jika ada session nama, makan tampilkan isi dari session nama. jika tidak tampilkan pesan
        if($request->session()->has('nama')){ // berfungsi untuk menegecek jika ada session 'nama'
            echo $request->session()->get('nama'); //berguna untuk menampilkan isi session 'nama'
        } else {
            echo "Tidak ada data dalam session.";
        }
    }

    // menghapus session 
    public function delete(Request $request){
        $request->session()->forget('nama'); // perintah untuk menghapus data pada session nama
        echo "Data telah dihapus dari session.";
    }
}
