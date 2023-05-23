<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class ApiPendidikanController extends Controller
{
    public function getAll(){
        $pendidikan= Pendidikan::all();
        return Response::json($pendidikan, 201);
    }
    public function getPen(Request $request){
        $pendidikan = Pendidikan::find($id);
        return Response::json($pendidikan, 200);
    }
    public function createPen(Request $request){
        Pendidikan::create($request->all());

        return response()->json([
            'status' => 'oke',
            'message' => 'Pendidikan berhasil ditambahkan!'
        ], 201);
    }
    public function updatePen($id, Request $request){
        Pendidikan::find($id)->update($request->all());

        return response()->json([
            'status' => 'oke',
            'message' => 'Pendidikan berhasil dirubah!'
        ],201);
    }
    public function deletePen($id){
        Pendidikan::destroy($id);
        
        return response()->json([
            'status' => 'oke',
            'message' => 'Pendidikan berhasil dihapus!'
        ], 201);
    }
}
