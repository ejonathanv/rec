<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TwoColumnsImgOnRight extends Component
{

    public $id;
    public $bgimg;
    public $img;
    public $alt;
    public $styles;

    /**
     * Create a new component instance.
     */
    public function __construct($id = null, $img = null, $alt = null, $theme = null, $bgimg = null)
    {
        $this->id = $id;
        $this->bgimg = $bgimg;
        $this->img = $img;
        $this->alt = $alt;
        $this->styles = $this->setStyles($theme);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.two-columns-img-on-right');
    }

    private function setStyles($theme)
    {
        switch ($theme) {
            case 'white':
                return 'bgwhite';
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
            case 'cyan':
                return 'bgcyan text-white';
                break;
            default:
                return 'bgwhite';
                break;
        }
    }
}
