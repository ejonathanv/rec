<?php

namespace App\View\Components\Website;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleForm extends Component
{

    public $article;
    public $method;
    public $route;

    /**
     * Create a new component instance.
     */
    public function __construct($article = null, $method = 'POST')
    {
        $this->article = $article;
        $this->method = $method;
        $this->route = $this->defineRoute();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.article-form');
    }

    public function defineRoute(){
        if($this->method == 'POST'){
            return route('pdf-articles-store');
        }else{
            return route('pdf-articles-update', $this->article);
        }
    }
}
