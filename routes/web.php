<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        "title" => "home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => "about",
        "name" => "Agastyo Atallah",
        "email" => "Ata@gmail.com",
        "image" => "oliviaRoadrigo.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        "title" => "Post Categories",
        "active" => "categories",
        "categories" => Category::with('posts')->get()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        "title" => "Post By: $category->name",
        "active" => "categories",
        "posts" => $category->posts->load('category', 'user')
    ]);
});

Route::get('/author/{author:username}', function(User $author) {
    return view('posts', [
        "title" => "Post By: $author->name",
        "active" => "posts",
        "posts" => $author->posts->load('category', 'user')   
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware(('guest'));
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index', []);
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');