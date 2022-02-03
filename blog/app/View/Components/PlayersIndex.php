<?php

namespace App\View\Components;

use App\Models\Player;
use Illuminate\View\Component;

class PlayersIndex extends Component
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
        $players = Player::inRandomOrder()->limit(4)->get();
        return view('components.players-index', compact('players'));
    }
}
