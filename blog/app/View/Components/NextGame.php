<?php

namespace App\View\Components;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\View\Component;

class NextGame extends Component
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
        $nextGame = Game::where('start_time', '>', date('Y-m-d H:i:s'))->orderBy('start_time')->first();
        return view('components.next-game', compact('nextGame'));
    }
}
