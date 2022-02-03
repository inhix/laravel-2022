<?php

namespace App\Http\Controllers;

use App\Http\Repository\PostRepository;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->getForHome();

        return view('index', [
            'posts' => $posts,
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function team()
    {
        return view('team');
    }

    public function about()
    {
        return view('about');
    }
}
