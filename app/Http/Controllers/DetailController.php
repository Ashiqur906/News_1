<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function details()
    {
        // $banner['slider'] = Banner::orderBy('id', 'desc')->get();
        return view('frontend.pages.details');
    }
}
