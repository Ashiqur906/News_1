<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Category2Controller extends Controller
{
    public function categoryCreate()
    {
        return view('admin.pages.category.create');
    }
    public function categoryList()
    {
        return view('admin.pages.category.list');
    }
     

}