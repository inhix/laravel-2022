<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class PopularPost extends Component
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
        $popularPost = Post::where('published_at', '>=', date('Y-m-d H:i:s', strtotime('-3 days')))->orderByDesc('views')->first();
        return view('components.popular-post', compact('popularPost'));
    }
}
