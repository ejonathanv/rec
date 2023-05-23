<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SloganBar extends Component
{

    public $slogan;
    public $styles;

    /**
     * Create a new component instance.
     */
    public function __construct($slogan = null, $theme = 'white')
    {
        $this->slogan = $slogan;
        $this->styles = $this->setStyles($theme);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.slogan-bar');
    }

    /**
     * Set the styles for the slogan bar.
     */
    private function setStyles($theme)
    {
        switch ($theme) {
            case 'white':
                return 'bg-white text-primary';
                break;
            case 'primary':
                return 'bgprimary text-white';
                break;
            case 'secondary':
                return 'bgsecondary text-white';
                break;
            case 'light':
                return 'bglight';
                break;
            default:
                return 'bg-white text-black';
                break;
        }
    }
}
