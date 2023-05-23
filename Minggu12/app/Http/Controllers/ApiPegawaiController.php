<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

class ApiPegawaiController extends Controller
{
    public function getAll()
    //membuat class untuk menangkap semua data yg brada pada pekerjaan
    {
        $pegawai = Pegawai::all();
        return Response::json($pegawai, 201);
    }
    public function getPen($id)
    //class yang menangkap berdasarkan id
    {
        $pegawai = Pegawai::find($id);
        return Response::json($pegawai, 200);
    }
    public function createPen(Request $request)
    //class menangkap create session
    {
        Pegawai::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message'=>'Pekerjaan berhasil ditambahkan!'
        ], 201);
    }
    public function updatePen($id, Request $request)
    //class untuk update yang melakukan request berdasarkan id pada field
    {
        Pegawai::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message'=>'Pekerjaan berhasil dirubah!'
        ], 201);
    }
    public function deletePen($id)
    //class function delete
    {
        Pegawai::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message'=>'Pegawai berhasil dihapus!'
        ], 201);
    }


}
