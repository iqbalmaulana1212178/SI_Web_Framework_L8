<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index(){
    //return "Halo ini adalah method index, dalam controller ManagementUser.";
    $nama = "Fara Derliana";

    $pelajaran = ["Algoritma & Pemograman","Kalkulus","Pemograman Web"];
    
    return view('home', compact('nama','pelajaran'));
    }
    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambaah data user";
    }
    public function store(Request $request)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user baru";
    }
    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user id=" .$id;
    }
    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" .$id;
    }
    public function update(Request $request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" .$id;
    }
    public function destroy($id)
    {
        return "Method ini nantinya akan digunakan untuk menghapus data user dengan id=" .$id;
    }
}