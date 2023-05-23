<?php

namespace App\View\Components\Website;

use Closure;
use App\Models\Post;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class RecentPosts extends Component
{

    public $posts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->posts = $this->getRecentPosts();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.recent-posts');
    }

    public function getRecentPosts()
    {
        $posts = Post::where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return $posts;
    }
}
