<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;

class FrontendController extends Controller
{
    public function index()
    {
        $gallerys = Gallery::all();
        $posts = Post::all();
        return view('home', compact(['gallerys', 'posts']));
    }
    public function newsdetails($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('newsdetails', compact('post'));
    }

    public function news()
    {
        $posts = Post::all();
        return view('news', compact('posts'));
    }

    public function gallery()
    {
        $gallerys = Gallery::all();
        return view('gallery', compact('gallerys'));
    }

    public function contact()
    {
        return view('contact',);
    }
}
