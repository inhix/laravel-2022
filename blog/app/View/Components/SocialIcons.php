<?php

namespace App\View\Components;

use App\Models\SocialIcon;
use Illuminate\View\Component;

class SocialIcons extends Component
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
        $icons = SocialIcon::all();
        return view('components.social-icons', compact('icons'));
    }
}
