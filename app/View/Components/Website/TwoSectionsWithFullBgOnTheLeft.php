<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TwoSectionsWithFullBgOnTheLeft extends Component
{

    public $bgimg;

    /**
     * Create a new component instance.
     */
    public function __construct($bgimg = null)
    {
        $this->bgimg = $bgimg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.two-sections-with-full-bg-on-the-left');
    }
}
