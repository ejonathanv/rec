<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageCover extends Component
{

    public $title;
    public $bgimg;

    /**
     * Create a new component instance.
     */
    public function __construct($title = null, $bgimg = null)
    {
        $this->title = $title;
        $this->bgimg = $bgimg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.page-cover');
    }
}
