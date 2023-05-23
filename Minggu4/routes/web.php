<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\backend\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
// Route::get('user', 'ManagementUserController@index');
Route::get('index', [ManagementUserController::class, 'index']);
Route::resource('/user', 'ManagementUserController');
Route::get('/home', function() {
    return view("home");
});

//Tugas Minggu ke4 (1)
// route dengan beralamatkan landingpage  dengan mengambil class index yang berada pada folder controller
Route::get('LandingPage', [HomeController::class, 'index'])->name('home');

//Tugas Minggu ke4 (2)
// route dengan beralamatkan dashboard  dengan mengambil class index yang berada pada folder controller
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');