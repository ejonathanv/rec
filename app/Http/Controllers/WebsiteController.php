<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.home');
    }

    public function about()
    {
        return view('website.about');
    }

    public function programs()
    {
        return view('website.programs');
    }

    public function knowMore()
    {
        return view('website.knowMore');
    }

    public function post(Post $post)
    {
        return view('website.post', compact('post'));
    }

    public function contact()
    {
        return view('website.contact');
    }
}
