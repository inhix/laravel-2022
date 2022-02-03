<?php

namespace App\View\Components;

use App\Models\Game;
use Illuminate\View\Component;

class GamesWidget extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $games = Game::latest()->take(5)->get();
        return view('components.games-widget', compact('games'));
    }
}
