<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use File;

use Image;

class UploadController extends Controller
{
    public function upload(){
        return view('upload');
    }
    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);
        $file = $request->file('file');
        echo 'File Name: '.$file->getClientOriginalName().'<br>';
        echo 'File Extension: '.$file->getClientOriginalExtension().'<br>';
        echo 'File Real Path: '.$file->getRealPath().'<br>';
        echo 'File Size: '.$file->getSize().'<br>';
        echo 'File Mime Type: '.$file->getMimeType().'<br>';
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $file->getClientOriginalName());

    }
    public function dropzone(){
        return view('dropzone');
    }
    public function dropzone_store(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('img/dropzone'), $imageName);
        return response()->json(['success'=> $imageName]);
    }
    public function pdf_upload(){
        return view('uploadfile');
    }
    public function pdf_store(Request $request)
    {
        $pdf = $request->file('file');

        $pdfName = 'pdf_'.time().'.'.$pdf->extension();
        $pdf->move(public_path('pdf/dropzone'), $pdfName);
        return response()->json(['success' => $pdfName]);
    }
}
