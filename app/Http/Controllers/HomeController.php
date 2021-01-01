<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index() {
        $title = "Welcome To Coffee Store";
        $posts = Post::get();
        return view('public.home')->with('posts',$posts );
    }

    public function about() {
        $title = "About";
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = [
            'title' => 'Services',
            'services' => [
                'Web Development',
                'Front-end Development',
                'Mean Stack Development',
                'Front-end Development',
                'Full Stack Development'
            ]
        ];
        return view('pages.services')->with($data);
    }
}
