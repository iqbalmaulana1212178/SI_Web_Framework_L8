<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Backend'], function () {
    Route::get('api_pegawai', [App\Http\Controllers\ApiPegawaiController::class, 'getAll']);
    Route::get('api_pegawai/{id}', [App\Http\Controllers\ApiPegawaiController::class, 'getPen']);
    Route::post('api_pegawai', [App\Http\Controllers\ApiPegawaiController::class, 'createPen']);
    Route::put('api_pegawai/{id}', [App\Http\Controllers\ApiPegawaiController::class, 'updatePen']);
    Route::delete('api_pegawai/{id}', [App\Http\Controllers\ApiPegawaiController::class, 'deletePen']);
});
