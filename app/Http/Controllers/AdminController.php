<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_index()
    {
        return view('admin.pages.admin');
    }
}
