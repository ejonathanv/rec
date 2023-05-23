<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TwoColumns extends Component
{

    public $theme;
    public $styles;

    /**
     * Create a new component instance.
     */
    public function __construct($theme)
    {
        $this->styles = $this->setStyles($theme);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.two-columns');
    }

    private function setStyles($theme)
    {
        switch ($theme) {
            case 'white':
                return 'bgwhite';
                break;
            case 'primary':
                return 'bgprimary textwhite';
                break;
            case 'secondary':
                return 'bgsecondary textwhite';
                break;
            case 'light':
                return 'bglight';
                break;
            default:
                return 'bgwhite';
                break;
        }
    }
}
