<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\NewMessage;
use Illuminate\Http\Request;
use App\Mail\ThankYouForContactUs;
use Illuminate\Support\Facades\Mail;

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

    public function contactPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|string|min:5|max:100',
            'message' => 'required|string|min:10|max:500'
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'email.email' => 'El campo email debe ser un email válido',
            'subject.required' => 'El campo asunto es obligatorio',
            'subject.string' => 'El campo asunto debe ser una cadena de texto',
            'subject.min' => 'El campo asunto debe tener al menos 5 caracteres',
            'subject.max' => 'El campo asunto debe tener máximo 100 caracteres',
            'message.required' => 'El campo mensaje es obligatorio',
            'message.string' => 'El campo mensaje debe ser una cadena de texto',
            'message.min' => 'El campo mensaje debe tener al menos 10 caracteres',
            'message.max' => 'El campo mensaje debe tener máximo 500 caracteres'
        ]);

        Mail::to($request->email)->send(new ThankYouForContactUs($request));
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NewMessage($request));

        return back()->with('success', 'Tu mensaje ha sido enviado con éxito');
    }
}
