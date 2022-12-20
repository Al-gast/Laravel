<?php

use App\Models\Post;
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
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Agastyo Atallah",
        "email" => "Ata@gmail.com",
        "image" => "oliviaRoadrigo.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        "title" => "post",
        "posts" => Post::all()
    ]);
});

Route::get('post/{slug}', function ($slug) {
    return view('post', [
        "title" => "post",
        "post" => Post::find($slug)
    ]);
});