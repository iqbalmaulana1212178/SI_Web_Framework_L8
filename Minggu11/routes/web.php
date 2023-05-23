<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
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

// Route::get('/upload', [UploadController::class, 'upload']);
// Route::post('/upload/proses', [UploadController::class, 'proses_upload']);

Route::get('/upload', [App\Http\Controllers\UploadController::class, 'upload'])->name('upload');

Route::post('/upload/proses', [App\Http\Controllers\UploadController::class, 'proses_upload'])->name('upload.proses');

Route::post('/upload/resize', [App\Http\Controllers\UploadController::class, 'resize_upload'])->name('upload.resize');

Route::get('/dropzone', [App\Http\Controllers\UploadController::class, 'dropzone'])->name('dropzone');
Route::post('/dropzone/store', [App\Http\Controllers\UploadController::class, 'dropzone_store'])->name('dropzone.store');
