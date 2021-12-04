<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function header()
    {
        // $Categoty  = Categoty2::orderBy('id', 'desc')->get();
        $Categoty['category']    = Categoty2::all();
        return view('frontend.layouts.header', $Categoty);
    }
}
