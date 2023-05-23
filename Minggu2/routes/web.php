<?php

use Illuminate\Support\Facades\Route;

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

                                            // ACARA 5

Route::get('/oke', function() { // method get digunakan untuk menjalankan fungsi pada route
    // '/oke' alamat URI yang digunakan untuk menjalankan sebuah fungsi pada route.
    return 'Hello Fara'; // memanggil fungsi yang akan dijalankan ketika suatu URI diakses dengan method yang sesuai.
}); 

Route::get('/user', [UserController::class, 'index']); // route ini untuk mengakses atau memanggil controller dari route.

Route::get($uri, $callback); // fungsi get untuk mengirimkan data ke controller.
Route::post($uri, $callback); // fungsi post untuk menerima data yg dikirimkan oleh controller GET untuk diproses.
Route::put($uri, $callback); // fungsi put untuk menerima data dgn tujuan proses perubahan data yg logika programnya diserahkan ke controller.
Route::patch($uri, $callback); // fungsi patch untuk menerima data dgn tujuan proses perubahan data yg logika programnya diserahkan ke controller.
Route::delete($uri, $callback); // fungsi delete untuk perintah penghapusan ke controller
Route::options($uri, $callback); // fungsi options 

Route::match(['get', 'post'], '/', function () { // route ini sama saja dengan dasar route hanya saja pada parameter pertama menambahkan sebuah array
    // yg berisi nama method utk mengakses routes
});

Route::any('/', function () {
    //
});

// route ini digunakan untuk redirect ke URL lain
Route::redirect('/here', '/there');
Route::redirect('/here', '/there', 301);
Route::permanentRedirect('/here', '/there');

// route ini untuk menampilkan halaman view
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

                                            // ACARA 6

Route::get('users/{id}', function ($id) {
    return 'User '.$id;
});

//  Parameter Opsional
Route::get('users/{name?}', function ($name = null) {
    return $name;
});

Route::get('users/{name?}', function ($name = 'Fara') {
    return $name;
});

// Regular Expression Constraints

Route::get('/user/{name}', function (string $name) {
    // ...
})->where('name', '[A-Za-z]+');
 
Route::get('/user/{id}', function (string $id) {
    // ...
})->where('id', '[0-9]+');
 
Route::get('/user/{id}/{name}', function (string $id, string $name) {
    // ...
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Global Constraints
Route::get('/user/{id}', function (string $id) {
    
});

// Encoded Forward Slashes
Route::get('/search/{search}', function (string $search) {
    return $search;
})->where('search', '.*');

                                        // ACARA 7
Route::get('/user/profile', function () {
    // ...
})->name('profile');

Route::get('/user/profile',[UserProfileController::class, 'show'])->name('profile');

// Generating URLs...
$url = route('profile');
 
return redirect()->route('profile');


Route::get('/user/{id}/profile', function (string $id) {
    // 
})->name('profile');
 
$url = route('profile', ['id' => 1]);


Route::get('/user/{id}/profile', function (string $id) {
    // 
})->name('profile');
 
$url = route('profile', ['id' => 1, 'photos' => 'yes']);

// ACARA 8
// middleware
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });
 
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});

// Namespaces
Route::namespace('Admin')->group(function () {
    // 
});

// Subdomain Routing
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        // 
    });
});

//  Route Prefixes
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // 
    });
});

//  Route Name Prefixes
Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // 
    })->name('users');
});