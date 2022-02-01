<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::latest()->take(5)->get(),
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
