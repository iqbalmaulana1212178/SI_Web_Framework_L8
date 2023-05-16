<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    // Berfungsi untuk menampilkan login
    public function index()
    {
        return view ('login.index',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // Berguna untuk memvalidasi input pengguna
        $credentials = $request->validate
        ([
            'email' => 'required|email:dns',
            'password' => 'required'

        ]);

            // disini dilakikan pencocokan ke database jika berhasil maka bawa pengguna ke /dashboard
            // pengguna akan diberikan sesi
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }
        // dd('berhasil  login '.$request);
        // jika pengguna gagal maka akan diberikan pesan redirect
        return back()->with('loginError', 'Login has Failed ');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
