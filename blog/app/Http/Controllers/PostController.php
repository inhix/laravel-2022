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
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function blog()
    {
        $posts = $this->getPosts();

        return view('blog', [
            'posts' => $posts,
        ]);
    }

    protected function getPosts()
    {
        return Post::latest()->filter(request(['search', 'category', 'author']))->get();
    }
}
