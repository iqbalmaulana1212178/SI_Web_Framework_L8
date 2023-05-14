<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "active" => "about",
        "title" => "About",
        "name" => "Mochamad Iqbal Maulana",
        "email" => "iqbaltech29@gmail.com",
        "image" => "majima.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
        'active' => 'categories'

    ]);
});

// Route::get('/login',[LoginController::class,'index']);
// Route::get('/register',[RegisterController::class,'index']);















    // Route::get('/categories/{category:slug}', function (Category $category) {
    //     return view('blog',[
    //         'title' => "Post By Category : $category->name" ,
    //         'post'=> $category->post->load('category','author'),
    //         'active' => 'categories',
    //         'category'=>$category->name
    //     ]);
        
    // });

    // Route::get('/authors/{author:username}', function (User $author) {
        // dd($user->post);
    //     return view('blog',[
    //         'title' => "Post by Author : $author->name" ,
    //         'active' => 'blog',
    //         'post'=>$author->post->load('category','author'),
    //     ]);
    // });
