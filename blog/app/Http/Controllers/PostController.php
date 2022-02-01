<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::latest()->take(5)->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('news', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }
}
