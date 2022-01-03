<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('frontend.pages.index')->with([
    
            'posts' => $posts
        ]);
    }
}
