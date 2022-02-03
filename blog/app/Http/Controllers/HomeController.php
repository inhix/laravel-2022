<?php

namespace App\Http\Controllers;

use App\Http\Repository\PostRepository;
use App\Models\Player;

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
        $players = Player::all()->sortBy('number');
        return view('team', compact('players'));
    }

    public function about()
    {
        return view('about');
    }
}
