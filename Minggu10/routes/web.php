<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route 'session/create' akan mengakses method create dalam controller SessionController
Route::get('/session/create',[App\Http\Controllers\SessionController::class, 'create']);
Route::get('/session/show',[App\Http\Controllers\SessionController::class, 'show']);
Route::get('/session/delete',[App\Http\Controllers\SessionController::class, 'delete']);

Route::get('/pegawai/{nama}', [App\Http\Controllers\PegawaiController::class, 'index']);
Route::get('/formulir', [App\Http\Controllers\PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [App\Http\Controllers\PegawaiController::class, 'proses']);

Route::get('/cobaerror', 'CobaController@index');

Route::get('/upload', 'UploadController@upload')->name('upload');
Route::post('/upload/proses', 'UploadController@proses_upload')->name('upload.proses');