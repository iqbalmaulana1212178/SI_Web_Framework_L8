<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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
    /* Route berfungsi untuk menentukan kemana file akan dituju untuk sekarang route digunakan untuk menampilkan (Mencetak Tulisan) namun pada
        fungsinya untuk menentukan tampilan mana yang akan ditampilkan ketika pengguna melakukan interaksi terhadap web
    */
    // Return mengembalikan value (Nilai) pada bentuk umum bahasa pemrograman
    return ('Hallo Dunia aku Iqbal Maulana Bersiap Untuk merasuk ke dalam Laravel 8');
});

Route::get('/go', function () {
    /*
    Pada return view di bawah terdapat routing yang mengarah pada file welcome.blade.php dan terdapat atribut array asosiatif yang membawa
    nilai yang nanti dapat di panggil atau di gunakan di views
    */
    return view(
        'welcome',
        [
            'namaTop' => 'IqLRV8',
            'nama' => 'Mochamad Iqbal Maulana',
            'nim' => 'E41212178',
            'kampus' => 'POLIJE Bondowoso',
            'asal' => 'Lumajang'

        ]
    );
});

/*
Disini Route /user akan menampilkan value dari kelas userController dari file controller.
*/
Route::get('/user', [userController::class, 'index']);

//ini adalah routing untuk mengarahkan form sesuai dengan fungsi dan controller
Route::get('/users', [ManagementUserController::class, 'index']);
Route::get('/users{id}', [ManagementUserController::class, 'create']);

// Method route ini akan menampilkan folder home.blade.php
Route::get('/home', [ManagementUserController::class, 'index']);

// ini akan me routing ke file home yang ada pada frontEnd
Route::get('/homok', [HomeController::class, 'index']);

Route::get('/dashboard',[DashboardController::class,'index']);
