<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        "title" => "About",
        "name" => "Eko Tri Yustikawan",
        "email" => "ekotriy98@gmail.com",
        "active" => "about"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        "title" => "Post Categories",
        "categories" => Category::all(),
        "active" => "categories"
    ]);
});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('posts',[
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category','author'),
        "active" => "categories"
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view ('posts', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('category','author'),
    ]);
});