<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        // $banner['slider'] = Banner::orderBy('id', 'desc')->get();
        return view('frontend.pages.category');
    }
     
}
