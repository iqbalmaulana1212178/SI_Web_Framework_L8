<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        // fungsi ini me return view register
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    // fungsi store yaitu untuk menyimpan data pengguna ke DB
    public function store(Request $request)
    {
        // variabel ini berisi asosiatif array yang berisi data pengguna yang 
        // nanti akan di insert ke DB dan memvalidasi input pengguna
       $validatedData = $request->validate([
            'name' => 'required',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['email:dns', 'required', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255' ]
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
       $validatedData['password'] =  Hash::make($validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success', 'Berhasil Registrasi sekarang kamu orang ngawi Hore Hore!');
        // lakukan ini jika Pengguna berhasil register
        return redirect('/login')->with('success', 'Berhasil Registrasi Ngawi Tersimpan!');
    }
}
