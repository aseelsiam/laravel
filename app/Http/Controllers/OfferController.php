<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.offer');
    }


    public function delete($id)
    {
        $post = Post::find($id);
        if ($post->cover_image != 'noimage.jpg')
            Storage::delete('public/cover_images'.$post->cover_image);
        $post->delete();

        return response()->json([
            "message" => "Offer has been deleted"
        ], 201);
    }
}
