<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {  
        return view('posts', [
            "title" => "All Post",
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }
    
    public function show(Post $post) {
        return view('post', [
            "title" => "post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
