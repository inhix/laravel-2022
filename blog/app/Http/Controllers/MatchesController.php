<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function index()
    {
        return view('matches.index');
    }

    public function show()
    {
        return view('matches.show');
    }
}
