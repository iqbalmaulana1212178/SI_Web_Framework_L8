<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        // mengambil data dari table tb_siswa
        // $siswa = DB::table('tb_siswa');

        // mengirim data siswa ke view index
        // return view('index', ['siswa' => $siswa]);
        return view('index',[
            'siswa'=> Siswa::all()
        ]);
    }
    public function tambah(){ // method untuk menampilkan view form tambah siswa
        // memanggil view tambah
        return view('tambah');
    }
    public function store(Request $request){ // method untuk insert data ke table tb_siswa
        // insert data ke table tb_siswa
        DB::table('tb_siswa')->insert([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat]
        );
        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    }
    public function edit($id){ // method untuk edit data siswa
        // mengambil data siswa berdasarkan id yang dipilih
        $siswa = DB::table('tb_siswa')->where('id', $id)->get();

        // passing data siswa yang didapat ke view edit.blade.php
        return view('edit', ['siswa' => $siswa]);
    }
    public function update(Request $request){ // updata data siswa
        // update data siswa
        DB::table('tb_siswa')->where('id', $request->id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat
        ]);
        return redirect('/siswa');
    }
    public function hapus($id){ // method untuk hapus data siswa
        // menghapus data siswa berdasarkan id yang dipilih
        DB::table('tb_siswa')->where('id',$id)->delete();

        // alihkan halaman ke halaman utama
        return redirect('/siswa');
    }
}
