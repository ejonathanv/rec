<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostsSmallList extends Component
{

    public $posts;
    public $title;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $posts)
    {
        $this->title = $title;
        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.posts-small-list');
    }
}
