<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
    public function newsList()
    {
        return view('admin.pages.news.list');
    }
}
